<h1>/admin /templates /default /pages.tpl</h1>

<form method="post" id="page_form" class="sap-form form-horizontal">
    {preventCsrf}
    <input type="hidden" name="language" id="js-active-language" />
    <input type="hidden" name="module" value="{$item.module|escape}" />

    <div class="wrap-list">
        <div class="wrap-group">
            <div class="wrap-group-heading">{lang key='options'}</div>
            <!-- Jerarquía pages -->
            <div class="row">
                <label class="col col-lg-2 control-label">{lang key='name'}</label>
                <div class="col col-lg-4">
                    <input type="text" name="name" value="{$item.name|escape}" id="input-name"{if iaCore::ACTION_EDIT == $pageAction} readonly{/if} />
                    {if iaCore::ACTION_ADD == $pageAction}<p class="help-block">{lang key='unique_name'}</p>{/if}
                </div>
            </div>

            {if !$item.service && !$item.readonly}
                <div class="row js-local-url-field">
                    <label class="col col-lg-2 control-label">{lang key='parent'}</label>

                    <div class="col col-lg-4">
                    <select name="parent_id" id="input-parent">
                        <option value="0">{lang key='_no_parent_page_'}</option>
                        {foreach $pagGroups as $pageGroup}
                            <optgroup label="{$pageGroup.title}">
                                {foreach $pageGroup.children as $pageId => $page}
                                    {if isset($page.children)}
                                        <option value="{$pageId}"{if $parentPageId == $pageId} selected{/if} style="font-weight:bold;">{$page.title|escape}</option>
                                        //ok
                                        {foreach $page.children as $page_2Id => $page_2}
                                            {if isset($page_2.children)}
                                                <option value="{$page_2Id}"{if $parentPageId == $page_2Id} selected{/if} style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;{$page_2.title|escape}</option>
                                                {foreach $page_2.children as $page_3Id => $page_3}
                                                    <option value="{$page_3Id}"{if $parentPageId == $page_3Id} selected{/if}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$page_3.title|escape}</option>
                                                {/foreach}
                                            {else}
                                                <option value="{$page_2Id}"{if $parentPageId == $page_2Id} selected{/if}>&nbsp;&nbsp;&nbsp;&nbsp;{$page_2.title|escape}</option>
                                            {/if}
                                        {/foreach}
                                    {else}
                                        <option value="{$pageId}"{if $parentPageId == $pageId} selected{/if}>{$page.title|escape}</option>
                                    {/if}
                                {/foreach}
                            </optgroup>
                        {/foreach}
                    </select>
                    </div>
                </div>

                <div class="row" id="js-field-remote-url" style="display: none;">
                    <label class="col col-lg-2 control-label">{lang key='page_external_url'}</label>
                    <div class="col col-lg-4">
                        <input type="text" name="custom_url" id="input-custom-url" value="{if isset($item.custom_url)}{$item.custom_url|escape}{/if}" />
                    </div>
                </div>

                <div class="row js-local-url-field">
                    <label class="col col-lg-2 control-label">{lang key='custom_url'}</label>
                    <div class="col col-lg-4">
                        <div class="input-group">
                            <input type="text" name="alias" id="input-alias" value="{$item.alias|escape}" />
                            <input type="hidden" name="extension" value="{if $item.extension}.{$item.extension}{else}/{/if}" />
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    {if empty($item.extension)}{lang key='no_extension'}{else}{$item.extension}{/if}
                                    <span class="caret"></span>
                                </button>
                                <ul id="js-page-extension-list" class="dropdown-menu pull-right">
                                    <li{if empty($item.extension)} class="active"{/if}><a href="#" data-extension="/">{lang key='no_extension'}</a></li>
                                    <li class="divider"></li>
                                    {foreach $extensions as $extension}
                                    <li{if $item.extension == $extension} class="active"{/if}><a href="#" data-extension=".{$extension}">{$extension}</a></li>
                                    {/foreach}
                                </ul>
                            </div>
                        </div>
                        <p id="js-alias-placeholder" class="help-block">{lang key='page_url_will_be'}: <span class="text-danger"></span></p>
                    </div>
                </div>
                <!-- URL externa -->
                <div class="row">
                    <label class="col col-lg-2 control-label">{lang key='external_url'}</label>
                    <div class="col col-lg-4">
                        {if isset($item.custom_url) && $item.custom_url != '' || isset($smarty.post.unique) && $smarty.post.unique == 1}
                            {assign custom_url 1}
                        {else}
                            {assign custom_url 0}
                        {/if}
                        {html_radio_switcher value=$custom_url name='unique'}
                    </div>
                </div>
                <!-- meta follow -->
                <div class="row">
                    <label class="col col-lg-2 control-label">{lang key='no_follow_url'}</label>
                    <div class="col col-lg-4">
                        {html_radio_switcher value=$item.nofollow name='nofollow'}
                    </div>
                </div>
                <!-- Nueva pestaña -->
                <div class="row">
                    <label class="col col-lg-2 control-label">{lang key='open_in_new_tab'}</label>
                    <div class="col col-lg-4">
                        {html_radio_switcher value=$item.new_window name='new_window'}
                    </div>
                </div>

                <div class="row js-local-url-field">
                    <label class="col col-lg-2 control-label">{lang key='password'}</label>
                    <div class="col col-lg-4">
                        <input type="text" name="passw" value="{if isset($item.passw)}{$item.passw|escape}{elseif isset($smarty.post.passw)}{$smarty.post.passw|escape:"html"}{/if}" />
                    </div>
                </div>
            {else}
                <input type="hidden" value="1" name="service" />
            {/if}

            {access object='admin_page' id='pages' action='home'}
            <!-- home -->
            <div class="row">
                <label class="col col-lg-2 control-label">{lang key='use_as_home_page'}</label>
                <div class="col col-lg-4">
                    {if $isHomePage}
                        <div class="alert alert-info">{lang key='already_home_page'}</div>
                    {else}
                        {html_radio_switcher value=$isHomePage name='home_page'}
                        <p class="help-block">{lang key='current_home_page'}: <span class="text-danger">{$homePageTitle}</span></p>
                    {/if}
                </div>
            </div>
            {/access}

            {access object='admin_page' id='menus' action=iaCore::ACTION_ADD}
                <!-- Show menus -->
                <div class="row">
                    <label class="col col-lg-2 control-label">{lang key='show_menus'}</label>

                    <div class="col col-lg-4">
                        <ul class="nav nav-tabs">
                            {foreach $menus as $menu}
                                {if $menu.items}
                                    <li{if $menu@iteration == 1} class="active"{/if}><a href="#tab-{$menu.title|replace:' ':''}" data-toggle="tab">{$menu.title|escape}</a></li>
                                {/if}
                            {/foreach}
                        </ul>

                        <div class="tab-content">
                            {foreach $menus as $menu}
                                {if $menu.items}
                                    <div class="tab-pane{if $menu@iteration == 1} active{/if}" id="tab-{$menu.title|replace:' ':''}">
                                        {foreach $menu.items as $menuItem}
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="menus[]" value="{$menuItem.id}" id="p_{$menuItem.id}"{if in_array($menuItem.id, $selectedMenus)} checked{/if} /> {$menuItem.title|escape}
                                                </label>
                                            </div>
                                        {/foreach}
                                    </div>
                                {/if}
                            {/foreach}
                        </div>
                    </div>
                </div>
            {/access}

            <div class="js-local-url-field">
                {if 'page' == $item.filename}
                    <!-- plantilla personalizada -->
                    <div class="row">
                        <label class="col col-lg-2 control-label">{lang key='custom_template'}</label>
                        <div class="col col-lg-4">
                            {html_radio_switcher value=$item.custom_tpl name='custom_tpl'}
                        </div>
                    </div>

                    <div class="row" id="js-field-tpl-filename" style="display: none;">
                        <label class="col col-lg-2 control-label">{lang key='custom_template_filename'}</label>
                        <div class="col col-lg-4">
                            <input type="text" name="template_filename" id="input-tpl-filename" value="{if isset($item.template_filename)}{$item.template_filename|escape}{/if}" />
                        </div>
                    </div>
                {/if}
            </div>
        </div>
        <!-- META TAGS SEO -->
        <div class="wrap-group js-local-url-field">
            <div class="wrap-group-heading">{lang key='seo'}</div>
            <!-- Meta Título -->
            <div class="row">
                <div class="col col-lg-2">
                    {if count($core.languages) > 1}
                        <div class="btn-group btn-group-xs translate-group-actions">
                            <button type="button" class="btn btn-default js-edit-lang-group" data-group="#language-group-title"><span class="i-earth"></span></button>
                            <button type="button" class="btn btn-default js-copy-lang-group" data-group="#language-group-title"><span class="i-copy"></span></button>
                        </div>
                    {/if}
                    <label class="control-label">{lang key='title'}
                    <span class="required">*</span></label>
                </div>
                <div class="col col-lg-4">
                    {if count($core.languages) > 1}
                        <div class="translate-group" id="language-group-title">
                            <div class="translate-group__default">
                                <div class="translate-group__item">
                                    <input type="text" name="title[{$core.language.iso}]"{if isset($title[$core.language.iso])} value="{$title[$core.language.iso]|escape}"{/if} />
                                    <div class="translate-group__item__code">{$core.language.title|escape}</div>
                                </div>
                            </div>
                            <div class="translate-group__langs">
                                {foreach $core.languages as $iso => $language}
                                    {if $iso != $core.language.iso}
                                        <div class="translate-group__item">
                                            <input type="text" name="title[{$iso}]"{if isset($title.$iso)} value="{$title.$iso|escape}"{/if} required />
                                            <span class="translate-group__item__code">{$language.title|escape}</span>
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                        </div>
                    {else}
                        <input type="text" name="title[{$core.language.iso}]"{if isset($title[$core.language.iso])} value="{$title[$core.language.iso]|escape}"{/if} />
                    {/if}
                    <p class="help-block">{lang key='title_help_block'}</p>
                </div>
            </div>
            <!-- Meta descripción -->
            <div class="row">
                <div class="col col-lg-2">
                    {if count($core.languages) > 1}
                        <div class="btn-group btn-group-xs translate-group-actions">
                            <button type="button" class="btn btn-default js-edit-lang-group" data-group="#language-group-meta_description"><span class="i-earth"></span></button>
                            <button type="button" class="btn btn-default js-copy-lang-group" data-group="#language-group-meta_description"><span class="i-copy"></span></button>
                        </div>
                    {/if}
                    <label class="control-label">{lang key='meta_description'}</label>
                </div>
                <div class="col col-lg-4">
                    {if count($core.languages) > 1}
                        <div class="translate-group" id="language-group-meta_description">
                            <div class="translate-group__default">
                                <div class="translate-group__item">
                                    <textarea name="meta_description[{$core.language.iso}]" rows="2" maxlength="155" id="meta_description-{$core.language.iso}">{if isset($metaDescription[$core.language.iso])}{$metaDescription[$core.language.iso]|escape}{/if}</textarea>
                                    <div class="translate-group__item__code">{$core.language.title|escape}</div>
                                </div>
                            </div>
                            <div class="translate-group__langs">
                                {foreach $core.languages as $iso => $language}
                                    {if $iso != $core.language.iso}
                                        <div class="translate-group__item">
                                            <textarea name="meta_description[{$iso}]" rows="2" maxlength="155">{if isset($metaDescription.$iso)}{$metaDescription.$iso|escape}{/if}</textarea>
                                            <span class="translate-group__item__code">{$language.title|escape}</span>
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                        </div>
                    {else}
                        <textarea name="meta_description[{$core.language.iso}]" rows="2" maxlength="155">{if isset($metaDescription[$core.language.iso])}{$metaDescription[$core.language.iso]|escape}{/if}</textarea>
                    {/if}
                    <p class="help-block">{lang key='meta_description_help_block'}</p>
                </div>
            </div>
            <!-- Meta kwywords -->
            <div class="row">
                <div class="col col-lg-2">
                    {if count($core.languages) > 1}
                        <div class="btn-group btn-group-xs translate-group-actions">
                            <button type="button" class="btn btn-default js-edit-lang-group" data-group="#language-group-meta_keywords"><span class="i-earth"></span></button>
                            <button type="button" class="btn btn-default js-copy-lang-group" data-group="#language-group-meta_keywords"><span class="i-copy"></span></button>
                        </div>
                    {/if}
                    <label class="control-label">{lang key='meta_keywords'}</label>
                </div>
                <div class="col col-lg-4">
                    {if count($core.languages) > 1}
                        <div class="translate-group" id="language-group-meta_keywords">
                            <div class="translate-group__default">
                                <div class="translate-group__item">
                                    <input type="text" name="meta_keywords[{$core.language.iso}]"{if isset($metaKeywords[$core.language.iso])} value="{$metaKeywords[$core.language.iso]|escape}"{/if} />
                                    <div class="translate-group__item__code">{$core.language.title|escape}</div>
                                </div>
                            </div>
                            <div class="translate-group__langs">
                                {foreach $core.languages as $iso => $language}
                                    {if $iso != $core.language.iso}
                                        <div class="translate-group__item">
                                            <input type="text" name="meta_keywords[{$iso}]"{if isset($metaKeywords.$iso)} value="{$metaKeywords.$iso|escape}"{/if} />
                                            <span class="translate-group__item__code">{$language.title|escape}</span>
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                        </div>
                    {else}
                        <input type="text" name="meta_keywords[{$core.language.iso}]"{if isset($metaKeywords[$core.language.iso])} value="{$metaKeywords[$core.language.iso]|escape}"{/if} />
                    {/if}
                    <p class="help-block">{lang key='meta_keywords_help_block'}</p>
                </div>
            </div>
        </div>
        <!-- META TAGS SOCIALES -->
        <div class="wrap-group js-local-url-field">
            <div class="wrap-group-heading">{lang key='seo_social'}</div>
            <!-- Social Title -->
            <div class="row">
                <div class="col col-lg-2">
                    {if count($core.languages) > 1}
                        <div class="btn-group btn-group-xs translate-group-actions">
                            <button type="button" class="btn btn-default js-edit-lang-group" data-group="#language-group-meta_og_title"><span class="i-earth"></span></button>
                            <button type="button" class="btn btn-default js-copy-lang-group" data-group="#language-group-meta_og_title"><span class="i-copy"></span></button>
                        </div>
                    {/if}
                    <label class="control-label">{lang key='title'}</label>
                </div>
                <div class="col col-lg-4">
                    {if count($core.languages) > 1}
                        <div class="translate-group" id="language-group-meta_og_title">
                            <div class="translate-group__default">
                                <div class="translate-group__item">
                                    <input type="text" name="meta_og_title[{$core.language.iso}]"{if isset($metaOgTitle[$core.language.iso])} value="{$metaOgTitle[$core.language.iso]|escape}" {/if} />
                                    <div class="translate-group__item__code">{$core.language.title|escape}</div>
                                </div>
                            </div>
                            <div class="translate-group__langs">
                                {foreach $core.languages as $iso => $language}
                                    {if $iso != $core.language.iso}
                                        <div class="translate-group__item">
                                            <input type="text" name="meta_og_title[{$iso}]"{if isset($metaOgTitle.$iso)} value="{$metaOgTitle.$iso|escape}" {/if} />
                                            <span class="translate-group__item__code">{$language.title|escape}</span>
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                        </div>
                    {else}
                        <input type="text" name="meta_og_title[{$core.language.iso}]"{if isset($metaOgTitle[$core.language.iso])} value="{$metaOgTitle[$core.language.iso]|escape}" {/if} />
                    {/if}
                    <p class="help-block">{lang key='title_og_help_block'}</p>
                </div>
            </div>
            <!-- Social type de objetos Open Graph de Facebook -->
            <div class="row">
                <div class="col col-lg-2">
                    <label class="control-label">{lang key='meta_type'} </label>
                </div>
                <div class="col col-lg-4">
                    <select name="meta_og_type[{$core.language.iso}]">
                    {if isset($metaOgType[$core.language.iso]) && !empty($metaOgType[$core.language.iso])}
                        <option value="{$metaOgType[$core.language.iso]}">{$metaOgType[$core.language.iso]}</option>
                    {else}
                        <option value="article">article</option>
                    {/if}
                        {include 'social-meta-types.tpl'}
                    </select>
                </div>
            </div>
            <!-- Social description -->
            <div class="row">
                <div class="col col-lg-2">
                    {if count($core.languages) > 1}
                        <div class="btn-group btn-group-xs translate-group-actions">
                            <button type="button" class="btn btn-default js-edit-lang-group" data-group="#language-group-meta_og_description"><span class="i-earth"></span></button>
                            <button type="button" class="btn btn-default js-copy-lang-group" data-group="#language-group-meta_og_description"><span class="i-copy"></span></button>
                        </div>
                    {/if}
                    <label class="control-label">{lang key='meta_og_description'}</label>
                </div>
                <div class="col col-lg-4">
                    {if count($core.languages) > 1}
                        <div class="translate-group" id="language-group-meta_og_description">
                            <div class="translate-group__default">
                                <div class="translate-group__item">
                                    <textarea name="meta_og_description[{$core.language.iso}]" rows="2" maxlength="200" id="meta_og_description-{$core.language.iso}">{if isset($metaOgDescription[$core.language.iso])}{$metaOgDescription[$core.language.iso]|escape}{/if}</textarea>
                                    <div class="translate-group__item__code">{$core.language.title|escape}</div>
                                </div>
                            </div>
                            <div class="translate-group__langs">
                                {foreach $core.languages as $iso => $language}
                                    {if $iso != $core.language.iso}
                                        <div class="translate-group__item">
                                            <textarea name="meta_og_description[{$iso}]" rows="2" maxlength="200">{if isset($metaOgDescription.$iso)}{$metaOgDescription.$iso|escape}{/if}</textarea>
                                            <span class="translate-group__item__code">{$language.title|escape}</span>
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                        </div>
                    {else}
                        <textarea name="meta_og_description[{$core.language.iso}]" rows="2" maxlength="200">{if isset($metaOgDescription[$core.language.iso])}{$metaOgDescription[$core.language.iso]|escape}{/if}</textarea>
                    {/if}
                    <p class="help-block">{lang key='meta_og_description_help_block'}</p>
                </div>
            </div>
        </div>

        <div class="wrap-group" id="js-content-fields">
            <div class="wrap-group-heading">{lang key='contents'}</div>
            <div class="row js-page-content-field">
                <div class="col col-lg-2">
                    {if count($core.languages) > 1}
                        <div class="btn-group btn-group-xs translate-group-actions">
                            <button type="button" class="btn btn-default js-edit-lang-group" data-group="#language-group-page_content"><span class="i-earth"></span></button>
                            <button type="button" class="btn btn-default js-copy-lang-group" data-group="#language-group-page_content"><span class="i-copy"></span></button>
                        </div>
                    {/if}
                    <label class="control-label">{lang key='page_content'}</label>
                </div>
                <div class="col col-lg-8">
                    {if count($core.languages) > 1}
                        <div class="translate-group" id="language-group-page_content">
                            <div class="translate-group__default">
                                <div class="translate-group__item">
                                    <textarea name="content[{$core.language.iso}]" data-language="{$core.language.iso}" rows="2" id="content-{$core.language.iso}">{if isset($content[$core.language.iso])}{$content[$core.language.iso]|escape}{/if}</textarea>
                                    <div class="translate-group__item__code">{$core.language.title|escape}</div>
                                </div>
                            </div>
                            <div class="translate-group__langs">
                                {foreach $core.languages as $iso => $language}
                                    {if $iso != $core.language.iso}
                                        <div class="translate-group__item">
                                            <textarea name="content[{$iso}]" data-language="{$iso}" rows="2">{if isset($content.$iso)}{$content.$iso|escape}{/if}</textarea>
                                            <span class="translate-group__item__code">{$language.title|escape}</span>
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                        </div>
                    {else}
                        <textarea name="content[{$core.language.iso}]" data-language="{$core.language.iso}" rows="2">{if isset($content[$core.language.iso])}{$content[$core.language.iso]|escape}{/if}</textarea>
                    {/if}
                </div>
            </div>
        </div>

        {include 'fields-system.tpl'}
    </div>
</form>
{ia_print_js files='ckeditor/ckeditor, admin/pages'}
