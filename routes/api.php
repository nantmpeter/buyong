<?php

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\Users as UserCollection;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('api')->get('/test', 'HomeController@test')->name('test');

Route::resource('users','\App\Http\Controllers\API\userAPIController')->middleware('auth:api');

Route::get('/users', function () {
    return new UserCollection(User::paginate());
})->middleware('auth:api');