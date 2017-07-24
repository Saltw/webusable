<?php /* Smarty version Smarty-3.1.19, created on 2017-07-23 07:57:00
         compiled from "/var/www/html/webusable/public_html/admin/templates/default/configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50095013059748f0ce7acb8-21838276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac1e4d672841a3e83cfeb90fc9689f97da86104a' => 
    array (
      0 => '/var/www/html/webusable/public_html/admin/templates/default/configuration.tpl',
      1 => 1499642987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50095013059748f0ce7acb8-21838276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'entry' => 0,
    'field_show' => 0,
    'core' => 0,
    'dependent_fields' => 0,
    'tooltips' => 0,
    'customTpl' => 0,
    'isMultilingual' => 0,
    'custom' => 0,
    'iso' => 0,
    'language' => 0,
    'k' => 0,
    'v' => 0,
    'subkey' => 0,
    'subvalue' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59748f0d1c2381_18533794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59748f0d1c2381_18533794')) {function content_59748f0d1c2381_18533794($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_html_file')) include '/var/www/html/webusable/public_html/includes/smarty/intelli_plugins/function.ia_html_file.php';
if (!is_callable('smarty_function_html_radio_switcher')) include '/var/www/html/webusable/public_html/includes/smarty/intelli_plugins/function.html_radio_switcher.php';
?><?php if (isset($_smarty_tpl->tpl_vars['params']->value)) {?>
<form enctype="multipart/form-data" method="post" class="sap-form form-horizontal">
    <?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>

    <div class="wrap-list">
        <div class="wrap-group">
        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['entry']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['entry']->index++;
 $_smarty_tpl->tpl_vars['entry']->first = $_smarty_tpl->tpl_vars['entry']->index === 0;
?>
            <?php if (!empty($_smarty_tpl->tpl_vars['entry']->value['options']['show'])) {?>
                <?php $_smarty_tpl->tpl_vars['field_show'] = new Smarty_variable(explode('|',$_smarty_tpl->tpl_vars['entry']->value['options']['show']), null, 0);?>

                <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'dependent_fields', null); ob_start(); ?>
                    data-id="js-<?php echo $_smarty_tpl->tpl_vars['field_show']->value[0];?>
-<?php echo $_smarty_tpl->tpl_vars['field_show']->value[1];?>
" <?php if ((!empty($_smarty_tpl->tpl_vars['field_show']->value[0])&&$_smarty_tpl->tpl_vars['core']->value['config'][$_smarty_tpl->tpl_vars['field_show']->value[0]]!=$_smarty_tpl->tpl_vars['field_show']->value[1])) {?> style="display: none;"<?php }?>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, array("$_capture_buffer" => ob_get_contents()), true);
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['dependent_fields'] = new Smarty_variable('', null, 0);?>
            <?php }?>

            <?php if ('divider'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
                <?php if (!$_smarty_tpl->tpl_vars['entry']->first) {?>
                    </div>
                    <div class="wrap-group" <?php echo $_smarty_tpl->tpl_vars['dependent_fields']->value;?>
>
                <?php }?>
                <a name="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
"></a>
                <div class="wrap-group-heading" <?php echo $_smarty_tpl->tpl_vars['dependent_fields']->value;?>
>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['value'], ENT_QUOTES, 'UTF-8', true);?>


                    <?php if (isset($_smarty_tpl->tpl_vars['tooltips']->value[$_smarty_tpl->tpl_vars['entry']->value['name']])) {?>
                        <a href="#" class="js-tooltip" data-placement="right" title="<?php echo $_smarty_tpl->tpl_vars['tooltips']->value[$_smarty_tpl->tpl_vars['entry']->value['name']];?>
"><i class="i-info"></i></a>
                    <?php }?>
                </div>
            <?php } elseif ('tpl'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
                <?php $_smarty_tpl->tpl_vars['customTpl'] = new Smarty_variable(((string)@constant('IA_HOME')).((string)$_smarty_tpl->tpl_vars['entry']->value['multiple_values']), null, 0);?>
                <?php if (file_exists($_smarty_tpl->tpl_vars['customTpl']->value)) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['entry']->value['multiple_values'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } else { ?>
                    <?php echo iaSmarty::lang(array('key'=>'template_file_error','file'=>$_smarty_tpl->tpl_vars['entry']->value['multiple_values']),$_smarty_tpl);?>

                <?php }?>
            <?php } elseif ('hidden'!=$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
                <div class="row <?php echo $_smarty_tpl->tpl_vars['entry']->value['class'];?>
" <?php echo $_smarty_tpl->tpl_vars['dependent_fields']->value;?>
>
                    <div class="col col-lg-2">
                        <?php $_smarty_tpl->tpl_vars['isMultilingual'] = new Smarty_variable(isset($_smarty_tpl->tpl_vars['entry']->value['options']['multilingual'])&&$_smarty_tpl->tpl_vars['entry']->value['options']['multilingual'], null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['isMultilingual']->value&&count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                            <div class="btn-group btn-group-xs translate-group-actions">
                                <button type="button" class="btn btn-default js-edit-lang-group" data-group="#language-group-<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
"><span class="i-earth"></span></button>
                                <button type="button" class="btn btn-default js-copy-lang-group" data-group="#language-group-<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
"><span class="i-copy"></span></button>
                            </div>
                        <?php }?>
                        <label class="control-label" for="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['description'], ENT_QUOTES, 'UTF-8', true);?>

                            <?php if (isset($_smarty_tpl->tpl_vars['tooltips']->value[$_smarty_tpl->tpl_vars['entry']->value['name']])) {?>
                                <a href="#" class="js-tooltip" title="<?php echo $_smarty_tpl->tpl_vars['tooltips']->value[$_smarty_tpl->tpl_vars['entry']->value['name']];?>
"><i class="i-info"></i></a>
                            <?php }?>
                        </label>
                    </div>

                    <?php if ('textarea'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
                        <div class="col col-lg-8">
                    <?php } else { ?>
                        <div class="col col-lg-5">
                    <?php }?>

                    <input type="hidden" class="chck" name="c[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
]" value="<?php if ('custom'!=$_smarty_tpl->tpl_vars['entry']->value['class']) {?>1<?php } else { ?>0<?php }?>" />
                    <?php if ('password'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['custom']->value) {?>
                            <div class="form-control disabled item-val"><?php if (empty($_smarty_tpl->tpl_vars['entry']->value['default'])) {?><?php echo iaSmarty::lang(array('key'=>'config_empty_password'),$_smarty_tpl);?>
<?php } else { ?>***********<?php }?></div>
                        <?php }?>

                        <div class="item-input">
                            <input type="password" class="js-input-password" name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
]" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="new-password" />
                        </div>
                    <?php } elseif ('text'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
                        <?php if ('captcha_preview'==$_smarty_tpl->tpl_vars['entry']->value['name']) {?>
                            <?php echo iaSmarty::captcha(array('preview'=>true),$_smarty_tpl);?>

                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['custom']->value) {?>
                                <div class="form-control disabled item-val"><?php if (empty($_smarty_tpl->tpl_vars['entry']->value['default'])) {?><?php echo iaSmarty::lang(array('key'=>'config_empty_value'),$_smarty_tpl);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['default'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></div>
                            <?php }?>

                            <?php $_smarty_tpl->tpl_vars['isMultilingual'] = new Smarty_variable(isset($_smarty_tpl->tpl_vars['entry']->value['options']['multilingual'])&&$_smarty_tpl->tpl_vars['entry']->value['options']['multilingual'], null, 0);?>

                            <div class="translate-group item-input" id="language-group-<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
">
                                <div class="translate-group__default">
                                    <div class="translate-group__item">
                                        <input type="text" name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
]<?php if ($_smarty_tpl->tpl_vars['isMultilingual']->value) {?>[<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
]<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
-<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['isMultilingual']->value ? $_smarty_tpl->tpl_vars['entry']->value['value'][$_smarty_tpl->tpl_vars['core']->value['language']['iso']] : $_smarty_tpl->tpl_vars['entry']->value['value'];?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_tmp1, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        <?php if ($_smarty_tpl->tpl_vars['isMultilingual']->value&&count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                                            <div class="translate-group__item__code">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['language']['title'], ENT_QUOTES, 'UTF-8', true);?>

                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['isMultilingual']->value&&count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                                    <div class="translate-group__langs">
                                        <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['iso'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['iso']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['iso']->value!=$_smarty_tpl->tpl_vars['core']->value['language']['iso']) {?>
                                                <div class="translate-group__item">
                                                    <input type="text" name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
][<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
-<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['value'][$_smarty_tpl->tpl_vars['iso']->value], ENT_QUOTES, 'UTF-8', true);?>
" />
                                                    <span class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                </div>
                                            <?php }?>
                                        <?php } ?>
                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>
                    <?php } elseif ('colorpicker'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
                        <div class="item-input">
                            <div id="cp_<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
" class="input-group colorpicker-component">
                                <input type="text" name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
]" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" />
                                <span class="input-group-addon"><i></i></span>
                            </div>
                        </div>

                        <?php echo iaSmarty::ia_add_media(array('files'=>'css:_IA_URL_js/bootstrap/css/bootstrap-colorpicker.min, js:bootstrap/js/bootstrap-colorpicker.min'),$_smarty_tpl);?>

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmarty::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function() {
    $('#cp_<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
').colorpicker();
});
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php } elseif ('textarea'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['custom']->value) {?>
                            <div class="form-control disabled item-val"><?php if (empty($_smarty_tpl->tpl_vars['entry']->value['default'])) {?><?php echo iaSmarty::lang(array('key'=>'config_empty_value'),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['default'];?>
<?php }?></div>
                        <?php }?>

                        <?php $_smarty_tpl->tpl_vars['isMultilingual'] = new Smarty_variable(isset($_smarty_tpl->tpl_vars['entry']->value['options']['multilingual'])&&$_smarty_tpl->tpl_vars['entry']->value['options']['multilingual'], null, 0);?>

                        <div class="translate-group item-input" id="language-group-<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
">
                            <div class="translate-group__default">
                                <div class="translate-group__item">
                                    <textarea name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
]<?php if ($_smarty_tpl->tpl_vars['isMultilingual']->value) {?>[<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
]<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['entry']->value['options']['wysiwyg']==1) {?>js-wysiwyg <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['options']['code_editor']) {?>js-code-editor <?php }?>common" cols="45" rows="7"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['isMultilingual']->value ? $_smarty_tpl->tpl_vars['entry']->value['value'][$_smarty_tpl->tpl_vars['core']->value['language']['iso']] : $_smarty_tpl->tpl_vars['entry']->value['value'];?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_tmp2, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <?php if ($_smarty_tpl->tpl_vars['isMultilingual']->value&&count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                                        <div class="translate-group__item__code">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['language']['title'], ENT_QUOTES, 'UTF-8', true);?>

                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['isMultilingual']->value&&count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                                <div class="translate-group__langs">
                                    <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['iso'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['iso']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['iso']->value!=$_smarty_tpl->tpl_vars['core']->value['language']['iso']) {?>
                                            <div class="translate-group__item">
                                                <textarea name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
][<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
-<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['entry']->value['options']['wysiwyg']==1) {?>js-wysiwyg <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['options']['code_editor']) {?>js-code-editor <?php }?>common" cols="45" rows="7"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['value'][$_smarty_tpl->tpl_vars['iso']->value], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                                <span class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            </div>
                                        <?php }?>
                                    <?php } ?>
                                </div>
                            <?php }?>
                        </div>
                    <?php } elseif ('image'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
                        <?php if (!is_writeable(@constant('IA_UPLOADS'))) {?>
                            <div class="alert alert-info"><?php echo iaSmarty::lang(array('key'=>'upload_writable_permission'),$_smarty_tpl);?>
</div>
                        <?php } else { ?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['entry']->value['value'])||$_smarty_tpl->tpl_vars['entry']->value['name']=='site_logo') {?>
                                <div class="thumbnail">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['entry']->value['value'])) {?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
uploads/<?php echo $_smarty_tpl->tpl_vars['entry']->value['value'];?>
">
                                    <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['name']=='site_logo') {?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
templates/<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['tmpl'];?>
/img/logo.png">
                                    <?php }?>
                                </div>

                                <?php if (!empty($_smarty_tpl->tpl_vars['entry']->value['value'])) {?>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="delete[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
]"> <?php echo iaSmarty::lang(array('key'=>'delete'),$_smarty_tpl);?>
</label>
                                    </div>
                                <?php }?>
                            <?php }?>

                            <?php echo smarty_function_ia_html_file(array('name'=>$_smarty_tpl->tpl_vars['entry']->value['name'],'value'=>$_smarty_tpl->tpl_vars['entry']->value['value']),$_smarty_tpl);?>

                        <?php }?>
                    <?php } elseif ('checkbox'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
                        <div class="item-input">
                            <input type="checkbox" name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
]" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
">
                        </div>
                    <?php } elseif ('radio'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['custom']->value) {?>
                            <div class="form-control disabled item-val"><?php if ($_smarty_tpl->tpl_vars['entry']->value['default']==1) {?>ON<?php } else { ?>OFF<?php }?></div>
                        <?php }?>

                        <div class="item-input">
                            <?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['entry']->value['value'],'name'=>$_smarty_tpl->tpl_vars['entry']->value['name'],'conf'=>true),$_smarty_tpl);?>

                        </div>
                    <?php } elseif ('select'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['custom']->value) {?>
                            <div class="form-control disabled item-val"><?php if ($_smarty_tpl->tpl_vars['entry']->value['name']=='lang') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['values'][$_smarty_tpl->tpl_vars['entry']->value['default']]['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['default'];?>
<?php }?></div>
                        <?php }?>

                        <div class="item-input">
                            <select name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
]" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
"<?php if (1==count($_smarty_tpl->tpl_vars['entry']->value['values'])) {?> disabled<?php }?>>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <?php if ('lang'==$_smarty_tpl->tpl_vars['entry']->value['name']) {?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['entry']->value['value']||$_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['entry']->value['value']) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <?php } elseif (is_array($_smarty_tpl->tpl_vars['v']->value)) {?>
                                        <optgroup label="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                                            <?php  $_smarty_tpl->tpl_vars['subvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['subkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subvalue']->key => $_smarty_tpl->tpl_vars['subvalue']->value) {
$_smarty_tpl->tpl_vars['subvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['subkey']->value = $_smarty_tpl->tpl_vars['subvalue']->key;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['subkey']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['subkey']->value==$_smarty_tpl->tpl_vars['entry']->value['value']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['subvalue']->value;?>
</option>
                                            <?php } ?>
                                        </optgroup>
                                    <?php } else { ?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['entry']->value['value']) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <?php }?>
                                <?php } ?>
                            </select>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['type']=='itemscheckbox'&&!$_smarty_tpl->tpl_vars['custom']->value) {?>
                        <?php if (isset($_smarty_tpl->tpl_vars['entry']->value['items'])) {?>
                            <div class="item-input">
                                <input type="hidden" name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
][]">
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']++;
?>
                                    <p>
                                        <input type="checkbox" id="icb_<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration'];?>
" name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['checked']) {?> checked<?php }?>>
                                        <label for="icb_<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</label>
                                    </p>
                                <?php } ?>
                            </div>
                        <?php } else { ?>
                            <div class="alert alert-info"><?php echo iaSmarty::lang(array('key'=>'no_implemented_packages'),$_smarty_tpl);?>
</div>
                        <?php }?>
                    <?php }?>
                    </div> <!-- /.col -->
                    <?php if ($_smarty_tpl->tpl_vars['custom']->value) {?>
                        <div class="col col-lg-2">
                            <div class="custom-item-actions">
                                <span class="btn btn-default btn-xs set-custom js-tooltip" data-value="1" title="<?php echo iaSmarty::lang(array('key'=>'config_set_custom'),$_smarty_tpl);?>
" data-toggle="tooltip"><span class="fa fa-pencil"></span></span>
                                <span class="btn btn-default btn-xs set-default js-tooltip" data-value="0" title="<?php echo iaSmarty::lang(array('key'=>'config_set_default'),$_smarty_tpl);?>
" data-toggle="tooltip"><span class="fa fa-rotate-left"></span></span>
                            </div>
                        </div>
                    <?php }?>
                </div><!-- /.row -->
            <?php }?>
        <?php } ?>
    </div>

    <div class="form-actions">
        <input type="submit" name="save" id="save" class="btn btn-primary" value="<?php echo iaSmarty::lang(array('key'=>'save_changes'),$_smarty_tpl);?>
">
    </div>
</form>
<?php }?>

<?php echo iaSmarty::ia_print_js(array('files'=>'utils/edit_area/edit_area, ckeditor/ckeditor, admin/configuration'),$_smarty_tpl);?>
<?php }} ?>
