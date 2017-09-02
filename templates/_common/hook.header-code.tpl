    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
{if isset($core.page['meta-og-type']) && !empty($core.page['meta-og-type'])}
    <meta property="og:type" content="{$core.page['meta-og-type']}" />
{else}
    <meta property="og:type" content="article" />
{/if}
{if isset($core.page['meta-og-title']) && !empty($core.page['meta-og-title'])}
    <meta property="og:title" content="{$core.page['meta-og-title']}" />
{else}
    <meta property="og:title" content="{$core.page['title']}" />
{/if}
    <meta property="og:url" content="{$smarty.const.IA_SELF}">
    <meta property="og:description" content="{$core.page['meta-og-description']}" />

{if !isset($noImage) && $core.config.opengraph_image}
    <meta property="og:image" content="{$core.config.baseurl}uploads/{$core.config.opengraph_image}" />
    <meta property="og:prueba" content="{$core.page.url}uploads/{$core.config.opengraph_image}" />
{/if}
<meta property="og:description" content="{$core.config.opengraph_description|strip_tags|escape}">
