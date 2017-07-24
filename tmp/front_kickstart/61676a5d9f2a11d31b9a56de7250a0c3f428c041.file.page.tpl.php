<?php /* Smarty version Smarty-3.1.19, created on 2017-07-10 08:16:54
         compiled from "/var/www/html/webusable/public_html/templates/_common/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49075453359637036369ea5-00339323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61676a5d9f2a11d31b9a56de7250a0c3f428c041' => 
    array (
      0 => '/var/www/html/webusable/public_html/templates/_common/page.tpl',
      1 => 1499642987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49075453359637036369ea5-00339323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'protect' => 0,
    'page_protect' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596370363c2aa4_68901059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596370363c2aa4_68901059')) {function content_596370363c2aa4_68901059($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['protect']->value) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['page_protect']->value)) {?>
        <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['page_protect']->value;?>
</div>
    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php } else { ?>
    <div class="alert alert-warning"><?php echo iaSmarty::lang(array('key'=>'password_protected_page'),$_smarty_tpl);?>
</div>

    <form action="<?php echo @constant('IA_SELF');?>
" method="post" class="form-inline">
        <?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>

        <label><?php echo iaSmarty::lang(array('key'=>'password'),$_smarty_tpl);?>
:
            <input type="password" tabindex="5" name="password" value="">
            <button type="submit" tabindex="6" name="login" value="" class="btn btn-primary"><?php echo iaSmarty::lang(array('key'=>'view'),$_smarty_tpl);?>
</button>
        </label>
    </form>
<?php }?><?php }} ?>
