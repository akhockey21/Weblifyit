<?php
/**
 * config.php
 *
 * Author: pixelcave
 *
 * Configuration file. It contains variables used in the template as well as the primary navigation array from which the navigation is created
 *
 */

/* Template variables */
$template = array(
    'name'              => 'Weblify.it',
    'version'           => '0.10',
    'author'            => 'Brandon Howard',
    'robots'            => 'noindex, nofollow',
    'title'             => 'Weblify.it - Complete Website Solution',
    'description'       => 'Weblifyit is a complete website solution for businesses, professionals, and hobbyist.',
    // true                     enable page preloader
    // false                    disable page preloader
    'page_preloader'    => true,
    // true                     enable main menu auto scrolling when opening a submenu
    // false                    disable main menu auto scrolling when opening a submenu
    'menu_scroll'       => true,
    // 'navbar-default'         for a light header
    // 'navbar-inverse'         for a dark header
    'header_navbar'     => 'navbar-inverse',
    // ''                       empty for a static layout
    // 'navbar-fixed-top'       for a top fixed header / fixed sidebars
    // 'navbar-fixed-bottom'    for a bottom fixed header / fixed sidebars
    'header'            => '',
    // ''                                               for a full main and alternative sidebar hidden by default (> 991px)
    // 'sidebar-visible-lg'                             for a full main sidebar visible by default (> 991px)
    // 'sidebar-partial'                                for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
    // 'sidebar-partial sidebar-visible-lg'             for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
    // 'sidebar-mini sidebar-visible-lg-mini'           for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
    // 'sidebar-mini sidebar-visible-lg'                for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)
    // 'sidebar-alt-visible-lg'                         for a full alternative sidebar visible by default (> 991px)
    // 'sidebar-alt-partial'                            for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
    // 'sidebar-alt-partial sidebar-alt-visible-lg'     for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)
    // 'sidebar-partial sidebar-alt-partial'            for both sidebars partial which open on mouse hover, hidden by default (> 991px)
    // 'sidebar-no-animations'                          add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!
    'sidebar'           => 'sidebar-mini sidebar-visible-lg sidebar-no-animations',
    // ''                       empty for a static footer
    // 'footer-fixed'           for a fixed footer
    'footer'            => '',
    // ''                       empty for default style
    // 'style-alt'              for an alternative main style (affects main page background as well as blocks style)
    'main_style'        => 'style-alt',
    // ''                           Disable cookies (best for setting an active color theme from the next variable)
    // 'enable-cookies'             Enables cookies for remembering active color theme when changed from the sidebar links (the next color theme variable will be ignored)
    'cookies'           => '',
    // 'night', 'amethyst', 'modern', 'autumn', 'flatie', 'spring', 'fancy', 'fire', 'coral', 'lake',
    // 'forest', 'waterlily', 'emerald', 'blackberry' or '' leave empty for the Default Blue theme
    'theme'             => '',
    // ''                       for default content in header
    // 'horizontal-menu'        for a horizontal menu in header
    // This option is just used for feature demostration and you can remove it if you like. You can keep or alter header's content in page_head.php
    'header_content'    => '',
    'active_page'       => basename($_SERVER['PHP_SELF'])
);

/* Primary navigation array (the primary navigation will be created automatically based on this array, up to 3 levels deep) */
$primary_nav = array(
    array(
        'name'  => 'Dashboard',
        'url'   => 'dashboard.php',
        'icon'  => 'gi gi-home'
    ),
    array(
        'name'  => 'Appearance',
        'icon'  => 'gi gi-brush',
        'sub'   => array(
            array(
                'name'  => 'Themes',
                'url'   => 'appearance-themes.php'
            ),
            array(
                'name'  => 'Header',
                'url'   => 'appearance-header.php'
            ),
            array(
                'name'  => 'Menu',
                'url'   => 'appearance-menu.php'
            ),
            array(
                'name'  => 'Footer',
                'url'   => 'appearance-footer.php'
            ),
            array(
                'name'  => 'Colors',
                'url'   => 'appearance-color.php'
            ),
            array(
                'name'  => 'Font',
                'url'   => 'appearance-font.php'
            ),
            
            array(
                'name'  => 'Custom CSS & JavaScript',
                'url'   => 'appearance-custom-code.php'
            )
        )
    ),
    array(
        'name'  => 'Pages',
        'icon'  => 'gi gi-more_items',
        'sub'   => array(
            array(
                'name'  => 'Manage Pages',
                'url'   => 'pages-manage.php'
            ),
            array(
                'name'  => 'Add New Page',
                'url'   => 'pages-new.php'
            )
        )
    ),
    array(
        'name'  => 'Business Info Wizard',
        'opt'   => '<a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a>' .
                   '<a href="javascript:void(0)" data-toggle="tooltip" title="Quickly update your websites business information with our fast business info wizard!"><i class="gi gi-lightbulb"></i></a>',
        'url'   => 'header',
    ),
    array(
        'name'  => 'Blog',
        'icon'  => 'gi gi-pencil',
        'sub'   => array(
            array(
                'name'  => 'Manage Blog',
                'url'   => 'blog-manage.php'
            ),
            array(
                'name'  => 'Add New Post',
                'url'   => 'blog-new-post.php'
            ),
            array(
                'name'  => 'Blog Layout',
                'url'   => 'blog-layout.php'
            ),
            array(
                'name'  => 'Blog Settings',
                'url'   => 'blog-settings.php'
            )
        )
    ),
    array(
        'name'  => 'Website Settings',
        'icon'  => 'gi gi-cogwheel',
        'sub'   => array(
            array(
                'name'  => 'Domain Settings',
                'url'   => 'website-settings-advanced.php'
            ),
            array(
                'name'  => 'Custom Code',
                'url'   => 'website-settings-custom-code.php'
            ),
            array(
                'name'  => 'Under Construction',
                'url'   => 'website-settings-under-construction.php'
            ),
            array(
                'name'  => 'Advanced Settings',
                'url'   => 'website-settings-advanced.php'
            ),
            array(
                'name'  => 'Upgrade Plan',
                'url'   => 'website-settings-upgrade.php'
            )
        )
    ),
    array(
        'name'  => 'Media',
        'url'   => 'media.php',
        'icon'  => 'gi gi-picture'
    ),
    array(
        'name'  => 'eCommerce',
        'icon'  => 'gi gi-shopping_cart',
        'sub'   => array(
            array(
                'name'  => 'Dashboard',
                'url'   => 'page_ecom_dashboard.php'
            ),
            array(
                'name'  => 'Orders',
                'url'   => 'page_ecom_orders.php'
            ),
            array(
                'name'  => 'Order View',
                'url'   => 'page_ecom_order_view.php'
            ),
            array(
                'name'  => 'Products',
                'url'   => 'page_ecom_products.php'
            ),
            array(
                'name'  => 'Product Edit',
                'url'   => 'page_ecom_product_edit.php'
            ),
            array(
                'name'  => 'Customer View',
                'url'   => 'page_ecom_customer_view.php'
            )
        )
    ),
    array(
        'name'  => 'Marketing Tools',
        'opt'   => '<a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a>',
        'url'   => 'header'
    ),
    array(
        'name'  => 'Statistics',
        'url'   => 'stats.php',
        'icon'  => 'gi gi-charts'
    ),
    array(
        'name'  => 'Social',
        'url'   => 'social.php',
        'icon'  => 'gi gi-share_alt'
    ),
    array(
        'name'  => 'Search Engine Settings',
        'url'   => 'search-engine-settings.php',
        'icon'  => 'gi gi-search'
    )
);