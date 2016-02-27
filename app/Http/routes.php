<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/{id}', function ($id) {
	$user = App\users::find($id);
	echo $user->name; 
});

Route::get('hello/{name}', function ($name) {
    echo "Hello ". $name . "!!!";
});

Route::get('user_name', function () {
	$user = App\users::where('name', '=', 'Ming')->first();
	echo $user->email; 
});

Route::get('test', function () {
	echo '<form action="test" method="POST">';
	echo '<input type="submit" value="submit">';
	echo '<input type="hidden" name="_token" value="' . csrf_token()  .    '">';
	echo '<input type="hidden" name="_method" value="PUT">';
	echo '</form>';
});

Route::post('test', function () {
    echo "post.";
});

Route::put('test', function () {
    echo "put.";
});

Route::delete('test', function () {
    echo "delete.";
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
