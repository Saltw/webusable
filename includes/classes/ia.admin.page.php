<?php
class iaPage extends abstractCore
{
    protected static $_table = 'pages';

    protected static $_adminTable = 'admin_pages';
    protected static $_adminGroupsTable = 'admin_pages_groups';

    public $extendedExtensions = ['htm', 'html', 'php'];

    protected static $_pageTitles = [];


    public static function getAdminTable()
    {
        return self::$_adminTable;
    }

    public static function getAdminGroupsTable()
    {
        return self::$_adminGroupsTable;
    }

    public function getNonServicePages(array $exclude)
    {
        $sql = <<<SQL
SELECT DISTINCTROW p.*, l.`value`, IF(l.`value` IS NULL, p.`name`, l.`value`) `title`
	FROM `:table_pages` p
LEFT JOIN `:table_phrases` l ON (`key` = CONCAT('page_title_', p.`name`) AND l.`code` = ':lang')
WHERE p.`status` = ':status' AND p.`service` = 0 :extra_where
ORDER BY l.`value`
SQL;
        $sql = iaDb::printf($sql, [
            'table_pages' => self::getTable(true),
            'table_phrases' => $this->iaDb->prefix . iaLanguage::getTable(),
            'lang' => $this->iaCore->language['iso'],
            'status' => iaCore::STATUS_ACTIVE,
            'extra_where' => $exclude ? "AND !FIND_IN_SET(p.`name`, '" . implode(',', $exclude) . "') " : ''
        ]);

        return $this->iaDb->getAll($sql);
    }

    public function getTitles($side = iaCore::FRONT)
    {
        if (!isset(self::$_pageTitles[$side])) {
            $category = iaCore::FRONT == $side ? iaLanguage::CATEGORY_PAGE : iaLanguage::CATEGORY_ADMIN;

            $where = '`key` LIKE :key AND `category` = :category AND `code` = :code';
            $this->iaDb->bind($where, ['key' => 'page_title_%', 'category' => $category, 'code' => $this->iaView->language]);

            self::$_pageTitles[$side] = $this->iaDb->keyvalue("REPLACE(`key`, 'page_title_', '') `key`, `value`", $where, iaLanguage::getTable());
        }

        return self::$_pageTitles[$side];
    }

    public function getPageTitle($pageName, $default = null)
    {
        $this->getTitles();

        if (!isset(self::$_pageTitles[iaCore::FRONT][$pageName])) {
            return is_null($default) ? $pageName : $default;
        }

        return self::$_pageTitles[iaCore::FRONT][$pageName];
    }

    public function getGroups(array $exclusions = [])
    {
        $stmt = '`status` = :status AND `service` = 0';
        if ($exclusions) {
            $stmt.= " AND `name` NOT IN ('" . implode("','", array_map(['iaSanitize', 'sql'], $exclusions)) . "')";
        }
        $this->iaDb->bind($stmt, ['status' => iaCore::STATUS_ACTIVE]);

        $pages = [];
        $result = [];

        $rows = $this->iaDb->all(['id', 'name', 'group'], $stmt, null, null, self::getTable());
        $titles = $this->getTitles();
        foreach ($rows as $page) {
            $page['group'] || $page['group'] = 1;
            $pages[$page['group']][$page['id']] = isset($titles[$page['name']]) ? $titles[$page['name']] : $page['name'];
        }

        $rows = $this->iaDb->all(['id', 'name'], null, null, null, self::getAdminGroupsTable());
        foreach ($rows as $row) {
            if (isset($pages[$row['id']])) {
                $result[$row['id']] = [
                    'title' => iaLanguage::get('pages_group_' . $row['name']),
                    'children' => $pages[$row['id']]
                ];
            }
        }

        return $result;
    }

    // Nueva función para categorizar Pages
    public function getPagesGroups(array $exclusions = [])
    {
        $stmt = '`status` = :status AND `service` = 0';
        if ($exclusions) {
            $stmt.= " AND `name` NOT IN ('" . implode("','", array_map(['iaSanitize', 'sql'], $exclusions)) . "')";
        }
        $this->iaDb->bind($stmt, ['status' => iaCore::STATUS_ACTIVE]);

        $pages = [];
        $result = [];
        $todas = [];

        $rows = $this->iaDb->all(['id', 'name', 'group', 'parent'], $stmt, null, null, self::getTable());

        $titles = $this->getTitles();

        foreach ($rows as $page) {
            $page['group'] || $page['group'] = 1;
            $pages[$page['group']][$page['id']] = isset($titles[$page['name']]) ? ['name' => $page['name'], 'title' =>$titles[$page['name']], 'parent' => $page['parent']] : ['name' => $page['name'], 'parent' => $page['parent']];
        }

        $rows = $this->iaDb->all(['id', 'name'], null, null, null, self::getAdminGroupsTable());

        foreach ($rows as $row) {
            if (isset($pages[$row['id']])) {
                $result[$row['id']]['title'] = iaLanguage::get('pages_group_' . $row['name']);
                $result[$row['id']]['children'] = $pages[$row['id']];
            }
        }

        // array con todas y array con páginas hijas
        if (is_array($result) && !empty($result)) {
            foreach ($result as $k => $grupo ) {
                if (is_array($grupo) && !empty($grupo)) {
                    foreach ($grupo as $pags){
                        if (is_array($pags) && !empty($pags)) {
                            foreach($pags as $id => $v){
                                $todas[$k][$id] = $v;
                                if(!empty($v['parent'])){
                                    $fillas[$k][$id] = $v;
                                } else {
                                    $evas[$id] = $v;
                                }
                            }
                        }
                    }
                }
            }
        }

        // Nivel 2
        if (is_array($todas) && !empty($todas)) {
            foreach ($todas as $k => $pag) {
                if (is_array($pag) && !empty($pag)) {
                    foreach ($pag as $id => $v) {
                        if (is_array($fillas) && !empty($fillas)) {
                            foreach ($fillas as $fk => $fpag) {
                                if (is_array($fpag) && !empty($fpag)) {
                                    foreach ($fpag as $fid => $fv) {
                                        if ($v['name'] == $fv ['parent']){
                                            $result[$k]['children'][$id]['children'][$fid] = $fv;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        // Nivel 3
        if (is_array($result) && !empty($result)) {
            foreach ($result as $k => $grupo ) {
                if (is_array($grupo) && !empty($grupo)) {
                    foreach ($grupo as $pags) {
                        if (is_array($pags) && !empty($pags)) {
                            foreach($pags as $id => $v) {
                                if (is_array($evas) && !empty($pags)) {
                                    foreach($evas as $eid => $ev) {
                                        if ($ev['name'] == $v['parent']) {
                                            $result[$k]['children'][$eid]['children'][$id] = $v;
                                            unset($result[$k]['children'][$id]);
                                            if (!empty($result[$k]['children'][$eid]['children'][$id]['children'])){
                                                if (is_array($v) && !empty($v)) {
                                                    foreach ($v as $fid => $fv) {
                                                        if (is_array($fv) && !empty($fv)) {
                                                            foreach ($fv as $nid => $nv) {
                                                                if (!empty($nv)){
                                                                    unset($result[$k]['children'][$nid]);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        return $result;
    }

    public function getUrlByName($pageName)
    {
        static $pagesToUrlMap;

        if (is_null($pagesToUrlMap)) {
            $pagesToUrlMap = $this->iaDb->keyvalue(['name', 'alias'], null, self::getAdminTable());
        }

        if (isset($pagesToUrlMap[$pageName])) {
            return $pagesToUrlMap[$pageName] ? $pagesToUrlMap[$pageName] : $pageName;
        }

        return null;
    }

    public function getByName($pageName, $lookupThroughBackend = true)
    {
        $result = $this->iaDb->row_bind(iaDb::ALL_COLUMNS_SELECTION, '`name` = :name', ['name' => $pageName],
            $lookupThroughBackend ? self::getAdminTable() : self::getTable());

        if ($result) {
            $result['title'] = $this->iaDb->one_bind(['value'], '`key` = :key AND `category` = :category AND `code` = :lang',
                ['key' => 'page_title_' . $pageName, 'category' => $lookupThroughBackend ? iaLanguage::CATEGORY_ADMIN : iaLanguage::CATEGORY_PAGE,
                    'lang' => $this->iaView->language], iaLanguage::getTable());
        }

        return $result;
    }
}
