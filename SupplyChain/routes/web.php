<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use DB;
use  App\Models\users;

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

Route::get('/add-subitem',AdminController::class .'@add_sub_item');

Route::get('/add-stock',AdminController::class .'@add_stock');

Route::get('/add-rate',AdminController::class .'@add_rate');

// Route::get('/insert', function(){


//     DB::insert('insert into users (name, email, password) values (?,?,?)', ['Saad','abc2@gmail.com','12pass34']);


// });

// Route::get('/select', function(){


//     $result=DB::select('select * from users where id= ?',[1]);
//     return $result;


// });

// Route::get('/update',function(){

//     $updated= DB::update('update users set name="Saad" where id=?',[1]);
//     return $updated;


// });

// Route::get('/del',function(){

//     $delt=DB::delete('delete from users where id=?',[1]);
//     return $delt;

// });

// Route::get('/find', function(){

//     $users = users::all();
//     return $users;


// });

// Route::get('/find', function(){


//     $users=users::find(3);
//     return $users->name;


// });

// Route::get('/findwhere',function(){


//     $users=users::where('id',3)->orderBy('id','desc')->take(1)->get();

//     return $users;


// });


// Route::get('/findmore',function(){


//     // $users=users::findOrFail(1);

//     $users=users::where('id','<',5)->firstOrFail();



//     return $users;



// });


// Route::get('/insert',function(){

//     $users = new users; // Add new row

//     $users->name="user02";
//     $users->email="user03@gmail.com";
//     $users->password="1234";

//     $users->save();



// });


// Route::get('/update',function(){

//     $users = users::findOrFail(3); // Update existing row

//     //$users->name="user02";
//     $users->email="user01@gmail.com";
//     $users->password="1234";

//     $users->save();



// });


// Route::get('/create',function(){  //// allow mass assignment using $fillable in model class before using this

//     users::create(['name'=>'user05', 'email'=>'user05@gmail.com', 'password'=>'12\'34']);  ///// use \ to escape '


    
// });


// Route::get('/update',function(){

//     return users::where('name','user02')->where('id',4)->update(['password'=>'1234','email'=>'user02@gmail.com']);
    
// });


Route::get('/del',function(){

   
    
});