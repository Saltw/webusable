<?php /* Smarty version Smarty-3.1.19, created on 2017-07-10 08:16:54
         compiled from "templates/_common/hook.header-code.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2917767865963703665a5f4-07162236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c0bd22495546040458d479f4109b6b1d976baf3' => 
    array (
      0 => 'templates/_common/hook.header-code.tpl',
      1 => 1499642987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2917767865963703665a5f4-07162236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'key' => 0,
    'value' => 0,
    'noImage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_596370366ce058_08773217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596370366ce058_08773217')) {function content_596370366ce058_08773217($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/webusable/public_html/includes/smarty/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->tpl_vars['core']->value['config']['frontend_header_code'];?>


<?php if (isset($_smarty_tpl->tpl_vars['core']->value['page']['info']['og'])) {?>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['page']['info']['og']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <meta property="og:<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" content="<?php if ($_smarty_tpl->tpl_vars['key']->value=='description') {?><?php echo smarty_modifier_truncate(htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8', true),200);?>
<?php } else { ?><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
        <?php if ('image'==$_smarty_tpl->tpl_vars['key']->value) {?>
            <?php $_smarty_tpl->tpl_vars['noImage'] = new Smarty_variable(true, null, 0);?>
        <?php }?>
    <?php } ?>
<?php } else { ?>
    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['page']['title'], ENT_QUOTES, 'UTF-8', true);?>
">
    <meta property="og:url" content="<?php echo @constant('IA_SELF');?>
">
    <meta property="og:description" content="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['core']->value['config']['opengraph_description']), ENT_QUOTES, 'UTF-8', true);?>
">
<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['noImage']->value)&&$_smarty_tpl->tpl_vars['core']->value['config']['opengraph_image']) {?>
    <meta property="og:image" content="<?php echo @constant('IA_URL');?>
uploads/<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['opengraph_image'];?>
">
<?php }?><?php }} ?>
