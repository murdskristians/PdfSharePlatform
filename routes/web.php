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
Auth::routes();
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('home');
    });

    Route::resource('file', 'FileController', ['only' => ['show','create', 'store', 'destroy']]);
    Route::resource('directory', 'DirectoryController');
    Route::resource('document', 'EditController', ['only' => ['edit', 'store']]);
  
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/document', function (){
        return redirect('/directory');
    });

    //Faila iegūšana un redirectēšana
    Route::get('file/download/{filename}', 'StorageController@getFile')->where('filename', '^[^/]+$');
    Route::get('file/open/{filename}', 'StorageController@openFile')->where('filename', '^[^/]+$');
    Route::get('file/{filename}', function() {
        return redirect('/');
    });
    Route::resource('profile', 'ProfileController', ['only' => ['show', 'edit', 'store']]);
    Route::resource('comment', 'CommentController', ['only' => ['store', 'update']]);
});


Auth::routes();

Route::get('/logout', function (){
    return view('home');
});


//Adminu routes
Route::group(['middleware' => 'admin'], function () {
    Route::resource('admin', 'AdminController', ['except' => ['reportedIndex']]);
    Route::resource('profile', 'ProfileController', ['only' => ['index']]);
    Route::get('/editapprove/{id}', 'AdminController@approveEdit');
    Route::get('/fileapprove/{id}', 'AdminController@approveFile');
    Route::get('/approved/edit/{id}', 'AdminController@changeFile');
    Route::get('/declined/edit/{id}', 'AdminController@removeEdit');
    Route::get('/approved/file/{id}', 'AdminController@acceptFile');
    Route::get('/declined/file/{id}', 'AdminController@removeFile');
    Route::get('/reported', 'AdminController@reportedIndex');
    Route::get('/approve/comment/{id}', 'AdminController@approveComment');
    Route::get('/destroy/comment/{id}', 'AdminController@destroyComment');
});
