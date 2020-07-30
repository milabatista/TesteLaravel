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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('restaurants', 'Api\RestaurantController');
Route::get('menus/{id}', function($id){
    return App::call('App\Http\Controllers\api\MenusController@findByRestaurantId', ['id'=>$id]);
});
Route::middleware('auth:api')->group(function(){
    route::post('restaurants', 'Api\RestaurantController@store');
});
//Pq ele criou um grupo de rotas??
//passa o cors, para habilita-lo -- Angular conecction

//composer require barryvdh/laravel-cors
//php artisan vendor:publish --provider="Barryvdh\Cors\ServiceProvider"
Route::group(['middleware'=>['api', 'cors']], function(){
    Route::post('auth/register', 'Auth\ApiRegisterController@register');
});

Route::group(['middleware'=>['api', 'cors']], function(){
    Route::post('order', 'Api\OrderController@store');
});

    