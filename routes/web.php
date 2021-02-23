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


 /*
 |---------------------------------------------------------------------------
 |Test Route 
 |---------------------------------------------------------------------------
 */

// Available Routes
// Route::get('uri','callback'); 
// Route::post('uri','callback'); 
// Route::delete('uri','callback'); 
// Route::put('uri','callback'); 
// Route::patch('uri','callback'); 
// Route::options('uri','callback'); 


Route::any('/', function(){
	// Write your route or code here 
});

Route::match(['get','post'],'/',function(){
	// Write your route or code here  
}); 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testroute',function() {
	echo "This is route test";
});

Route::get('/here',function() {
	echo "This is here test";
});

Route::get('/there',function() {
	echo "This is there test";
});


Route::get('/hello','TestController@abc');
Route::get('/showData','TestController@show');
Route::get('/edit/{id}','TestController@edit');


Route::post('/storevalues','TestController@store');

// Route::get('user/profile', function(){

// })->name('profile');

// Route::namespace('Admin')->group(function(){
// 	// Controllers Within The "App\Http\Controllers\Admin" Namespace 
// )}; 





// Route::redirect('/here','/there');
// Route::get('/test','UserController@index');

// Route::view('/welcome', 'welcome', ['namehttps://images.prothomalo.com/prothomalo-bangla%2F2021-02%2F80cd902c-8054-4639-b900-60251ff5c329%2FBNP.JPG?auto=format%2Ccompress&format=webp&w=720&dpr=1.0' => 'Primetech']);


 /*
 |---------------------------------------------------------------------------
 |Project Route 
 |---------------------------------------------------------------------------
 */





// https://laravel.com/docs/6.x/routing Date : 11-02-2021   Date: 07:26 PM