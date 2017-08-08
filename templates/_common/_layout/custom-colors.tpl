{if $core.config.custom_colors}
    <style type="text/css">

        /*General*/
        body {
            background-color: {$core.config.custom_color_body_bg};
            color: {$core.config.custom_color_text};
        }
        h1, h2, h3, h4, h5, h6,
        .box__caption {
            color: {$core.config.custom_color_headings};
        }
        a,
        a:focus {
            color: {$core.config.custom_color_link};
        }
        a:hover {
            color: {$core.config.custom_color_link_hover};
        }

        /*Inventory*/
        .inventory {
            background-color: {$core.config.custom_color_inventory_bg};
        }
        .nav-inventory > li > a,
        .nav-inventory > li > a:focus {
            color: {$core.config.custom_color_inventory_link};
        }
        .nav-inventory > li > a:hover {
            color: {$core.config.custom_color_inventory_link_hover};
        }
        .nav-inventory > li.active > a,
        .nav-inventory > li.active > a:focus,
        .nav-inventory > li.active > a:hover {
            color: {$core.config.custom_color_inventory_link_active};
        }

        .inventory__social > li > a,
        .inventory__bread > li > a,
        .inventory__lang > li > a,
        .inventory__search > li > a {
            color: {$core.config.custom_color_inventory_link};
        }

        .inventory__bread > li > a:hover,
        .inventory__bread > li > a:focus,
        .inventory__bread > li > a:target,
        .inventory__lang > li > a:hover,
        .inventory__lang > li > a:focus,
        .inventory__lang > li > a:target {
            color: {$core.config.custom_color_inventory_link_hover};
        }

        .inventory__bread > li.active,
        .inventory__lang > li.active {
            color: {$core.config.custom_color_inventory_link_active};
        }

        /*Navbar - Mainmenu*/
        .navbar-default {
            background-color: {$core.config.custom_color_navbar_bg};
        }
        .navbar-default .navbar-nav > li > a,
        .navbar-default .navbar-nav > li > a:focus {
            color: {$core.config.custom_color_navbar_link};
        }
        .navbar-default .navbar-nav > li > a:hover {
            color: {$core.config.custom_color_navbar_link_hover};
        }
        .navbar-default .navbar-nav > li.active > a,
        .navbar-default .navbar-nav > li.active > a:focus,
        .navbar-default .navbar-nav > li.active > a:hover {
            color: {$core.config.custom_color_navbar_link_active};
        }

        /*Teaser*/
        .header {
            {if $core.config.bg_header_use_color}
                background: {$core.config.bg_header_color};
            {elseif $core.config.bg_header}
                background-image: url('{$core.page.nonProtocolUrl}uploads/{$core.config.bg_header}');
            {/if}
        }

        /*Features*/
        .section-features {
            {if $core.config.bg_features_use_color}
                background: {$core.config.bg_features_color};
            {elseif $core.config.bg_features}
                background-image: url('{$core.page.nonProtocolUrl}uploads/{$core.config.bg_features}');
            {/if}
        }

        /*Footer*/
        .footer-blocks {
            background: {$core.config.footer_blocks_bg};
        }
        .footer {
            background: {$core.config.footer_bg};
        }
        .nav-footer > li > a,
        .nav-footer > li > a:focus {
            color: {$core.config.footer_link};
        }
        .nav-footer > li > a:hover {
            color: {$core.config.footer_link_hover};
        }
        .nav-footer > li.active > a,
        .nav-footer > li.active > a:focus,
        .nav-footer > li.active > a:hover {
            color: {$core.config.footer_link_active};
        }
    </style>
{/if}
