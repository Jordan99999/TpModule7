<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'index_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'update_admin' => [['id'], ['_controller' => 'App\\Controller\\AdminController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/update']], [], [], []],
    'delete_admin' => [['id'], ['_controller' => 'App\\Controller\\AdminController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/delete']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_mentions' => [[], ['_controller' => 'App\\Controller\\HomeController::mentions'], [], [['text', '/mentions']], [], [], []],
    'admin.login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'admin.logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'security.registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/inscription']], [], [], []],
    'user.edit' => [['id'], ['_controller' => 'App\\Controller\\UserAdminController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/edition']], [], [], []],
    'user.edit.password' => [['id'], ['_controller' => 'App\\Controller\\UserAdminController::editPassword'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/edition-mot-de-passe']], [], [], []],
    'user.delete' => [['id'], ['_controller' => 'App\\Controller\\UserAdminController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/suppression']], [], [], []],
    'index_vehicule' => [[], ['_controller' => 'App\\Controller\\VehiculeController::index'], [], [['text', '/vehicule']], [], [], []],
    'new_vehicule' => [[], ['_controller' => 'App\\Controller\\VehiculeController::new_vehicule'], [], [['text', '/vehicule/new_vehicule']], [], [], []],
    'update.vehicule' => [['id'], ['_controller' => 'App\\Controller\\VehiculeController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/vehicule/update']], [], [], []],
    'delete_vehicule' => [['id'], ['_controller' => 'App\\Controller\\VehiculeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/vehicule/delete']], [], [], []],
    'App\Controller\AdminController::index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\AdminController::update' => [['id'], ['_controller' => 'App\\Controller\\AdminController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/update']], [], [], []],
    'App\Controller\AdminController::delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/delete']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\HomeController::mentions' => [[], ['_controller' => 'App\\Controller\\HomeController::mentions'], [], [['text', '/mentions']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\SecurityController::registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/inscription']], [], [], []],
    'App\Controller\UserAdminController::edit' => [['id'], ['_controller' => 'App\\Controller\\UserAdminController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/edition']], [], [], []],
    'App\Controller\UserAdminController::editPassword' => [['id'], ['_controller' => 'App\\Controller\\UserAdminController::editPassword'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/edition-mot-de-passe']], [], [], []],
    'App\Controller\UserAdminController::delete' => [['id'], ['_controller' => 'App\\Controller\\UserAdminController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/suppression']], [], [], []],
    'App\Controller\VehiculeController::index' => [[], ['_controller' => 'App\\Controller\\VehiculeController::index'], [], [['text', '/vehicule']], [], [], []],
    'App\Controller\VehiculeController::new_vehicule' => [[], ['_controller' => 'App\\Controller\\VehiculeController::new_vehicule'], [], [['text', '/vehicule/new_vehicule']], [], [], []],
    'App\Controller\VehiculeController::update' => [['id'], ['_controller' => 'App\\Controller\\VehiculeController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/vehicule/update']], [], [], []],
    'App\Controller\VehiculeController::delete' => [['id'], ['_controller' => 'App\\Controller\\VehiculeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/vehicule/delete']], [], [], []],
];
