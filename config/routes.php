<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Http\Middleware\EncryptedCookieMiddleware;


/** @var \Cake\Routing\RouteBuilder $routes */
$routes->setRouteClass(DashedRoute::class);


$routes->prefix('admin', function (RouteBuilder $route) {
    $route->redirect('/',['controller' => 'Users', 'action' => 'login']);  
    $route->connect('/login', ['controller' => 'Users', 'action' => 'login']);


    //users
    $route->connect('/list-users', ['controller' => 'Users', 'action' => 'index']);
    $route->connect('/user-add', ['controller' => 'Users', 'action' => 'add']);
    $route->connect('/edit-user/:id', ['controller' => 'Users', 'action' => 'edit'], ['pass' => ['id']]);
    $route->connect('/user/:id', ['controller' => 'Users', 'action' => 'view'], ['pass' => ['id']]);
    $route->connect('/delete-user/:id', ['controller' => 'Users', 'action' => 'delete'], ['pass' => ['id']]);
    $route->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);

    //dashboard
    $route->connect('/dashboard', ['controller' => 'Dashboards', 'action' => 'index']);

});

$routes->scope('/', function (RouteBuilder $builder) {

    $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    $builder->connect('/pages/*', 'Pages::display');

    $builder->fallbacks();
});

