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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/dashboard/index' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|ssureur/(?'
                        .'|edit(?:/([^/]++))?(*:203)'
                        .'|de(?'
                            .'|lete(?:/([^/]++))?(*:234)'
                            .'|tails/(\\d+)(*:253)'
                        .')'
                        .'|list(?:/([^/]++)(?:/([^/]++))?)?(*:294)'
                    .')'
                    .'|utomobile/(?'
                        .'|list(?:/([^/]++)(?:/([^/]++))?)?(*:348)'
                        .'|de(?'
                            .'|tails/(\\d+)(*:372)'
                            .'|lete(?:/([^/]++))?(*:398)'
                        .')'
                        .'|edit(?:/([^/]++))?(*:425)'
                    .')'
                .')'
                .'|/c(?'
                    .'|lient/(?'
                        .'|list(?:/([^/]++)(?:/([^/]++))?)?(*:481)'
                        .'|de(?'
                            .'|tails/(\\d+)(*:505)'
                            .'|lete(?:/([^/]++))?(*:531)'
                        .')'
                        .'|edit(?:/([^/]++))?(*:558)'
                    .')'
                    .'|ontact/(?'
                        .'|list(?:/([^/]++)(?:/([^/]++))?)?(*:609)'
                        .'|de(?'
                            .'|tails/(\\d+)(*:633)'
                            .'|lete(?:/([^/]++))?(*:659)'
                        .')'
                        .'|edit(?:/([^/]++))?(*:686)'
                    .')'
                .')'
                .'|/entreprise/(?'
                    .'|list(?:/([^/]++)(?:/([^/]++))?)?(*:743)'
                    .'|de(?'
                        .'|tails/(\\d+)(*:767)'
                        .'|lete(?:/([^/]++))?(*:793)'
                    .')'
                    .'|edit(?:/([^/]++))?(*:820)'
                .')'
                .'|/monnaie/(?'
                    .'|list(?:/([^/]++)(?:/([^/]++))?)?(*:873)'
                    .'|de(?'
                        .'|tails/(\\d+)(*:897)'
                        .'|lete(?:/([^/]++))?(*:923)'
                    .')'
                    .'|edit(?:/([^/]++))?(*:950)'
                .')'
                .'|/outstanding/(?'
                    .'|commission(?:/([^/]++)(?:/([^/]++))?)?(*:1013)'
                    .'|retrocommission(?:/([^/]++)(?:/([^/]++))?)?(*:1065)'
                    .'|taxe(?:/([^/]++)(?:/([^/]++))?)?(*:1106)'
                .')'
                .'|/p(?'
                    .'|o(?'
                        .'|p(?'
                            .'|commission/(?'
                                .'|list(?:/([^/]++)(?:/([^/]++))?)?(*:1175)'
                                .'|de(?'
                                    .'|tails/(\\d+)(*:1200)'
                                    .'|posit(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?(*:1256)'
                                    .'|lete(?:/([^/]++))?(*:1283)'
                                .')'
                                .'|edit(?:/([^/]++))?(*:1311)'
                            .')'
                            .'|partenaire/(?'
                                .'|list(?:/([^/]++)(?:/([^/]++))?)?(*:1367)'
                                .'|de(?'
                                    .'|tails/(\\d+)(*:1392)'
                                    .'|lete(?:/([^/]++))?(*:1419)'
                                    .'|posit(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?(*:1475)'
                                .')'
                                .'|edit(?:/([^/]++))?(*:1503)'
                            .')'
                            .'|taxe/(?'
                                .'|list(?:/([^/]++)(?:/([^/]++))?)?(*:1553)'
                                .'|de(?'
                                    .'|tails/(\\d+)(*:1578)'
                                    .'|lete(?:/([^/]++))?(*:1605)'
                                    .'|posit(?:/([^/]++)(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?)?(*:1675)'
                                .')'
                                .'|edit(?:/([^/]++))?(*:1703)'
                            .')'
                        .')'
                        .'|lice/(?'
                            .'|list(?:/([^/]++)(?:/([^/]++))?)?(*:1754)'
                            .'|de(?'
                                .'|tails/(\\d+)(*:1779)'
                                .'|lete(?:/([^/]++))?(*:1806)'
                            .')'
                            .'|edit(?:/([^/]++))?(*:1834)'
                        .')'
                    .')'
                    .'|artenaire/(?'
                        .'|list(?:/([^/]++)(?:/([^/]++))?)?(*:1890)'
                        .'|de(?'
                            .'|tails/(\\d+)(*:1915)'
                            .'|lete(?:/([^/]++))?(*:1942)'
                        .')'
                        .'|edit(?:/([^/]++))?(*:1970)'
                    .')'
                    .'|roduit/(?'
                        .'|list(?:/([^/]++)(?:/([^/]++))?)?(*:2022)'
                        .'|de(?'
                            .'|tails/(\\d+)(*:2047)'
                            .'|lete(?:/([^/]++))?(*:2074)'
                        .')'
                        .'|edit(?:/([^/]++))?(*:2102)'
                    .')'
                .')'
                .'|/taxe/(?'
                    .'|list(?:/([^/]++)(?:/([^/]++))?)?(*:2154)'
                    .'|de(?'
                        .'|tails/(\\d+)(*:2179)'
                        .'|lete(?:/([^/]++))?(*:2206)'
                    .')'
                    .'|edit(?:/([^/]++))?(*:2234)'
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
        203 => [[['_route' => 'assureur.edit', 'id' => '0', '_controller' => 'App\\Controller\\AssureurController::edit'], ['id'], null, null, false, true, null]],
        234 => [[['_route' => 'assureur.delete', 'id' => '0', '_controller' => 'App\\Controller\\AssureurController::delete'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => 'assureur.details', '_controller' => 'App\\Controller\\AssureurController::detail'], ['id'], null, null, false, true, null]],
        294 => [[['_route' => 'assureur.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\AssureurController::list'], ['page', 'nbre'], null, null, false, true, null]],
        348 => [[['_route' => 'automobile.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\AutomobileController::list'], ['page', 'nbre'], null, null, false, true, null]],
        372 => [[['_route' => 'automobile.details', '_controller' => 'App\\Controller\\AutomobileController::detail'], ['id'], null, null, false, true, null]],
        398 => [[['_route' => 'automobile.delete', 'id' => '0', '_controller' => 'App\\Controller\\AutomobileController::delete'], ['id'], null, null, false, true, null]],
        425 => [[['_route' => 'automobile.edit', 'id' => '0', '_controller' => 'App\\Controller\\AutomobileController::edit'], ['id'], null, null, false, true, null]],
        481 => [[['_route' => 'client.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\ClientController::search'], ['page', 'nbre'], null, null, false, true, null]],
        505 => [[['_route' => 'client.details', '_controller' => 'App\\Controller\\ClientController::detail'], ['id'], null, null, false, true, null]],
        531 => [[['_route' => 'client.delete', 'id' => '0', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], null, null, false, true, null]],
        558 => [[['_route' => 'client.edit', 'id' => '0', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], null, null, false, true, null]],
        609 => [[['_route' => 'contact.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\ContactController::list'], ['page', 'nbre'], null, null, false, true, null]],
        633 => [[['_route' => 'contact.details', '_controller' => 'App\\Controller\\ContactController::detail'], ['id'], null, null, false, true, null]],
        659 => [[['_route' => 'contact.delete', 'id' => '0', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], null, null, false, true, null]],
        686 => [[['_route' => 'contact.edit', 'id' => '0', '_controller' => 'App\\Controller\\ContactController::edit'], ['id'], null, null, false, true, null]],
        743 => [[['_route' => 'entreprise.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\EntrepriseController::list'], ['page', 'nbre'], null, null, false, true, null]],
        767 => [[['_route' => 'entreprise.details', '_controller' => 'App\\Controller\\EntrepriseController::detail'], ['id'], null, null, false, true, null]],
        793 => [[['_route' => 'entreprise.delete', 'id' => '0', '_controller' => 'App\\Controller\\EntrepriseController::delete'], ['id'], null, null, false, true, null]],
        820 => [[['_route' => 'entreprise.edit', 'id' => '0', '_controller' => 'App\\Controller\\EntrepriseController::edit'], ['id'], null, null, false, true, null]],
        873 => [[['_route' => 'monnaie.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\MonnaieController::list'], ['page', 'nbre'], null, null, false, true, null]],
        897 => [[['_route' => 'monnaie.details', '_controller' => 'App\\Controller\\MonnaieController::detail'], ['id'], null, null, false, true, null]],
        923 => [[['_route' => 'monnaie.delete', 'id' => '0', '_controller' => 'App\\Controller\\MonnaieController::delete'], ['id'], null, null, false, true, null]],
        950 => [[['_route' => 'monnaie.edit', 'id' => '0', '_controller' => 'App\\Controller\\MonnaieController::edit'], ['id'], null, null, false, true, null]],
        1013 => [[['_route' => 'outstanding.commission.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\OutstandingCommissionController::index'], ['page', 'nbre'], null, null, false, true, null]],
        1065 => [[['_route' => 'outstanding.retrocommission.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\OutstandingRetroComController::index'], ['page', 'nbre'], null, null, false, true, null]],
        1106 => [[['_route' => 'outstanding.taxe.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\OutstandingTaxeController::index'], ['page', 'nbre'], null, null, false, true, null]],
        1175 => [[['_route' => 'popcommission.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\PaiementCommissionController::list'], ['page', 'nbre'], null, null, false, true, null]],
        1200 => [[['_route' => 'popcommission.details', '_controller' => 'App\\Controller\\PaiementCommissionController::detail'], ['id'], null, null, false, true, null]],
        1256 => [[['_route' => 'popcommission.deposit', 'idpolicy' => '0', 'amount' => '0', 'idmonnaie' => '0', '_controller' => 'App\\Controller\\PaiementCommissionController::deposit'], ['idpolicy', 'amount', 'idmonnaie'], null, null, false, true, null]],
        1283 => [[['_route' => 'popcommission.delete', 'id' => '0', '_controller' => 'App\\Controller\\PaiementCommissionController::delete'], ['id'], null, null, false, true, null]],
        1311 => [[['_route' => 'popcommission.edit', 'id' => '0', '_controller' => 'App\\Controller\\PaiementCommissionController::edit'], ['id'], null, null, false, true, null]],
        1367 => [[['_route' => 'poppartenaire.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\PaiementPartenaireController::list'], ['page', 'nbre'], null, null, false, true, null]],
        1392 => [[['_route' => 'poppartenaire.details', '_controller' => 'App\\Controller\\PaiementPartenaireController::detail'], ['id'], null, null, false, true, null]],
        1419 => [[['_route' => 'poppartenaire.delete', 'id' => '0', '_controller' => 'App\\Controller\\PaiementPartenaireController::delete'], ['id'], null, null, false, true, null]],
        1475 => [[['_route' => 'popretrocommission.deposit', 'idpolicy' => '0', 'amount' => '0', 'idmonnaie' => '0', '_controller' => 'App\\Controller\\PaiementPartenaireController::deposit'], ['idpolicy', 'amount', 'idmonnaie'], null, null, false, true, null]],
        1503 => [[['_route' => 'poppartenaire.edit', 'id' => '0', '_controller' => 'App\\Controller\\PaiementPartenaireController::edit'], ['id'], null, null, false, true, null]],
        1553 => [[['_route' => 'poptaxe.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\PaiementTaxeController::list'], ['page', 'nbre'], null, null, false, true, null]],
        1578 => [[['_route' => 'poptaxe.details', '_controller' => 'App\\Controller\\PaiementTaxeController::detail'], ['id'], null, null, false, true, null]],
        1605 => [[['_route' => 'poptaxe.delete', 'id' => '0', '_controller' => 'App\\Controller\\PaiementTaxeController::delete'], ['id'], null, null, false, true, null]],
        1675 => [[['_route' => 'poptaxe.deposit', 'idtaxe' => '0', 'idpolicy' => '0', 'amount' => '0', 'idmonnaie' => '0', '_controller' => 'App\\Controller\\PaiementTaxeController::deposit'], ['idtaxe', 'idpolicy', 'amount', 'idmonnaie'], null, null, false, true, null]],
        1703 => [[['_route' => 'poptaxe.edit', 'id' => '0', '_controller' => 'App\\Controller\\PaiementTaxeController::edit'], ['id'], null, null, false, true, null]],
        1754 => [[['_route' => 'police.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\PoliceController::list'], ['page', 'nbre'], null, null, false, true, null]],
        1779 => [[['_route' => 'police.details', '_controller' => 'App\\Controller\\PoliceController::detail'], ['id'], null, null, false, true, null]],
        1806 => [[['_route' => 'police.delete', 'id' => '0', '_controller' => 'App\\Controller\\PoliceController::delete'], ['id'], null, null, false, true, null]],
        1834 => [[['_route' => 'police.edit', 'id' => '0', '_controller' => 'App\\Controller\\PoliceController::edit'], ['id'], null, null, false, true, null]],
        1890 => [[['_route' => 'partenaire.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\PartenaireController::list'], ['page', 'nbre'], null, null, false, true, null]],
        1915 => [[['_route' => 'partenaire.details', '_controller' => 'App\\Controller\\PartenaireController::detail'], ['id'], null, null, false, true, null]],
        1942 => [[['_route' => 'partenaire.delete', 'id' => '0', '_controller' => 'App\\Controller\\PartenaireController::delete'], ['id'], null, null, false, true, null]],
        1970 => [[['_route' => 'partenaire.edit', 'id' => '0', '_controller' => 'App\\Controller\\PartenaireController::edit'], ['id'], null, null, false, true, null]],
        2022 => [[['_route' => 'produit.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\ProduitController::list'], ['page', 'nbre'], null, null, false, true, null]],
        2047 => [[['_route' => 'produit.details', '_controller' => 'App\\Controller\\ProduitController::detail'], ['id'], null, null, false, true, null]],
        2074 => [[['_route' => 'produit.delete', 'id' => '0', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], null, null, false, true, null]],
        2102 => [[['_route' => 'produit.edit', 'id' => '0', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], null, null, false, true, null]],
        2154 => [[['_route' => 'taxe.list', 'page' => '1', 'nbre' => '20', '_controller' => 'App\\Controller\\TaxeController::list'], ['page', 'nbre'], null, null, false, true, null]],
        2179 => [[['_route' => 'taxe.details', '_controller' => 'App\\Controller\\TaxeController::detail'], ['id'], null, null, false, true, null]],
        2206 => [[['_route' => 'taxe.delete', 'id' => '0', '_controller' => 'App\\Controller\\TaxeController::delete'], ['id'], null, null, false, true, null]],
        2234 => [
            [['_route' => 'taxe.edit', 'id' => '0', '_controller' => 'App\\Controller\\TaxeController::edit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
