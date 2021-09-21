<?php

    $themeOptions = [
        'mainLayoutType' => 'vertical',
        'theme' => 'light',
        'sidebarCollapsed' => false,
        'navbarColor' => '',
        'horizontalMenuType' => 'floating',
        'verticalMenuNavbarType' => 'floating',
        'footerType' => 'static', //footer
        'layoutWidth' => 'boxed',
        'showMenu' => true,
        'bodyClass' => '',
        'pageClass' => '',
        'pageHeader' => true,
        'contentLayout' => 'default',
        'blankPage' => false,
        'defaultLanguage' => 'en',
        'direction' => env('MIX_CONTENT_DIRECTION', 'ltr'),
    ];
    $allOptions = [
        'mainLayoutType' => ['vertical', 'horizontal'],
        'theme' => ['light' => 'light', 'dark' => 'dark-layout', 'bordered' => 'bordered-layout', 'semi-dark' => 'semi-dark-layout'],
        'sidebarCollapsed' => [true, false],
        'showMenu' => [true, false],
        'layoutWidth' => ['full', 'boxed'],
        'navbarColor' => ['bg-primary', 'bg-info', 'bg-warning', 'bg-success', 'bg-danger', 'bg-dark'],
        'horizontalMenuType' => ['floating' => 'navbar-floating', 'static' => 'navbar-static', 'sticky' => 'navbar-sticky'],
        'horizontalMenuClass' => ['static' => '', 'sticky' => 'fixed-top', 'floating' => 'floating-nav'],
        'verticalMenuNavbarType' => ['floating' => 'navbar-floating', 'static' => 'navbar-static', 'sticky' => 'navbar-sticky', 'hidden' => 'navbar-hidden'],
        'navbarClass' => ['floating' => 'floating-nav', 'static' => 'navbar-static-top', 'sticky' => 'fixed-top', 'hidden' => 'd-none'],
        'footerType' => ['static' => 'footer-static', 'sticky' => 'footer-fixed', 'hidden' => 'footer-hidden'],
        'pageHeader' => [true, false],
        'contentLayout' => ['default', 'content-left-sidebar', 'content-right-sidebar', 'content-detached-left-sidebar', 'content-detached-right-sidebar'],
        'blankPage' => [false, true],
        'sidebarPositionClass' => ['content-left-sidebar' => 'sidebar-left', 'content-right-sidebar' => 'sidebar-right', 'content-detached-left-sidebar' => 'sidebar-detached sidebar-left', 'content-detached-right-sidebar' => 'sidebar-detached sidebar-right', 'default' => 'default-sidebar-position'],
        'contentsidebarClass' => ['content-left-sidebar' => 'content-right', 'content-right-sidebar' => 'content-left', 'content-detached-left-sidebar' => 'content-detached content-right', 'content-detached-right-sidebar' => 'content-detached content-left', 'default' => 'default-sidebar'],
        'defaultLanguage' => ['en' => 'en', 'fa' => 'fa'],
        'direction' => ['ltr', 'rtl'],
    ];

    return [
        'themeOptions' => $themeOptions,
    ];
