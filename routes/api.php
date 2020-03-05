<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group(function () {
    Route::apiResource('contacts', 'ContactController');
});

// Route::get('contacts', 'ContactController@index');
// Route::get('contacts/{contact}', 'ContactController@show');
// Route::delete('contacts/{contact}', 'ContactController@destroy');
// Route::post('contacts', 'ContactController@store');
// Route::patch('contacts/{contact}', 'ContactController@update');
Route::get('birthdays', 'BirthdayController@index');