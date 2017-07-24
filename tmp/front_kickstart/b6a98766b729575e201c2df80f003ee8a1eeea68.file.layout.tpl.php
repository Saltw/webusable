<?php /* Smarty version Smarty-3.1.19, created on 2017-07-24 13:47:17
         compiled from "/var/www/html/webusable/public_html/templates/kickstart/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:606162116596370363c5b74-70782174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6a98766b729575e201c2df80f003ee8a1eeea68' => 
    array (
      0 => '/var/www/html/webusable/public_html/templates/kickstart/layout.tpl',
      1 => 1500896768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '606162116596370363c5b74-70782174',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596370365f5b57_79895956',
  'variables' => 
  array (
    'core' => 0,
    'key' => 0,
    'value' => 0,
    'img' => 0,
    'iaBlocks' => 0,
    'name' => 0,
    'item' => 0,
    'action' => 0,
    '_content_' => 0,
    'manageMode' => 0,
    'previewMode' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596370365f5b57_79895956')) {function content_596370365f5b57_79895956($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_hooker')) include '/var/www/html/webusable/public_html/includes/smarty/intelli_plugins/function.ia_hooker.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/webusable/public_html/includes/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_randnum')) include '/var/www/html/webusable/public_html/includes/smarty/intelli_plugins/function.randnum.php';
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['direction'];?>
">
    <head>
        <?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeHeadSection'),$_smarty_tpl);?>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <title><?php echo iaSmarty::ia_print_title(array(),$_smarty_tpl);?>
</title>
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['meta-description'];?>
">
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['meta-keywords'];?>
">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="generator" content="Subrion CMS - Open Source Content Management System">
        <meta name="robots" content="index">
        <meta name="robots" content="follow">
        <meta name="revisit-after" content="1 day">
        <base href="<?php echo @constant('IA_URL');?>
">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="<?php if (!empty($_smarty_tpl->tpl_vars['core']->value['config']['site_favicon'])) {?><?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
uploads/<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['site_favicon'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
favicon.ico<?php }?>">

        <?php echo iaSmarty::ia_add_media(array('files'=>'jquery, subrion, bootstrap','order'=>0),$_smarty_tpl);?>

        <?php echo iaSmarty::ia_print_js(array('files'=>'_IA_TPL_app','order'=>999),$_smarty_tpl);?>


        <?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontAfterHeadSection'),$_smarty_tpl);?>


        <?php echo iaSmarty::ia_print_css(array('display'=>'on'),$_smarty_tpl);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmarty::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            intelli.pageName = '<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['name'];?>
';

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
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['custom_colors']) {?>
            <style type="text/css">
                body { background-color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['custom_color_body_bg'];?>
; color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['custom_color_text'];?>
; }
                h1, h2, h3, h4, h5, h6,
                .box__caption { color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['custom_color_headings'];?>
; }
                a,
                a:focus { color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['custom_color_link'];?>
; }
                a:hover { color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['custom_color_link_hover'];?>
; }

                .inventory { background-color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['custom_color_inventory_bg'];?>
; }
                .nav-inventory > li > a,
                .nav-inventory > li > a:focus { color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['custom_color_inventory_link'];?>
; }
                .nav-inventory > li > a:hover { color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['custom_color_inventory_link_hover'];?>
; }
                .nav-inventory > li.active > a,
                .nav-inventory > li.active > a:focus,
                .nav-inventory > li.active > a:hover { color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['custom_color_inventory_link_active'];?>
; }

                .navbar-default { background-color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['custom_color_navbar_bg'];?>
; }
                .navbar-default .navbar-nav > li > a,
                .navbar-default .navbar-nav > li > a:focus { color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['custom_color_navbar_link'];?>
; }
                .navbar-default .navbar-nav > li > a:hover { color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['custom_color_navbar_link_hover'];?>
; }
                .navbar-default .navbar-nav > li.active > a,
                .navbar-default .navbar-nav > li.active > a:focus,
                .navbar-default .navbar-nav > li.active > a:hover { color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['custom_color_navbar_link_active'];?>
; }

                .header {
                    <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['bg_header_use_color']) {?>
                        background: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['bg_header_color'];?>
;
                    <?php } elseif ($_smarty_tpl->tpl_vars['core']->value['config']['bg_header']) {?>
                        background-image: url('<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
uploads/<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['bg_header'];?>
');
                    <?php }?>
                }

                .section-features {
                    <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['bg_features_use_color']) {?>
                        background: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['bg_features_color'];?>
;
                    <?php } elseif ($_smarty_tpl->tpl_vars['core']->value['config']['bg_features']) {?>
                        background-image: url('<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
uploads/<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['bg_features'];?>
');
                    <?php }?>
                }

                .footer-blocks { background: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['footer_blocks_bg'];?>
; }
                .footer { background: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['footer_bg'];?>
; }
                .nav-footer > li > a,
                .nav-footer > li > a:focus { color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['footer_link'];?>
; }
                .nav-footer > li > a:hover { color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['footer_link_hover'];?>
; }
                .nav-footer > li.active > a,
                .nav-footer > li.active > a:focus,
                .nav-footer > li.active > a:hover { color: <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['footer_link_active'];?>
; }
            </style>
        <?php }?>
    </head>

    <body class="page-<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['name'];?>
">
        <div class="inventory">
            <div class="container">
                <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social']) {?>
                    <ul class="nav-inventory nav-inventory-social pull-left hidden-xs">
                        <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social_t']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['website_social_t'];?>
" class="twitter"><span class="fa fa-twitter"></span></a></li><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social_f']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['website_social_f'];?>
" class="facebook"><span class="fa fa-facebook"></span></a></li><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social_g']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['website_social_g'];?>
" class="google-plus"><span class="fa fa-google-plus"></span></a></li><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social_i']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['website_social_i'];?>
" class="linkedin"><span class="fa fa-linkedin"></span></a></li><?php }?>
                    </ul>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['search_inventory']) {?>
                    <form method="get" action="<?php echo @constant('IA_URL');?>
search/" class="search-inventory pull-right">
                        <input type="text" name="q" placeholder="<?php echo iaSmarty::lang(array('key'=>'search'),$_smarty_tpl);?>
">
                        <button type="submit"><span class="fa fa-search"></span></button>
                    </form>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ('language-selector.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php echo iaSmarty::ia_blocks(array('block'=>'inventory'),$_smarty_tpl);?>

            </div>
        </div>

        <nav class="cebolla navbar navbar-default <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['navbar_sticky']) {?>navbar-sticky<?php }?>">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand<?php if (!$_smarty_tpl->tpl_vars['core']->value['config']['enable_text_logo']) {?> navbar-brand--img<?php }?>" href="<?php echo @constant('IA_URL');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['enable_text_logo']) {?>
                            <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['logo_text'];?>

                        <?php } else { ?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['core']->value['config']['site_logo'])) {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
uploads/<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['site_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['site'];?>
">
                            <?php } else { ?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['site'];?>
">
                            <?php }?>
                        <?php }?>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['search_navbar']) {?>
                        <form method="get" action="<?php echo @constant('IA_URL');?>
search/" class="search-navbar pull-right">
                            <button class="search-navbar__toggle js-search-navbar-toggle" type="button"><span class="fa fa-search"></span></button>
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="<?php echo iaSmarty::lang(array('key'=>'search'),$_smarty_tpl);?>
">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary" type="submit"><?php echo iaSmarty::lang(array('key'=>'search'),$_smarty_tpl);?>
</button>
                                </div>
                            </div>
                        </form>
                    <?php }?>
                    <?php echo iaSmarty::ia_blocks(array('block'=>'account'),$_smarty_tpl);?>

                    <?php echo iaSmarty::ia_blocks(array('block'=>'mainmenu'),$_smarty_tpl);?>

                </div>
            </div>
        </nav>

        <?php if (isset($_GET['elements'])) {?>
            <?php echo $_smarty_tpl->getSubTemplate ('page.elements.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } else { ?>
        <header class="header">
            <?php echo iaSmarty::ia_blocks(array('block'=>'teaser'),$_smarty_tpl);?>

        </header>

        <?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeBreadcrumb'),$_smarty_tpl);?>


        <?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['enable_landing']&&'index'==$_smarty_tpl->tpl_vars['core']->value['page']['name']) {?>
            <div class="landing">
                <?php echo iaSmarty::ia_blocks(array('block'=>'landing'),$_smarty_tpl);?>

            </div>
        <?php } else { ?>
            <?php if (isset($_smarty_tpl->tpl_vars['iaBlocks']->value['verytop'])) {?>
                <div class="verytop">
                    <div class="container"><?php echo iaSmarty::ia_blocks(array('block'=>'verytop'),$_smarty_tpl);?>
</div>
                </div>
            <?php }?>

            <div class="content">
                <div class="container">
                    <?php if (in_array($_smarty_tpl->tpl_vars['core']->value['page']['name'],array('login','member_registration'))) {?>
                        <div class="page-system">
                            <div class="content__header">
                                <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['page']['title'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
                                <ul class="content__actions">
                                    <?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['action']->key;
?>
                                        <li>
                                            <?php if ('action-favorites'==$_smarty_tpl->tpl_vars['name']->value) {?>
                                                <?php echo iaSmarty::printFavorites(array('item'=>$_smarty_tpl->tpl_vars['item']->value,'itemtype'=>$_smarty_tpl->tpl_vars['item']->value['item'],'guests'=>true),$_smarty_tpl);?>

                                            <?php } else { ?>
                                                <a data-toggle="tooltip" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['action']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php } ?>>
                                                    <span class="fa fa-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></span>
                                                </a>
                                            <?php }?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>

                            <?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeNotifications'),$_smarty_tpl);?>

                            <?php echo $_smarty_tpl->getSubTemplate ('notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                            <?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeMainContent'),$_smarty_tpl);?>


                            <div class="content__body">
                                <?php echo $_smarty_tpl->tpl_vars['_content_']->value;?>

                            </div>

                            <?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontAfterMainContent'),$_smarty_tpl);?>

                        </div>
                    <?php } else { ?>
                        <div class="row">
                            <div class="<?php echo iaSmarty::width(array('section'=>'content','position'=>'left','tag'=>'col-md-'),$_smarty_tpl);?>
 aside">
                                <?php echo iaSmarty::ia_blocks(array('block'=>'left'),$_smarty_tpl);?>

                            </div>
                            <div class="<?php echo iaSmarty::width(array('section'=>'content','position'=>'center','tag'=>'col-md-'),$_smarty_tpl);?>
">
                                <div class="content__wrap">

                                    <?php echo iaSmarty::ia_blocks(array('block'=>'top'),$_smarty_tpl);?>


                                    <div class="content__header">
                                        <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['page']['title'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
                                        <ul class="content__actions">
                                            <?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['action']->key;
?>
                                                <li>
                                                    <?php if ('action-favorites'==$_smarty_tpl->tpl_vars['name']->value) {?>
                                                        <?php echo iaSmarty::printFavorites(array('item'=>$_smarty_tpl->tpl_vars['item']->value,'itemtype'=>$_smarty_tpl->tpl_vars['item']->value['item'],'guests'=>true),$_smarty_tpl);?>

                                                    <?php } else { ?>
                                                        <a data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['action']->value['title'];?>
" <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['action']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php } ?>>
                                                            <span class="fa fa-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></span>
                                                        </a>
                                                    <?php }?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>

                                    <?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeNotifications'),$_smarty_tpl);?>

                                    <?php echo $_smarty_tpl->getSubTemplate ('notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                                    <?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeMainContent'),$_smarty_tpl);?>


                                    <div class="content__body">
                                        <?php echo $_smarty_tpl->tpl_vars['_content_']->value;?>

                                    </div>

                                    <?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontAfterMainContent'),$_smarty_tpl);?>


                                    <?php echo iaSmarty::ia_blocks(array('block'=>'bottom'),$_smarty_tpl);?>

                                </div>
                            </div>
                            <div class="<?php echo iaSmarty::width(array('section'=>'content','position'=>'right','tag'=>'col-md-'),$_smarty_tpl);?>
 aside">
                                <?php echo iaSmarty::ia_blocks(array('block'=>'right'),$_smarty_tpl);?>

                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>

            <?php if (isset($_smarty_tpl->tpl_vars['iaBlocks']->value['verybottom'])) {?>
                <div class="verybottom">
                    <div class="container"><?php echo iaSmarty::ia_blocks(array('block'=>'verybottom'),$_smarty_tpl);?>
</div>
                </div>
            <?php }?>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['iaBlocks']->value['footer1'])||isset($_smarty_tpl->tpl_vars['iaBlocks']->value['footer2'])||isset($_smarty_tpl->tpl_vars['iaBlocks']->value['footer3'])||isset($_smarty_tpl->tpl_vars['iaBlocks']->value['footer4'])) {?>
            <div class="footer-blocks">
                <div class="container">
                    <div class="row">
                        <div class="<?php echo iaSmarty::width(array('section'=>'footer-blocks','position'=>'footer1','tag'=>'col-md-'),$_smarty_tpl);?>
"><?php echo iaSmarty::ia_blocks(array('block'=>'footer1'),$_smarty_tpl);?>
</div>
                        <div class="<?php echo iaSmarty::width(array('section'=>'footer-blocks','position'=>'footer2','tag'=>'col-md-'),$_smarty_tpl);?>
"><?php echo iaSmarty::ia_blocks(array('block'=>'footer2'),$_smarty_tpl);?>
</div>
                        <div class="<?php echo iaSmarty::width(array('section'=>'footer-blocks','position'=>'footer3','tag'=>'col-md-'),$_smarty_tpl);?>
"><?php echo iaSmarty::ia_blocks(array('block'=>'footer3'),$_smarty_tpl);?>
</div>
                        <div class="<?php echo iaSmarty::width(array('section'=>'footer-blocks','position'=>'footer4','tag'=>'col-md-'),$_smarty_tpl);?>
"><?php echo iaSmarty::ia_blocks(array('block'=>'footer4'),$_smarty_tpl);?>
</div>
                    </div>
                </div>
            </div>
        <?php }?>
        <?php }?>

        <footer class="footer">
            <div class="container">
                <?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeFooterLinks'),$_smarty_tpl);?>


                <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social']) {?>
                    <ul class="nav-footer nav-footer-social">
                        <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social_t']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['website_social_t'];?>
" class="twitter"><span class="fa fa-twitter"></span></a></li><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social_f']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['website_social_f'];?>
" class="facebook"><span class="fa fa-facebook"></span></a></li><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social_g']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['website_social_g'];?>
" class="google-plus"><span class="fa fa-google-plus"></span></a></li><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social_i']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['website_social_i'];?>
" class="linkedin"><span class="fa fa-linkedin"></span></a></li><?php }?>
                    </ul>
                <?php }?>

                <?php echo iaSmarty::ia_blocks(array('block'=>'copyright'),$_smarty_tpl);?>


                <p class="copyright">&copy; <?php echo smarty_modifier_date_format($_SERVER['REQUEST_TIME'],'%Y');?>
 <?php echo iaSmarty::lang(array('key'=>'powered_by_subrion'),$_smarty_tpl);?>
</p>

                <?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontAfterFooterLinks'),$_smarty_tpl);?>

            </div>
        </footer>

        <button class="back-to-top js-back-to-top"><span class="fa fa-angle-double-up"></span></button>

        <!-- SYSTEM STUFF -->

        <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['cron']) {?>
            <div style="display: none;">
                <img src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
cron/?<?php echo smarty_function_randnum(array(),$_smarty_tpl);?>
" width="1" height="1" alt="">
            </div>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['manageMode']->value)) {?>
            <?php echo $_smarty_tpl->getSubTemplate ('visual-mode.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['previewMode']->value)) {?>
            <p><?php echo iaSmarty::lang(array('key'=>'youre_in_preview_mode'),$_smarty_tpl);?>
</p>
        <?php }?>

        <?php echo iaSmarty::ia_print_js(array('display'=>'on'),$_smarty_tpl);?>


        <?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontFinalize'),$_smarty_tpl);?>

    </body>
</html>
<?php }} ?>
