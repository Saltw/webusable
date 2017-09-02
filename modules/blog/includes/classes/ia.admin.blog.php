<?php
class iaBlog extends abstractModuleAdmin
{
    const ALIAS_SUFFIX = '.html';

    protected static $_table = 'blog_entries';
    protected $_tableBlogTags = 'blog_tags';
    protected $_tableBlogEntriesTags = 'blog_entries_tags';

    public $dashboardStatistics = true;


    public function getDashboardStatistics($defaultProcessing = true)
    {
        $statuses = [iaCore::STATUS_ACTIVE, iaCore::STATUS_INACTIVE];
        $rows = $this->iaDb->keyvalue('`status`, COUNT(*)', '1 GROUP BY `status`', self::getTable());
        $total = 0;

        foreach ($statuses as $status) {
            isset($rows[$status]) || $rows[$status] = 0;
            $total += $rows[$status];
        }

        return [
            'icon' => 'quill',
            'item' => iaLanguage::get('blogposts'),
            'rows' => $rows,
            'total' => $total,
            'url' => 'blog/'
        ];
    }

    public function titleAlias($title)
    {
        $result = iaSanitize::tags($title);

        $this->iaCore->factory('util');
        iaUtil::loadUTF8Functions('ascii', 'validation', 'bad', 'utf8_to_ascii');

        utf8_is_ascii($result) || $result = utf8_to_ascii($result);

        $result = preg_replace('#' . self::ALIAS_SUFFIX . '$#i', '', $result);
        $result = iaSanitize::alias($result);
        $result = substr($result, 0, 150); // the DB scheme applies this limitation
        $result .= self::ALIAS_SUFFIX;

        return $result;
    }

    public function delete($id)
    {
        $result = false;

        $this->iaDb->setTable(self::getTable());

        // if item exists, then remove it
        if ($row = $this->iaDb->row_bind(['title', 'image'], '`id` = :id', ['id' => $id])) {
            $result[] = (bool)$this->iaDb->delete(iaDb::convertIds($id), self::getTable());

            if ($row['image'] && $result) { // we have to remove the assigned image as well
                $iaPicture = $this->iaCore->factory('picture');
                $iaPicture->delete($row['image']);
            }

            $result[] = (bool)$this->iaDb->delete(iaDb::convertIds($id, 'blog_id'), $this->_tableBlogEntriesTags);

            $sql = <<<SQL
DELETE FROM `:prefix:table_blog_tags`
WHERE `id` NOT IN (SELECT DISTINCT `tag_id` FROM `:prefix:table_blog_entries_tags`)
SQL;
            $sql = iaDb::printf($sql, [
                'prefix' => $this->iaDb->prefix,
                'table_blog_entries_tags' => $this->_tableBlogEntriesTags,
                'table_blog_tags' => $this->_tableBlogTags
            ]);
            $result[] = (bool)$this->iaDb->query($sql);

            if ($result) {
                $this->iaCore->factory('log')->write(iaLog::ACTION_DELETE,
                    ['module' => 'blog', 'item' => 'blog', 'name' => $row['title'], 'id' => (int)$id]);
            }
        }

        $this->iaDb->resetTable();

        return $result;
    }

    public function getTags($id)
    {
        $sql = <<<SQL
SELECT GROUP_CONCAT(`title`)
	FROM `:prefix:table_blog_tags` bt
WHERE `id` IN (SELECT `tag_id` FROM `:prefix:table_blog_entries_tags` WHERE `blog_id` = :id)
SQL;
        $sql = iaDb::printf($sql, [
            'prefix' => $this->iaDb->prefix,
            'table_blog_tags' => $this->_tableBlogTags,
            'table_blog_entries_tags' => $this->_tableBlogEntriesTags,
            'id' => $id
        ]);

        return $this->iaDb->getOne($sql);
    }

    public function getSitemapEntries()
    {
        $result = [];

        $stmt = '`status` = :status';
        $this->iaDb->bind($stmt, ['status' => iaCore::STATUS_ACTIVE]);
        if ($rows = $this->iaDb->all(['alias'], $stmt, null, null, self::getTable())) {
            foreach ($rows as $row) {
                $result[] = IA_URL . 'blog' . IA_URL_DELIMITER . $row['alias'];
            }
        }

        return $result;
    }
}
