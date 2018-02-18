<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {
	$properties = App\Property::take(3)->get();
	// $url = "http://hostelvault.dev:8081/";
   $props = App\Property::take(8)->inRandomOrder()->get();

    return view('welcome',compact('properties','props'));
});

Route::get('/about', function () {
    
    return view('about');
})->name('about');

Route::get('/policies', function () {
    
    return view('policy');
})->name('policy');

Route::get('/feedback', function () {
    
    return view('feedback');
})->name('feedback');

Route::get('/sitemap', function () {
    
    return view('sitemap');
})->name('sitemap');

Route::get('/roommates', function () {
    
    return view('looking');
})->name('looking');




Auth::routes();

Route::resource('/search','SearchController');

Route::get('/find/rooms/{room}',array('as'=>'find.rooms','uses'=>'SearchzController@searchrooms'));

Route::get('/find/hostels/{hostel}',array('as'=>'find.hostels','uses'=>'SearchzController@searchhostels'));


Route::resource('/display', 'DisplayController');
Route::resource('/hostel', 'HostelController');


Route::group(['middleware'=>'auth'],function(){
	Route::get('/home', 'HomeController@index');
	Route::resource('/user','UserController');
	Route::resource('/property','PropertyController');
	Route::resource('/room','RoomController');
	Route::resource('/profile','ProfileController');
	Route::resource('/agent','AgentController');

});