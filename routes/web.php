<?php

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
    echo "Làm quen với router trong laravel";
    //return view('welcome');
});

// tạo ra 1 router mới trở về view demo1
Route::get('/demo1', function () {
    return view('demo1');
});


// tạo ra 1 router mới
Route::get('/demo2', function() {
    return view('demo2');
});

// tạo ra 1 router mới
Route::get('/demo3', function() {
    return view('demo3');
});

// tạo ra 1 router mới trả về sub folder
Route::get('/test1', function() {
   return view('subviewtest/test1');
});

// tạo ra 1 router mới để gọi vào controller
Route::get('/controller1', 'Demo1Controller@index');


// tạo ra 4 route cho phần thực đơn đồ ăn
Route::get('/food', 'FoodController@index');
Route::get('/food/create', 'FoodController@create');
// tạo ra 1 biến {id} ở trên url
Route::get('/food/edit/{id}', 'FoodController@edit');
// tạo ra 1 biến trên url bằng cú pháp {}
Route::get('/food/delete/{id}', 'FoodController@delete');


// tạo router mới
Route::get('/demo5', 'FoodController@demo5');
