<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('/users')->group(function () {
    Route::get('/', ['uses' => 'BigUserController@get']);
        // UserController - назварие будущего контроллера
        // get - назварие будущего метода (получить список всех юзеров)
    Route::get('/{user_name}', ['uses' => 'BigUserController@detail']);//(получить одного по id)
    Route::post('/', ['uses' => 'BigUserController@create']);
    Route::delete('/{user_id}', ['uses' => 'BigUserController@delete'])->where(['user_id'=>'[0-9+]']);
    Route::put('/{user_id}', ['uses' => 'BigUserController@update'])->where(['user_id'=>'[0-9+]']);
});