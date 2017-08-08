<div class="inventory">
    <div class="container">
        {if $core.config.website_social}
            <ul class="nav-inventory nav-inventory-social pull-left hidden-xs">
                {if $core.config.website_social_t}<li><a href="{$core.config.website_social_t}" class="twitter"><span class="fa fa-twitter"></span></a></li>{/if}
                {if $core.config.website_social_f}<li><a href="{$core.config.website_social_f}" class="facebook"><span class="fa fa-facebook"></span></a></li>{/if}
                {if $core.config.website_social_g}<li><a href="{$core.config.website_social_g}" class="google-plus"><span class="fa fa-google-plus"></span></a></li>{/if}
                {if $core.config.website_social_i}<li><a href="{$core.config.website_social_i}" class="linkedin"><span class="fa fa-linkedin"></span></a></li>{/if}
            </ul>
        {/if}
        {if $core.config.search_inventory}
            <form method="get" action="{$smarty.const.IA_URL}search/" class="lima search-inventory pull-right">
                <input type="text" name="q" placeholder="{lang key='search'}">
                <button type="submit"><span class="fa fa-search"></span></button>
            </form>
        {/if}
        {include 'language-selector.tpl'}
        {ia_blocks block='inventory'}
    </div>
</div>
