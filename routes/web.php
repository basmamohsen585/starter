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

//Route::get('/test2', function () {
   // return view ('welcome');
//});
Route::get('/welcome',function (){
     
    return view(view: 'layouts/welcome');
  });
 
/*Route::get('/test1', function () {
+   // return "welcome";
});*/

//rout paramters

//requied
Route::get('/test2/{id}', function ($id) {
    return  $id;
});

//optional

Route::get('/test3/{id?}', function () {
    return "zozo";
});     // to make naming of rout


//route name

Route::namespace('Front')->group(function(){

    
        Route::get('users','UserController@showUserName');

});



//Route::get('second',"Admin\Secondcontroller@showString");

//route-resource

Route::resource('news','NewsController');

//view
Route::get('/',function (){
    
});

Route::get('index','Front\UserController@getIndex');

 Route::get('/landing',function (){
     
   return view(view: 'landing');
 });


Auth::routes(['verify'=> true]);

Route::get('/home', 'HomeController@index')->name('home') ->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function(){

  return 'home';
});

