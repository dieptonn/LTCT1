<?php

use App\Http\Controllers\OrderManagementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/listOrder', 'App\Http\Controllers\OrderManagementController@listOrder');
Route::get('/listOrder/{id}', 'App\Http\Controllers\OrderManagementController@listOrderById');
// Route::get('/deleteOrder/{id}', 'App\Http\Controllers\OrderManagementController@deleteOrder');
// Route::post('/store-orders', 'App\Http\Controllers\OrderManagementController@store');
// Route::get('/cholayhang', 'App\Http\Controllers\OrderManagementController@cholayhang');
// Route::get('danggiao', 'App\Http\Controllers\OrderManagementController@danggiao');
// Route::get('dahuy', 'App\Http\Controllers\OrderManagementController@dahuy');
// Route::get('dagiao', 'App\Http\Controllers\OrderManagementController@dagiao');
// Route::get('trahang', 'App\Http\Controllers\OrderManagementController@trahang');
// Route::Post('/updateState', 'App\Http\Controllers\OrderManagementController@trahang');
// Route::get('/filterByDay', 'App\Http\Controllers\OrderManagementController@dagiao');

Route::get('/order',[
    OrderManagementController::class,
    'listOrder'
]);
Route::get('/cholayhang',[
    OrderManagementController::class,
    'listOrder'
]);
Route::get('/danggiao',[
    OrderManagementController::class,
    'listOrder'
]);
Route::get('/dagiao',[
    OrderManagementController::class,
    'listOrder'
]);
Route::get('/dahuy',[
    OrderManagementController::class,
    'listOrder'
]);
Route::get('/trahang',[
    OrderManagementController::class,
    'listOrder'
]);

Route::get('/rate-comment',[
    OrderManagementController::class,
    'rateComment'
]);

Route::post('/rate-comment-update/{orderId}',[
    OrderManagementController::class,
    'rateCommentUpdate'
]);