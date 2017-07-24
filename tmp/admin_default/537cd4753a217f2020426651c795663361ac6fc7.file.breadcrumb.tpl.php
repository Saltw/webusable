<?php /* Smarty version Smarty-3.1.19, created on 2017-07-10 08:16:24
         compiled from "/var/www/html/webusable/public_html/admin/templates/default/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:754677960596370180d5219-29301072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '537cd4753a217f2020426651c795663361ac6fc7' => 
    array (
      0 => '/var/www/html/webusable/public_html/admin/templates/default/breadcrumb.tpl',
      1 => 1499642987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '754677960596370180d5219-29301072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5963701812bc85_57558338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5963701812bc85_57558338')) {function content_5963701812bc85_57558338($_smarty_tpl) {?><ul class="breadcrumb">
    <?php if ('index'==$_smarty_tpl->tpl_vars['core']->value['page']['name']) {?>
        <li class="active"><?php echo iaSmarty::lang(array('key'=>'welcome_to_admin_board'),$_smarty_tpl);?>
</li>
    <?php } else { ?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value['page']['breadcrumb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['url']&&!$_smarty_tpl->tpl_vars['item']->last) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['caption'];?>
</a></li>
            <?php } else { ?>
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['item']->value['caption'];?>
</li>
            <?php }?>
        <?php } ?>
    <?php }?>
</ul><?php }} ?>
