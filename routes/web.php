<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use LaraFusion\Package\Http\Controllers\PackageController;

Route::group([
    'prefix'     => 'package',
    'namespace'  => 'LaraFusion\\Package\\Http\\Controllers\\',
    'middleware' => config('admin.route.middleware'),
    'as'         => 'package.'
], function (Router $router) {

    $router->get('/', PackageController::class . '@index');

});

