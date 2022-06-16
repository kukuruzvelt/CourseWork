<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/main/{lang}', function($lang)
{
    $b = new BaseController();
    return $b->main($lang);

});

Route::get('/test', 'BaseController@test');

Route::post('/register/{lang}', function($lang)
{
    $b = new BaseController();
    return $b->register($lang);
});

Route::get('/services/{lang}', function($lang)
{
    $b = new BaseController();
    return $b->services($lang);
});

Route::get('/casual/{lang}', function($lang)
{
    $b = new BaseController();
    return $b->casual($lang);
});

Route::get('/formal/{lang}', function($lang)
{
    $b = new BaseController();
    return $b->formal($lang);
});

Route::get('/accessories/{lang}', function($lang)
{
    $b = new BaseController();
    return $b->accessories($lang);
});

Route::get('/repair/{lang}', function($lang)
{
    $b = new BaseController();
    return $b->repair($lang);
});

//Route::get('/insertUser/{name}/{surname}', function ($name, $surname){
//    $b = new BaseController();
//    return $b->insertUser($name, $surname);
//});
//
//Route::get('/getUsers', function (){
//    $b = new BaseController();
//    return $b->getMasters();
//});


