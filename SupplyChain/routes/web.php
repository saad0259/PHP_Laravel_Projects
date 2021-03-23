<?php
namespace App\Http\Controllers;
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
//Route::resource('admin',AdminController::class);

Route::get('/',AdminController::class .'@dashboard');
Route::get('/dashboard',AdminController::class .'@dashboard');



Route::get('/add-dealer',AdminController::class .'@add_dealer');

Route::get('/add-item',AdminController::class .'@add_item');






