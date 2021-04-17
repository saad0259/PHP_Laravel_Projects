<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use DB;
use  App\Models\users;
use App\Models\Dealer;
use App\Models\Item;
use App\Models\Subitem;
use Carbon\Carbon;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', 'DealerController@index')->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




Route::group(['middleware'=>'auth'],function(){

    Route::resource('/dealer','DealerController');

});


Route::group(['middleware'=>'auth'],function(){

    Route::resource('/user','UserController');


});


Route::group(['middleware'=>'auth'],function(){

    Route::resource('/item','ItemController');


});


Route::group(['middleware'=>'auth'],function(){

    Route::resource('/subitem','SubitemController');


});

Route::group(['middleware'=>'auth'],function(){

    Route::resource('/unit','UnitController');


});

Route::group(['middleware'=>'auth'],function(){

    Route::resource('/stock','StockController');


});

