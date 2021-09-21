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
        'mainLayoutType' => array('vertical', 'horizontal'),
        'theme' => array('light' => 'light', 'dark' => 'dark-layout', 'bordered' => 'bordered-layout', 'semi-dark' => 'semi-dark-layout'),
        'sidebarCollapsed' => array(true, false),
        'showMenu' => array(true, false),
        'layoutWidth' => array('full', 'boxed'),
        'navbarColor' => array('bg-primary', 'bg-info', 'bg-warning', 'bg-success', 'bg-danger', 'bg-dark'),
        'horizontalMenuType' => array('floating' => 'navbar-floating', 'static' => 'navbar-static', 'sticky' => 'navbar-sticky'),
        'horizontalMenuClass' => array('static' => '', 'sticky' => 'fixed-top', 'floating' => 'floating-nav'),
        'verticalMenuNavbarType' => array('floating' => 'navbar-floating', 'static' => 'navbar-static', 'sticky' => 'navbar-sticky', 'hidden' => 'navbar-hidden'),
        'navbarClass' => array('floating' => 'floating-nav', 'static' => 'navbar-static-top', 'sticky' => 'fixed-top', 'hidden' => 'd-none'),
        'footerType' => array('static' => 'footer-static', 'sticky' => 'footer-fixed', 'hidden' => 'footer-hidden'),
        'pageHeader' => array(true, false),
        'contentLayout' => array('default', 'content-left-sidebar', 'content-right-sidebar', 'content-detached-left-sidebar', 'content-detached-right-sidebar'),
        'blankPage' => array(false, true),
        'sidebarPositionClass' => array('content-left-sidebar' => 'sidebar-left', 'content-right-sidebar' => 'sidebar-right', 'content-detached-left-sidebar' => 'sidebar-detached sidebar-left', 'content-detached-right-sidebar' => 'sidebar-detached sidebar-right', 'default' => 'default-sidebar-position'),
        'contentsidebarClass' => array('content-left-sidebar' => 'content-right', 'content-right-sidebar' => 'content-left', 'content-detached-left-sidebar' => 'content-detached content-right', 'content-detached-right-sidebar' => 'content-detached content-left', 'default' => 'default-sidebar'),
        'defaultLanguage' => array('en' => 'en', 'fr' => 'fr', 'de' => 'de', 'pt' => 'pt'),
        'direction' => array('ltr', 'rtl'),
    ];

    return [
        'themeOptions' => $themeOptions,
    ];
