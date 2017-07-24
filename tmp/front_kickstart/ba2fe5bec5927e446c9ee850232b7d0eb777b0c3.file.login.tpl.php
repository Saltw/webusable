<?php /* Smarty version Smarty-3.1.19, created on 2017-07-23 07:55:53
         compiled from "/var/www/html/webusable/public_html/templates/kickstart/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35844942759748ec9f153c3-44186187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba2fe5bec5927e446c9ee850232b7d0eb777b0c3' => 
    array (
      0 => '/var/www/html/webusable/public_html/templates/kickstart/login.tpl',
      1 => 1499642987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35844942759748ec9f153c3-44186187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59748eca0c65e6_44241196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59748eca0c65e6_44241196')) {function content_59748eca0c65e6_44241196($_smarty_tpl) {?><div class="ia-form-system">
    <form action="<?php echo @constant('IA_URL');?>
login/" method="post">
        <?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>


        <div class="form-group">
            <input class="form-control" type="text" tabindex="4" name="username" value="<?php if (isset($_POST['username'])) {?><?php echo htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" placeholder="<?php echo iaSmarty::lang(array('key'=>'username_or_email'),$_smarty_tpl);?>
">
        </div>

        <div class="form-group">
            <input class="form-control" type="password" tabindex="5" name="password" placeholder="<?php echo iaSmarty::lang(array('key'=>'password'),$_smarty_tpl);?>
">
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <div class="checkbox-inline">
                        <label><input type="checkbox" name="remember"> <?php echo iaSmarty::lang(array('key'=>'remember_me'),$_smarty_tpl);?>
</label>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <a href="<?php echo @constant('IA_URL');?>
forgot/"><?php echo iaSmarty::lang(array('key'=>'forgot'),$_smarty_tpl);?>
</a>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit" tabindex="6" name="login"><?php echo iaSmarty::lang(array('key'=>'login'),$_smarty_tpl);?>
</button>
        </div>

        <p class="text-center  m-b-0">
            <a href="<?php echo @constant('IA_URL');?>
registration/" rel="nofollow"><?php echo iaSmarty::lang(array('key'=>'registration'),$_smarty_tpl);?>
</a>
        </p>
        <?php if ($_smarty_tpl->tpl_vars['core']->value['providers']) {?>
            <div class="social-providers">
                <p><?php echo iaSmarty::lang(array('key'=>'login_with_social_network'),$_smarty_tpl);?>
:</p>
                <?php  $_smarty_tpl->tpl_vars['provider'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['provider']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['providers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['provider']->key => $_smarty_tpl->tpl_vars['provider']->value) {
$_smarty_tpl->tpl_vars['provider']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['provider']->key;
?>
                    <a class="btn btn-block btn-social btn-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8');?>
" href="<?php echo @constant('IA_URL');?>
login/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8');?>
/"><span class="fa fa-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8');?>
"></span> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
                <?php } ?>
            </div>
        <?php }?>
    </form>
</div>
<?php }} ?>
