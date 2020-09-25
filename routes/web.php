<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->group(['prefix' => 'categories'], function () use ($router) {
        $router->get('', 'CategoryController@list');
        $router->get('{categoryId}', 'CategoryController@single');
    });

    $router->group(['prefix' => 'dimensions'], function () use ($router) {
        $router->get('', 'DimensionController@list');
        $router->get('{dimensionId}', 'DimensionController@single');
    });

    $router->group(['prefix' => 'issues'], function () use ($router) {
        $router->get('', 'IssueController@list');
        $router->get('{issueId}', 'IssueController@single');
    });

    $router->group(['prefix' => 'patterns'], function () use ($router) {
        $router->get('', 'PatternController@list');
        $router->get('{patternId}', 'PatternController@single');
    });

});
