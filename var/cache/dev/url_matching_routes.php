<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'article_index', '_controller' => 'App\\Controller\\IndexController::index'], null, ['GET' => 0], null, false, false, null]],
        '/article/save' => [[['_route' => 'article_save_demo', '_controller' => 'App\\Controller\\IndexController::saveDemo'], null, ['GET' => 0], null, false, false, null]],
        '/article/new' => [[['_route' => 'article_new', '_controller' => 'App\\Controller\\IndexController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/article/(?'
                    .'|([^/]++)(*:27)'
                    .'|edit/([^/]++)(*:47)'
                    .'|delete/([^/]++)(*:69)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\IndexController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        47 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\IndexController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        69 => [
            [['_route' => 'article_delete', '_controller' => 'App\\Controller\\IndexController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
