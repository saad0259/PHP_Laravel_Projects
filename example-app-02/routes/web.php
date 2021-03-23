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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post/{id}',PostController::class .'@index');

Route::resource('posts',PostController::class);

Route::get('/about',PostController::class .'@About');
Route::get('post/{id}/{name}/{pass}',PostController::class .'@show_post');



// Route::get('/about', function () {
//     return "Welcome to Aout Us Page";
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "This is post number ".$id." ".$name;
// });

// Route::get('/admin/posts/singlepost', array('as'=>'admin.home',function(){

//     $url=route('admin.home');
//     return "The Url is ".$url;


// }));
