{* <ul class="breadcrumb"> *}
<ol class="inventory__bread abcentro">
    {if 'index' == $core.page.name}
        <li class="active">{lang key='welcome'}</li>
    {else}
        {foreach $core.page.breadcrumb as $item}
            {if $item.url && !$item@last}
                <li><a href="{$item.url}" title="{lang key='go_to_page'} {$item.caption}">{$item.caption}</a></li>
            {else}
                <li class="active" title="{lang key='this_page'}">{$item.caption}</li>
            {/if}
        {/foreach}
    {/if}
</ol>
