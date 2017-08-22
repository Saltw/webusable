<!DOCTYPE html>
<html lang="{$core.language.iso}" dir="{$core.language.direction}">
<head>
    {ia_hooker name='smartyFrontBeforeHeadSection'}
    <!-- COMMON TAGS -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Search Engine -->
    <title>{ia_print_title}</title>
    <meta name="description" content="{$core.page['meta-description']}">
{if $core.page['meta-keywords'] != ""}
    <meta name="keywords" content="{$core.page['meta-keywords']}" />
{/if}
    <meta name="robots" content="index" />
    <meta name="robots" content="follow" />
    <meta name="revisit-after" content="1 day" />
    <base href="{$smarty.const.IA_URL}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{if !empty($core.config.site_favicon)}{$core.page.nonProtocolUrl}uploads/{$core.config.site_favicon}{else}{$core.page.nonProtocolUrl}favicon.ico{/if}">

    {ia_add_media files='jquery, subrion, bootstrap' order=0}
    {ia_print_js files='_IA_TPL_app' order=999}

    <!-- /templates/_common/hook.header-code.tpl + v[frontend_header_code] (panel/configuration/miscellaneous) -->
    {ia_hooker name='smartyFrontAfterHeadSection'}

    {ia_print_css display='on'}
    {include '_layout/custom-colors.tpl'}

    {ia_add_js}
    intelli.pageName = '{$core.page.name}';

    {foreach $core.customConfig as $key => $value}
    intelli.config.{$key} = '{$value}';
    {/foreach}
    {/ia_add_js}

    {include '_seo/structured-data.tpl'}

</head>

    <body class="page-{$core.page.name}">

        <header>
            {include '_layout/menu-inventory.tpl'}
            {include '_layout/menu-principal.tpl'}
            {include '_views/_layout/main.tpl'}
        </header>


        {if isset($smarty.get.elements)}
            {include 'page.elements.tpl'}
        {else}
        <header class="header">
            {ia_blocks block='teaser'}
        </header>

        {ia_hooker name='smartyFrontBeforeBreadcrumb'}

        {include 'breadcrumb.tpl'}

        {if $core.config.enable_landing && 'index' == $core.page.name}
            <div class="landing">
                {ia_blocks block='landing'}
            </div>
        {else}
            {if isset($iaBlocks.verytop)}
                <div class="verytop">
                    <div class="container">{ia_blocks block='verytop'}</div>
                </div>
            {/if}

            <div class="content">
                <div class="container">
                    {if in_array($core.page.name, array('login', 'member_registration'))}
                        <div class="page-system">
                            <div class="content__header">
                                <h1>{$core.page.title|escape}</h1>
                                <ul class="content__actions">
                                    {foreach $core.actions as $name => $action}
                                        <li>
                                            {if 'action-favorites' == $name}
                                                {printFavorites item=$item itemtype=$item.item guests=true}
                                            {else}
                                                <a data-toggle="tooltip" title="{$action.title|escape}" {foreach $action.attributes as $key => $value}{$key}="{$value}" {/foreach}>
                                                    <span class="fa fa-{$name}"></span>
                                                </a>
                                            {/if}
                                        </li>
                                    {/foreach}
                                </ul>
                            </div>

                            {ia_hooker name='smartyFrontBeforeNotifications'}
                            {include 'notification.tpl'}

                            {ia_hooker name='smartyFrontBeforeMainContent'}

                            <div class="content__body">
                                {$_content_}
                            </div>

                            {ia_hooker name='smartyFrontAfterMainContent'}
                        </div>
                    {else}
                        <div class="row">
                            <div class="{width section='content' position='left' tag='col-md-'} aside">
                                {ia_blocks block='left'}
                            </div>
                            <div class="{width section='content' position='center' tag='col-md-'}">
                                <div class="content__wrap">

                                    {ia_blocks block='top'}

                                    <div class="content__header tomate">
                                        <h1>{$core.page.title|escape}</h1>
                                        <h2>{$core.page.name|capitalize}</h2>
                                        <ul class="content__actions">
                                            {foreach $core.actions as $name => $action}
                                                <li>
                                                    {if 'action-favorites' == $name}
                                                        {printFavorites item=$item itemtype=$item.item guests=true}
                                                    {else}
                                                        <a data-toggle="tooltip" title="{$action.title}" {foreach $action.attributes as $key => $value}{$key}="{$value}" {/foreach}>
                                                            <span class="fa fa-{$name}"></span>
                                                        </a>
                                                    {/if}
                                                </li>
                                            {/foreach}
                                        </ul>
                                    </div>

                                    {ia_hooker name='smartyFrontBeforeNotifications'}
                                    {include 'notification.tpl'}

                                    {ia_hooker name='smartyFrontBeforeMainContent'}

                                    <div class="content__body">
                                        {$_content_}
                                    </div>

                                    {ia_hooker name='smartyFrontAfterMainContent'}

                                    {ia_blocks block='bottom'}
                                </div>
                            </div>
                            <div class="{width section='content' position='right' tag='col-md-'} aside">
                                {ia_blocks block='right'}
                            </div>
                        </div>
                    {/if}
                </div>
            </div>

            {if isset($iaBlocks.verybottom)}
                <div class="verybottom">
                    <div class="container">{ia_blocks block='verybottom'}</div>
                </div>
            {/if}
        {/if}

        {if isset($iaBlocks.footer1) || isset($iaBlocks.footer2) || isset($iaBlocks.footer3) || isset($iaBlocks.footer4)}
            <div class="footer-blocks">
                <div class="container">
                    <div class="row">
                        <div class="{width section='footer-blocks' position='footer1' tag='col-md-'}">{ia_blocks block='footer1'}</div>
                        <div class="{width section='footer-blocks' position='footer2' tag='col-md-'}">{ia_blocks block='footer2'}</div>
                        <div class="{width section='footer-blocks' position='footer3' tag='col-md-'}">{ia_blocks block='footer3'}</div>
                        <div class="{width section='footer-blocks' position='footer4' tag='col-md-'}">{ia_blocks block='footer4'}</div>
                    </div>
                </div>
            </div>
        {/if}
        {/if}

        <footer class="footer">
            <div class="container">
                {ia_hooker name='smartyFrontBeforeFooterLinks'}

                {if $core.config.website_social}
                    <ul class="nav-footer nav-footer-social">
                        {include '_layout/menu-social.tpl'}
                    </ul>
                {/if}

                {ia_blocks block='copyright'}

                <p class="copyright">&copy; {$smarty.server.REQUEST_TIME|date_format:'%Y'} {lang key='powered_by_subrion'}</p>

                {ia_hooker name='smartyFrontAfterFooterLinks'}
            </div>
        </footer>

        <button class="back-to-top js-back-to-top"><span class="fa fa-angle-double-up"></span></button>

        <!-- SYSTEM STUFF -->

        {if $core.config.cron}
            <div style="display: none;">
                <img src="{$core.page.nonProtocolUrl}cron/?{randnum}" width="1" height="1" alt="">
            </div>
        {/if}

        {if isset($manageMode)}
            {include 'visual-mode.tpl'}
        {/if}

        {if isset($previewMode)}
            <p>{lang key='youre_in_preview_mode'}</p>
        {/if}

        {ia_print_js display='on'}

        {ia_hooker name='smartyFrontFinalize'}
    </body>
</html>
