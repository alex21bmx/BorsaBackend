<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/candidat' => [[['_route' => 'candidat_index', '_controller' => 'App\\Controller\\CandidatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/candidat/new' => [[['_route' => 'candidat_new', '_controller' => 'App\\Controller\\CandidatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categoria' => [[['_route' => 'categoria_index', '_controller' => 'App\\Controller\\CategoriaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categoria/new' => [[['_route' => 'categoria_new', '_controller' => 'App\\Controller\\CategoriaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/empresa' => [[['_route' => 'empresa_index', '_controller' => 'App\\Controller\\EmpresaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/empresa/new' => [[['_route' => 'empresa_new', '_controller' => 'App\\Controller\\EmpresaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/oferta' => [[['_route' => 'oferta_index', '_controller' => 'App\\Controller\\OfertaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/oferta/new' => [[['_route' => 'oferta_new', '_controller' => 'App\\Controller\\OfertaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/ca(?'
                    .'|ndidat/([^/]++)(?'
                        .'|(*:193)'
                        .'|/edit(*:206)'
                        .'|(*:214)'
                    .')'
                    .'|tegoria/([^/]++)(?'
                        .'|(*:242)'
                        .'|/edit(*:255)'
                        .'|(*:263)'
                    .')'
                .')'
                .'|/empresa/([^/]++)(?'
                    .'|(*:293)'
                    .'|/edit(*:306)'
                    .'|(*:314)'
                .')'
                .'|/oferta/([^/]++)(?'
                    .'|(*:342)'
                    .'|/edit(*:355)'
                    .'|(*:363)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:389)'
                    .'|/edit(*:402)'
                    .'|(*:410)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'candidat_show', '_controller' => 'App\\Controller\\CandidatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        206 => [[['_route' => 'candidat_edit', '_controller' => 'App\\Controller\\CandidatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        214 => [[['_route' => 'candidat_delete', '_controller' => 'App\\Controller\\CandidatController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        242 => [[['_route' => 'categoria_show', '_controller' => 'App\\Controller\\CategoriaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'categoria_edit', '_controller' => 'App\\Controller\\CategoriaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'categoria_delete', '_controller' => 'App\\Controller\\CategoriaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        293 => [[['_route' => 'empresa_show', '_controller' => 'App\\Controller\\EmpresaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        306 => [[['_route' => 'empresa_edit', '_controller' => 'App\\Controller\\EmpresaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        314 => [[['_route' => 'empresa_delete', '_controller' => 'App\\Controller\\EmpresaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        342 => [[['_route' => 'oferta_show', '_controller' => 'App\\Controller\\OfertaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        355 => [[['_route' => 'oferta_edit', '_controller' => 'App\\Controller\\OfertaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        363 => [[['_route' => 'oferta_delete', '_controller' => 'App\\Controller\\OfertaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        389 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        402 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        410 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
