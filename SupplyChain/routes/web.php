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
//Route::resource('admin',AdminController::class);

Route::get('/','DealerController@index'); //Route::get('/','AdminController@dashboard');



Route::get('/dashboard','AdminController@dashboard');



Route::group(['middleware'=>'web'],function(){

    Route::resource('/dealer','DealerController');


});


Route::group(['middleware'=>'web'],function(){

    Route::resource('/user','UserController');


});


Route::group(['middleware'=>'web'],function(){

    Route::resource('/item','ItemController');


});


Route::group(['middleware'=>'web'],function(){

    Route::resource('/subitem','SubitemController');


});

Route::group(['middleware'=>'web'],function(){

    Route::resource('/unit','UnitController');


});

Route::group(['middleware'=>'web'],function(){

    Route::resource('/stock','StockController');


});








// Route::get('/add-dealer','AdminController@add_dealer');

// Route::get('/add-item','AdminController@add_item');

// Route::get('/add-subitem','AdminController@add_sub_item');

// Route::get('/add-stock','AdminController@add_stock');

// Route::get('/add-rate','AdminController@add_rate');

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

//     users::create(['name'=>'user10', 'email'=>'user10@gmail.com', 'password'=>'12\'34']);  ///// use \ to escape '


    
// });


// Route::get('/update',function(){

//     return users::where('name','user02')->where('id',4)->update(['password'=>'1234','email'=>'user02@gmail.com']);
    
// });


// Route::get('/del',function(){

//     $user=users::find(3);
//     $user->delete();

//     users::destroy(4);      //delete a single row
//     users::destroy([4,5]);  //delete multiple rows
    
// });


// added a migration with (artisan make:migration add_delted_at_column_to_users_table --table=users) for soft delete operations


// Route::get('/softdel',function(){

//     users::find(9)->delete(); // if using soft_delete, data will not be deleted. Current timestamp will be added at 'deleted_at' and data won't be fetched using table::all();
// });

// Route::get('/readdelt',function(){

//     //return users::withTrashed()->where('id',5)->get();  /////get trashed row with id=5

//     return users::onlyTrashed()->get();   /////Get all trashed rows


// });

// Route::get('/restore',function(){



//     return users::onlyTrashed()->restore();// restore all trashed records  


// });

// Route::get('/forcedelete',function(){

//     // users::onlyTrashed()->forceDelete();
//     // users::withTrashed()->where('id',10)->forceDelete();

// });




///////////////////////////////////Eloquent Relationships

// One to one relation
// Route::get('/subitem/{item}',function($item){

//     return Item::find($item)->subitem->name; // One to one relation. go to functions subitem in model Item and fetch name property of the function output.


// });


//Inverse Realtion

// Route::get('subitem/item/{subitem}',function($subitem){

//     return Subitem::find($subitem)->Item->Name;// Gets item Name from items_table where the given subitem belongs to.
// });



//One to many relation

// Route::get('/subitems',function(){

//     $item=Item::find(1);
//     $data='';
//     foreach($item->subitems as $row){

//         echo $row->name."<br>";
        
//     }
//     //return $data;

    

// });


// CRUD in one to many relation
// Route::get('/insertsub',function(){

//     $item=Item::findOrFail(2);
//     $sub= new Subitem(['name'=>'Chonsa','grade'=>'1']);
//     $item->subitems()->save($sub);

// });

// Route::get('/getsubs',function(){

//     $item=Item::findOrFail(2);
//      dd($item->subitems);
// });

// Route::get('/date',function(){ //Use Cabon\Carbon at the top first.

//     // $userTimezone = 'Asia/Karachi';
//     // //echo Carbon::now()->addDays(10)->diffForHumans();
//     // echo Carbon::parse(Carbon::now());

//     // //$date = Carbon::createFromFormat('Y-m-d H:i:s', $timestamp, 'Europe/Stockholm');


//     // echo "<br>";
//     // echo Carbon::now()->setTimezone($userTimezone);

// });

////////////Accessors/getters

// Route::get('/getname',function(){


//     $dealer=Dealer::findOrFail(1);

//     echo $dealer;


// });



// ////////////Mutators/setters

// Route::get('/setname',function(){


//     $dealer=Dealer::findOrFail(1);

//     $dealer->name="abc shop";

//     $dealer->save();


// });












