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
        '/articulo' => [[['_route' => 'articulo_index', '_controller' => 'App\\Controller\\ArticuloController::index'], null, ['GET' => 0], null, true, false, null]],
        '/articulo/new' => [[['_route' => 'articulo_new', '_controller' => 'App\\Controller\\ArticuloController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/bienvenida' => [[['_route' => 'bienvenida', '_controller' => 'App\\Controller\\BienvenidaController::index'], null, null, null, false, false, null]],
        '/carta' => [[['_route' => 'carta', '_controller' => 'App\\Controller\\CartaController::index'], null, null, null, false, false, null]],
        '/contacto' => [[['_route' => 'contacto', '_controller' => 'App\\Controller\\ContactoController::index'], null, null, null, false, false, null]],
        '/linea/pedido' => [[['_route' => 'linea_pedido_index', '_controller' => 'App\\Controller\\LineaPedidoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/linea/pedido/new' => [[['_route' => 'linea_pedido_new', '_controller' => 'App\\Controller\\LineaPedidoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null],
            [['_route' => 'logout'], null, null, null, false, false, null],
        ],
        '/pedido' => [[['_route' => 'pedido_index', '_controller' => 'App\\Controller\\PedidoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pedido/new' => [[['_route' => 'pedido_new', '_controller' => 'App\\Controller\\PedidoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/proveedor' => [[['_route' => 'proveedor_index', '_controller' => 'App\\Controller\\ProveedorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/proveedor/new' => [[['_route' => 'proveedor_new', '_controller' => 'App\\Controller\\ProveedorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/usuario' => [[['_route' => 'usuario_index', '_controller' => 'App\\Controller\\UsuarioController::index'], null, ['GET' => 0], null, true, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\BienvenidaController::index'], null, null, null, false, false, null]],
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
                .'|/articulo/([^/]++)(?'
                    .'|(*:190)'
                    .'|/edit(*:203)'
                    .'|(*:211)'
                .')'
                .'|/linea/pedido/([^/]++)(?'
                    .'|(*:245)'
                    .'|/edit(*:258)'
                    .'|(*:266)'
                .')'
                .'|/p(?'
                    .'|edido/([^/]++)(?'
                        .'|(*:297)'
                        .'|/edit(*:310)'
                        .'|(*:318)'
                    .')'
                    .'|roveedor/([^/]++)(?'
                        .'|(*:347)'
                        .'|/edit(*:360)'
                        .'|(*:368)'
                    .')'
                .')'
                .'|/usuario/([^/]++)(?'
                    .'|(*:398)'
                    .'|/edit(*:411)'
                    .'|(*:419)'
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
        190 => [[['_route' => 'articulo_show', '_controller' => 'App\\Controller\\ArticuloController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'articulo_edit', '_controller' => 'App\\Controller\\ArticuloController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'articulo_delete', '_controller' => 'App\\Controller\\ArticuloController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        245 => [[['_route' => 'linea_pedido_show', '_controller' => 'App\\Controller\\LineaPedidoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'linea_pedido_edit', '_controller' => 'App\\Controller\\LineaPedidoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        266 => [[['_route' => 'linea_pedido_delete', '_controller' => 'App\\Controller\\LineaPedidoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        297 => [[['_route' => 'pedido_show', '_controller' => 'App\\Controller\\PedidoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        310 => [[['_route' => 'pedido_edit', '_controller' => 'App\\Controller\\PedidoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        318 => [[['_route' => 'pedido_delete', '_controller' => 'App\\Controller\\PedidoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        347 => [[['_route' => 'proveedor_show', '_controller' => 'App\\Controller\\ProveedorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        360 => [[['_route' => 'proveedor_edit', '_controller' => 'App\\Controller\\ProveedorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        368 => [[['_route' => 'proveedor_delete', '_controller' => 'App\\Controller\\ProveedorController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        398 => [[['_route' => 'usuario_show', '_controller' => 'App\\Controller\\UsuarioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        411 => [[['_route' => 'usuario_edit', '_controller' => 'App\\Controller\\UsuarioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        419 => [
            [['_route' => 'usuario_delete', '_controller' => 'App\\Controller\\UsuarioController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
