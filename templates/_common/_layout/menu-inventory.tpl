<nav class="inventory justify">
    {if $core.config.website_social}
        <ul class="inventory__social main-start">
            {include '_layout/menu-social.tpl'}
        </ul>
    {/if}


    {include '../_componentes/camino-navegacion.tpl'}

    {* {ia_blocks block='inventory'} *}

    {if $core.config.search_inventory}
        <form method="get" action="{$smarty.const.IA_URL}search/" class="lima search-inventory pull-right">
            <input type="text" name="q" placeholder="{lang key='search'}">
            <button type="submit"><span class="fa fa-search"></span></button>
        </form>
    {/if}
    {include '../_componentes/idiomas.tpl'}
</nav>
