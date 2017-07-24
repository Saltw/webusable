<?php /* Smarty version Smarty-3.1.19, created on 2017-07-15 08:11:41
         compiled from "/var/www/html/webusable/public_html/templates/_common/notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:789923610596a067d7dc7e3-99152046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bee3d946a5694b0cfc608d3610b474b10e9f2425' => 
    array (
      0 => '/var/www/html/webusable/public_html/templates/_common/notification.tpl',
      1 => 1499642987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '789923610596a067d7dc7e3-99152046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'type' => 0,
    'entries' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596a067d82cb98_85075331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596a067d82cb98_85075331')) {function content_596a067d82cb98_85075331($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['entries'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entries']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entries']->key => $_smarty_tpl->tpl_vars['entries']->value) {
$_smarty_tpl->tpl_vars['entries']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['entries']->key;
?>
    <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
        <ul class="list-unstyled">
            <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</li>
            <?php } ?>
        </ul>
    </div>
<?php }
if (!$_smarty_tpl->tpl_vars['entries']->_loop) {
?>
    <div id="notification" class="alert alert-info" style="display: none;"></div>
<?php } ?><?php }} ?>
