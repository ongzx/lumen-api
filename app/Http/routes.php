<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    return $app->welcome();
});


$app->get('/api/article', 'ArticleController@index');
$app->get('/api/article/{id}', 'ArticleController@getArticle');
$app->post('/api/article', 'ArticleController@saveArticle');
$app->put('/api/article/{id}', 'ArticleController@updateArticle');
$app->delete('/api/article/{id}', 'ArticleController@deleteArticle');