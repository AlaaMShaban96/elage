<?php

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
    return view('business.login');
});
Route::get('user/', "Controller@login");
Route::get('business/', "Controller@business_veiw");
Route::get('login/business', "Controller@login_business");