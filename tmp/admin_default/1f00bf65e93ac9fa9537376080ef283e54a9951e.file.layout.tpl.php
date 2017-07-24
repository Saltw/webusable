<?php /* Smarty version Smarty-3.1.19, created on 2017-07-10 08:16:23
         compiled from "/var/www/html/webusable/public_html/admin/templates/default/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210695143359637017cedff5-14099799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f00bf65e93ac9fa9537376080ef283e54a9951e' => 
    array (
      0 => '/var/www/html/webusable/public_html/admin/templates/default/layout.tpl',
      1 => 1499642987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210695143359637017cedff5-14099799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'img' => 0,
    'key' => 0,
    'value' => 0,
    'entry' => 0,
    'dashboard' => 0,
    'item' => 0,
    'manageMode' => 0,
    'code' => 0,
    'language_url' => 0,
    'language' => 0,
    'message' => 0,
    'member' => 0,
    'customization_mode' => 0,
    'action' => 0,
    '_content_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59637017f003b2_31216122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59637017f003b2_31216122')) {function content_59637017f003b2_31216122($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_hooker')) include '/var/www/html/webusable/public_html/includes/smarty/intelli_plugins/function.ia_hooker.php';
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['direction'];?>
">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <title><?php echo iaSmarty::ia_print_title(array(),$_smarty_tpl);?>
</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="generator" content="Subrion CMS - Open Source Content Management System">
        <base href="<?php echo @constant('IA_ADMIN_URL');?>
">

        <!--[if lt IE 9]>
            <script src="../../../js/utils/shiv.js"></script>
            <script src="../../../js/utils/respond.min.js"></script>
        <![endif]-->

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/favicon.ico">

        <?php echo smarty_function_ia_hooker(array('name'=>'smartyAdminAfterHeadSection'),$_smarty_tpl);?>


        <?php echo iaSmarty::ia_print_css(array('files'=>"bootstrap-".((string)$_smarty_tpl->tpl_vars['core']->value['config']['sap_style']),'order'=>0),$_smarty_tpl);?>


        <?php echo iaSmarty::ia_add_media(array('files'=>'jquery, extjs, subrion','order'=>0),$_smarty_tpl);?>

        <?php echo iaSmarty::ia_print_js(array('files'=>'_IA_TPL_enquire.min, _IA_TPL_app'),$_smarty_tpl);?>


        <?php echo iaSmarty::ia_print_css(array('display'=>'on'),$_smarty_tpl);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array('order'=>0)); $_block_repeat=true; echo iaSmarty::ia_add_js(array('order'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['customConfig']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                intelli.config.<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 = '<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
';
            <?php } ?>
            intelli.config.admin_url = '<?php echo @constant('IA_URL');?>
<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['admin_page'];?>
';
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array('order'=>0), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </head>
    <body id="page--<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['name'];?>
" class="ss-<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['sap_style'];?>
">
        <div class="overall-wrapper">
            <div class="panels-wrapper">
                <div class="m-header">
                    <a class="m-header__brand" href="<?php echo @constant('IA_ADMIN_URL');?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
logo.png" alt="Subrion CMS &middot; <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['version'];?>
">
                    </a>
                    <a href="#" class="m-header__toggle"><span class="fa fa-bars"></span></a>
                </div>
                <section id="panel-left">
                    <a class="brand" href="<?php echo @constant('IA_ADMIN_URL');?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
logo.png" alt="Subrion CMS &middot; <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['version'];?>
">
                    </a>
                    <ul class="nav-main">
                        <li<?php if (0==$_smarty_tpl->tpl_vars['core']->value['page']['info']['group']) {?> class="current active"<?php }?>>
                            <a href="<?php echo @constant('IA_ADMIN_URL');?>
" class="dashboard" data-toggle="nav-sub-dashboard"><i class="i-gauge"></i><?php echo iaSmarty::lang(array('key'=>'dashboard'),$_smarty_tpl);?>
</a>
                        </li>
                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value['page']['info']['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                            <li<?php if ($_smarty_tpl->tpl_vars['core']->value['page']['info']['group']==$_smarty_tpl->tpl_vars['entry']->value['id']) {?> class="current active"<?php }?> id="menu-section-<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
">
                                <a href="#"<?php if (!empty($_smarty_tpl->tpl_vars['entry']->value['items'])) {?> data-toggle="nav-sub-<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
"<?php }?>><i class="i-cogs i-<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
"></i><?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
</a>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="system-info">
                        Subrion CMS
                        <br>
                        <span class="version">v <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['version'];?>
</span>
                    </div>
                    <div class="social-links">
                        <a href="https://twitter.com/IntelliantsLLC" target="_blank" class="social-links__twitter"><span class="fa fa-twitter"></span></a>
                        <a href="https://www.facebook.com/Intelliants" target="_blank" class="social-links__facebook"><span class="fa fa-facebook"></span></a>
                        <a href="https://github.com/intelliants/subrion" target="_blank" class="social-links__github"><span class="fa fa-github"></span></a>
                    </div>
                </section>

                <section id="panel-center" class="<?php if (isset($_COOKIE['panelHidden'])&&'1'==$_COOKIE['panelHidden']) {?>is-hidden<?php }?>">
                    <?php if (isset($_smarty_tpl->tpl_vars['dashboard']->value)) {?>
                        <ul id="nav-sub-dashboard" class="nav-sub<?php if (0==$_smarty_tpl->tpl_vars['core']->value['page']['info']['group']) {?> active<?php }?>">
                            <li class="single">
                                <ul class="list-unstyled quick-links clearfix">
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dashboard']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><span class="link-icon"><i class="i-<?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
"></i></span><?php echo iaSmarty::lang(array('key'=>$_smarty_tpl->tpl_vars['item']->value['name'],'default'=>$_smarty_tpl->tpl_vars['item']->value['text']),$_smarty_tpl);?>
</a></li>
                                    <?php } ?>
                                    <li class="link-add">
                                        <a href="#" id="js-cmd-add-quicklink">
                                            <span class="link-icon"><i class="i-plus"></i></span><?php echo iaSmarty::lang(array('key'=>'add_quick_link'),$_smarty_tpl);?>

                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    <?php }?>
                    <?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </section>

                <section id="panel-content">
                    <div class="navbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="<?php echo @constant('IA_URL');?>
" title="<?php echo iaSmarty::lang(array('key'=>'site_home'),$_smarty_tpl);?>
" target="_blank"><i class="fa fa-desktop"></i><span> <?php echo iaSmarty::lang(array('key'=>'site_home'),$_smarty_tpl);?>
</span></a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="">
                                    <i class="fa fa-eye"></i><span> <?php echo iaSmarty::lang(array('key'=>'mode'),$_smarty_tpl);?>
</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php $_smarty_tpl->tpl_vars['manageMode'] = new Smarty_variable((isset($_SESSION['manageMode'])&&'mode'==$_SESSION['manageMode']), null, 0);?>
                                    <li>
                                        <a href="<?php if ($_smarty_tpl->tpl_vars['manageMode']->value) {?><?php echo @constant('IA_URL');?>
?manage_exit=y<?php } else { ?><?php echo @constant('IA_ADMIN_URL');?>
visual-mode/<?php }?>" target="_blank"><i class="fa fa-sliders"></i> <?php echo iaSmarty::lang(array('key'=>'visual_mode'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['manageMode']->value) {?> <span class="label label-warning"><?php echo iaSmarty::lang(array('key'=>'active'),$_smarty_tpl);?>
</span><?php }?></a>
                                    </li>
                                    <li><a href="<?php echo @constant('IA_ADMIN_URL');?>
debug-mode/" title=""><i class="fa fa-bug"></i> <?php echo iaSmarty::lang(array('key'=>'debug_mode'),$_smarty_tpl);?>
<?php if (@constant('INTELLI_DEBUG')) {?><span class="label label-warning"><?php echo iaSmarty::lang(array('key'=>'global'),$_smarty_tpl);?>
</span><?php } elseif (@constant('INTELLI_QDEBUG')) {?><span class="label label-warning"><?php echo iaSmarty::lang(array('key'=>'active'),$_smarty_tpl);?>
</span><?php }?></a></li>

                                    <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                                        <li class="divider"></li>
                                        <li class="dropdown-header"><?php echo iaSmarty::lang(array('key'=>"language"),$_smarty_tpl);?>
</li>
                                        <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                                            <?php $_smarty_tpl->tpl_vars['language_url'] = new Smarty_variable(str_replace("/".((string)@constant('IA_LANGUAGE'))."/","/".((string)$_smarty_tpl->tpl_vars['code']->value)."/",@constant('IA_SELF')), null, 0);?>

                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['language_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
<?php if ($_smarty_tpl->tpl_vars['code']->value==@constant('IA_LANGUAGE')) {?> <span class="label label-success"><?php echo iaSmarty::lang(array('key'=>'active'),$_smarty_tpl);?>
</span><?php }?></a></li>
                                        <?php } ?>
                                    <?php }?>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="<?php echo iaSmarty::lang(array('key'=>'quick_access'),$_smarty_tpl);?>
">
                                    <i class="fa fa-bolt"></i><span> <?php echo iaSmarty::lang(array('key'=>'quick_access'),$_smarty_tpl);?>
</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value['page']['info']['headerMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                        <?php if (empty($_smarty_tpl->tpl_vars['entry']->value['name'])) {?>
                                            <li class="divider"></li>
                                        <?php } else { ?>
                                            <li<?php if ($_smarty_tpl->tpl_vars['core']->value['page']['info']['name']==$_smarty_tpl->tpl_vars['entry']->value['name']) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['entry']->value['attr']) {?> <?php echo $_smarty_tpl->tpl_vars['entry']->value['attr'];?>
<?php }?>><span class="fa fa-<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
"></span> <?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
</a></li>
                                        <?php }?>
                                    <?php } ?>
                                </ul>
                            </li>

                            <?php if (isset($_smarty_tpl->tpl_vars['core']->value['notifications']['system'])) {?>
                                <li class="dropdown navbar-nav__notifications">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="<?php echo iaSmarty::lang(array('key'=>'system_notifications'),$_smarty_tpl);?>
">
                                        <i class="fa fa-bell"></i>
                                        <span class="label label-info"><?php echo count($_smarty_tpl->tpl_vars['core']->value['notifications']['system']);?>
</span>
                                        <span> <?php echo iaSmarty::lang(array('key'=>'system_notifications'),$_smarty_tpl);?>
</span>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li class="navbar-nav__notifications__alerts">
                                            <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value['notifications']['system']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
                                                <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
                                            <?php } ?>
                                        </li>
                                    </ul>
                                </li>
                            <?php }?>

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Help and Support">
                                    <i class="fa fa-support"></i>
                                    <span> Help and Support</span>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['core']->value['config']['display_feedbacks'])) {?>
                                        <li>
                                            <a data-toggle="modal" href="#feedback-modal"><span class="fa fa-commenting-o"></span> Submit feedback</a>
                                        </li>
                                    <?php }?>
                                    <li><a href="https://www.subrion.com/desk/" target="_blank"><span class="fa fa-support"></span> Helpdesk</a></li>
                                    <li><a href="https://subrion.org/forums/" target="_blank"><span class="fa fa-comments-o"></span> User forums</a></li>
                                    <li><a href="https://github.com/intelliants/subrion" target="_blank"><span class="fa fa-github"></span> Github</a></li>
                                    <li><a href="https://dev.subrion.org/projects/subrion-cms/wiki" target="_blank"><span class="fa fa-wikipedia-w"></span> Wiki</a></li>
                                </ul>
                            </li>
                            <li class="navbar-nav__user">
                                <a href="<?php echo @constant('IA_ADMIN_URL');?>
members/edit/<?php echo $_smarty_tpl->tpl_vars['member']->value['id'];?>
/" title="<?php echo iaSmarty::lang(array('key'=>'edit'),$_smarty_tpl);?>
">
                                    <?php echo iaSmarty::ia_image(array('file'=>$_smarty_tpl->tpl_vars['member']->value['avatar'],'type'=>'large','alt'=>(($tmp = @$_smarty_tpl->tpl_vars['member']->value['fullname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['member']->value['username'] : $tmp),'gravatar'=>true,'email'=>$_smarty_tpl->tpl_vars['member']->value['email']),$_smarty_tpl);?>

                                </a>
                            </li>
                            <li><a href="<?php echo @constant('IA_ADMIN_URL');?>
logout/" title="<?php echo iaSmarty::lang(array('key'=>'logout'),$_smarty_tpl);?>
" id="user-logout"><i class="fa fa-sign-out"></i> <span><?php echo iaSmarty::lang(array('key'=>'logout'),$_smarty_tpl);?>
</span></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-left hidden-xs hidden-sm">
                            <li class="panel-toggle">
                                <a href="#"><i class="fa<?php if (isset($_COOKIE['panelHidden'])&&'1'==$_COOKIE['panelHidden']) {?> fa-angle-right<?php } else { ?> fa-angle-left<?php }?>"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="page">
                        <div class="page__heading">
                            <div class="page__heading__title">
                                <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['page']['title'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
                                <?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            </div>

                            <?php if (in_array($_smarty_tpl->tpl_vars['core']->value['page']['name'],array('templates','plugins','packages'))) {?>
                                <div class="sap-form filter-toolbar">
                                    <input type="text" class="form-control js-filter-modules-text" placeholder="Start typing...">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo iaSmarty::lang(array('key'=>'filter'),$_smarty_tpl);?>
 <span class="fa fa-angle-down"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-header">Show only</li>
                                            <li><a class="js-filter-modules" data-type="local" data-filtered="no" href="#"><span class="fa fa-check"></span> <?php echo iaSmarty::lang(array('key'=>'local'),$_smarty_tpl);?>
</a></li>
                                            <li><a class="js-filter-modules" data-type="remote" data-filtered="no" href="#"><span class="fa fa-check"></span> <?php echo iaSmarty::lang(array('key'=>'remote'),$_smarty_tpl);?>
</a></li>
                                            <li><a class="js-filter-modules" data-type="installed" data-filtered="no" href="#"><span class="fa fa-check"></span> <?php echo iaSmarty::lang(array('key'=>'installed'),$_smarty_tpl);?>
</a></li>
                                            <li class="divider"></li>
                                            <li><a class="js-filter-modules-reset" href="#"><span class="fa fa-times"></span> <?php echo iaSmarty::lang(array('key'=>'reset'),$_smarty_tpl);?>
</a></li>
                                        </ul>
                                    </div>
                                </div>
                            <?php }?>

                            <ul class="page__heading__actions">
                                <?php if ('index'==$_smarty_tpl->tpl_vars['core']->value['page']['name']) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['customization_mode']->value)) {?>
                                        <li><a href="?reset"><span class="fa fa-refresh"></span> <?php echo iaSmarty::lang(array('key'=>'reset'),$_smarty_tpl);?>
</a></li>
                                        <li><a href="?save" id="js-cmd-save"><span class="fa fa-check-circle"></span> <?php echo iaSmarty::lang(array('key'=>'save'),$_smarty_tpl);?>
</a></li>
                                        <li><a href=""><span class="fa fa-times-circle"></span> <?php echo iaSmarty::lang(array('key'=>'discard'),$_smarty_tpl);?>
</a></li>
                                    <?php } else { ?>
                                        <li><a href="?customize"><span class="fa fa-magic"></span> <?php echo iaSmarty::lang(array('key'=>'customize'),$_smarty_tpl);?>
</a></li>
                                    <?php }?>
                                <?php }?>

                                <?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value['page']['info']['toolbarActions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['action']->value['url'];?>
" <?php echo $_smarty_tpl->tpl_vars['action']->value['attributes'];?>
><?php if ($_smarty_tpl->tpl_vars['action']->value['icon']) {?><i class="<?php echo $_smarty_tpl->tpl_vars['action']->value['icon'];?>
"></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['action']->value['title'];?>
</a></li>
                                <?php } ?>
                            </ul>
                        </div>

                        <?php echo $_smarty_tpl->getSubTemplate ('notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="page__content">
                            <?php echo $_smarty_tpl->tpl_vars['_content_']->value;?>

                        </div>
                    </div>
                </section>
            </div>

            <!-- Feedback modal -->
            <div class="modal fade" id="feedback-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="post" class="sap-form form-horizontal">
                            <?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>

                            <input type="hidden" name="action" value="request">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><i class="i-bubbles-2"></i> <?php echo iaSmarty::lang(array('key'=>'submit_feedback'),$_smarty_tpl);?>
</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col col-lg-12">
                                        <p class="text-muted"><?php echo iaSmarty::lang(array('key'=>'feedback_terms'),$_smarty_tpl);?>
</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-lg-6">
                                        <label><?php echo iaSmarty::lang(array('key'=>'fullname'),$_smarty_tpl);?>
</label>
                                        <input type="text" name="fullname" data-def="<?php echo $_smarty_tpl->tpl_vars['member']->value['fullname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['fullname'];?>
">
                                    </div>
                                    <div class="col col-lg-6">
                                        <label><?php echo iaSmarty::lang(array('key'=>'email'),$_smarty_tpl);?>
</label>
                                        <input type="text" name="email" data-def="<?php echo $_smarty_tpl->tpl_vars['member']->value['email'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['email'];?>
">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-lg-12">
                                        <label id="feedback_subject_label"><?php echo iaSmarty::lang(array('key'=>'subject'),$_smarty_tpl);?>
</label>
                                        <select name="subject">
                                            <option value=""><?php echo iaSmarty::lang(array('key'=>'_select_'),$_smarty_tpl);?>
</option>
                                            <option data-icon="bug"><?php echo iaSmarty::lang(array('key'=>'bug_report'),$_smarty_tpl);?>
</option>
                                            <option data-icon="lightning"><?php echo iaSmarty::lang(array('key'=>'feature_request'),$_smarty_tpl);?>
</option>
                                            <option data-icon="fire"><?php echo iaSmarty::lang(array('key'=>'custom_modification'),$_smarty_tpl);?>
</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-lg-12">
                                        <label><?php echo iaSmarty::lang(array('key'=>'message_body'),$_smarty_tpl);?>
</label>
                                        <textarea name="body" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo iaSmarty::lang(array('key'=>'close'),$_smarty_tpl);?>
</button>
                                <button type="button" id="clearFeedback" class="btn btn-default"><?php echo iaSmarty::lang(array('key'=>'clear'),$_smarty_tpl);?>
</button>
                                <button type="submit" class="btn btn-primary"><?php echo iaSmarty::lang(array('key'=>'send'),$_smarty_tpl);?>
</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php if (!isset($_COOKIE['loader'])||'loaded'!=$_COOKIE['loader']) {?>
            <div id="js-ajax-loader">
                <div class="spinner"><i class="i-spinner"></i></div>
                <p id="js-ajax-loader-status"></p>
            </div>
        <?php }?>

        <?php echo smarty_function_ia_hooker(array('name'=>'smartyAdminFooterBeforeJsDisplay'),$_smarty_tpl);?>

        <?php echo iaSmarty::ia_print_js(array('display'=>'on'),$_smarty_tpl);?>

        <?php echo smarty_function_ia_hooker(array('name'=>'smartyAdminFooterAfterJsDisplay'),$_smarty_tpl);?>

    </body>
</html><?php }} ?>
