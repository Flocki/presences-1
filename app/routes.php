<?php

    use Carbon\Carbon as Carbon;

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

// Event::listen('illuminate.query',function($sql){
//     var_dump($sql);
//     echo ('<br><br><br>');
// });


Route::get('test', 'UserController@test' );

Route::get('/', function()
{
	//return View::make('hello');
   return Carbon::now();
});
