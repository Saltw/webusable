<?php /* Smarty version Smarty-3.1.19, created on 2017-07-15 08:11:41
         compiled from "/var/www/html/webusable/public_html/templates/_common/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2035370818596a067d5017f2-46651987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7290a3923efa80aaa10ceff40f420d5f03ab1ed1' => 
    array (
      0 => '/var/www/html/webusable/public_html/templates/_common/error.tpl',
      1 => 1499642987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2035370818596a067d5017f2-46651987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596a067d62c5b9_49404401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596a067d62c5b9_49404401')) {function content_596a067d62c5b9_49404401($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_hooker')) include '/var/www/html/webusable/public_html/includes/smarty/intelli_plugins/function.ia_hooker.php';
?><?php if (iaView::ERROR_NOT_FOUND==$_smarty_tpl->tpl_vars['code']->value) {?>
    <div class="google-suggestions" id="google_suggestions">
        <script type="text/javascript">
            var GOOG_FIXURL_LANG = '<?php echo @constant('IA_LANGUAGE');?>
';
            var GOOG_FIXURL_SITE = '<?php echo @constant('IA_URL');?>
';
        </script>
        <script type="text/javascript" src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
    </div>
<?php }?>

<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontErrorPage'),$_smarty_tpl);?>
<?php }} ?>
