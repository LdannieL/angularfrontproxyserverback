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



Route::get('/', function()
{
    return View::make('index');
});

// Route::group(array('prefix' => 'api'), function(){

//     Route::get('/dashboard', function()
//     {
//         return View::make('dashboard');
//     });

// });

Route::get('/dashboard', function()
{
    return View::make('dashboard');
});

Route::get('/administrators', function()
{
    return View::make('administrators');
});

Route::get('/branding', function()
{
    return View::make('branding');
});

Route::get('/marketing_campains', function()
{
    return View::make('marketing_campains');
});

Route::get('/user_management', function()
{
    return View::make('user_management');
});


Route::group(array('prefix' => 'admin'), function(){

    Route::post('login', array('as' => 'admin.login', 'uses' => 'RequestController@postLogin'));
    Route::post('forgottenpassword', array('as' => 'admin.forgottenpassword', 'uses' => 'RequestController@postForgottenpassword'));
    Route::get('all-members', array('as' => 'admin.all-members', 'uses' => 'RequestController@getMembers'));
    // Route::post('remove-member/{id}', array('as' => 'admin.remove-member', 'uses' => 'RequestController@postRemoveMember'));
    Route::post('remove-member', array('as' => 'admin.remove-member', 'uses' => 'RequestController@postRemoveMember'));
    Route::get('join-requests', array('as' => 'admin.join-requests', 'uses' => 'RequestController@getJoinRequests'));
    Route::post('join-requests', array('as' => 'admin.join-requests', 'uses' => 'RequestController@postAddRejectMember'));
    Route::get('community-settings', array('as' => 'admin.community-settings', 'uses' => 'RequestController@getSettings'));
    Route::post('community-settings', array('as' => 'admin.community-settings', 'uses' => 'RequestController@putSettings'));
});

