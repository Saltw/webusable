<nav class="navbar navbar-default {if $core.config.navbar_sticky}navbar-sticky{/if}">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand{if !$core.config.enable_text_logo} navbar-brand--img{/if}" href="{$smarty.const.IA_URL}">
                {if $core.config.enable_text_logo}
                    {$core.config.logo_text}
                {else}
                    {if !empty($core.config.site_logo)}
                        <img src="{$core.page.nonProtocolUrl}uploads/{$core.config.site_logo}" alt="{$core.config.site}">
                    {else}
                        <img src="{$img}logo.png" alt="{$core.config.site}">
                    {/if}
                {/if}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse">
            {if $core.config.search_navbar}
                <form method="get" action="{$smarty.const.IA_URL}search/" class="search-navbar pull-right">
                    <button class="search-navbar__toggle js-search-navbar-toggle" type="button"><span class="fa fa-search"></span></button>
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="{lang key='search'}">
                        <div class="input-group-btn">
                            <button class="btn btn-primary" type="submit">{lang key='search'}</button>
                        </div>
                    </div>
                </form>
            {/if}
            {ia_blocks block='account'}
            {ia_blocks block='mainmenu'}
        </div>
    </div>
</nav>
