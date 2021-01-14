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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route untuk Admin
// Route::get('/admin/dashboard', 'App\Http\Controllers\Admin\DashboardController@index');

Route::group(['namespace'=>'App\Http\Controllers\Admin', 'prefix'=>'admin'], function()
{
    Route::resource('/dashboard', 'DashboardController')->only(['index']);
});

