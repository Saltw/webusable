<?php /* Smarty version Smarty-3.1.19, created on 2017-07-23 07:56:35
         compiled from "/var/www/html/webusable/public_html/admin/templates/default/goto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9308534059748ef32477f2-39039403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2972fb160aff782c79b7084c07d9578d22be9e0f' => 
    array (
      0 => '/var/www/html/webusable/public_html/admin/templates/default/goto.tpl',
      1 => 1499642987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9308534059748ef32477f2-39039403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goto' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59748ef325f2d7_67359637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59748ef325f2d7_67359637')) {function content_59748ef325f2d7_67359637($_smarty_tpl) {?><label><?php echo iaSmarty::lang(array('key'=>'and_then'),$_smarty_tpl);?>
</label>
<select name="goto" class="goto-actions">
    <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['action']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_POST['goto'])&&$_POST['goto']==$_smarty_tpl->tpl_vars['action']->value) {?> selected<?php }?>><?php echo iaSmarty::lang(array('key'=>$_smarty_tpl->tpl_vars['name']->value,'default'=>$_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl);?>
</option>
    <?php } ?>
</select><?php }} ?>
