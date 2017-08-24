    <meta property="og:type" content="{$core.page['meta-og-type']}" />
    <meta property="og:title" content="{$core.page['meta-og-title']}" />
    <meta property="og:url" content="{$smarty.const.IA_SELF}">
    <meta property="og:description" content="{$core.page['meta-og-description']}" />

{if !isset($noImage) && $core.config.opengraph_image}
    <meta property="og:image" content="{$smarty.const.IA_URL}uploads/{$core.config.opengraph_image}" />
{/if}
