<?php /* Smarty version Smarty-3.1.19, created on 2017-07-10 08:16:24
         compiled from "/var/www/html/webusable/public_html/admin/templates/default/notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16278590905963701812f575-84422205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d694ec3adb637257a4122213bbbf5aa48e470d8' => 
    array (
      0 => '/var/www/html/webusable/public_html/admin/templates/default/notification.tpl',
      1 => 1499642987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16278590905963701812f575-84422205',
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
  'unifunc' => 'content_596370181447d3_83506739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596370181447d3_83506739')) {function content_596370181447d3_83506739($_smarty_tpl) {?><div id="notification" style="display: none;"></div>
<?php  $_smarty_tpl->tpl_vars['entries'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entries']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entries']->key => $_smarty_tpl->tpl_vars['entries']->value) {
$_smarty_tpl->tpl_vars['entries']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['entries']->key;
?>
    <?php if ('system'!=$_smarty_tpl->tpl_vars['type']->value) {?>
        <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
            <ul>
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
    <?php }?>
<?php } ?><?php }} ?>
