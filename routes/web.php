<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'parry';
    });
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
    });

Route::get('/about', function () {
    return '2141762106 M Farry Izza F';
    });        
Route::get('/', function () {
   return view ('welcome');
    });

Route::get('/posts/{post}/comments/{comment}', function
    ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
    
Route::get('/user1/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
    });

Route::get('/user2/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });
    
    Route::get('/hello', [WelcomeController::class,'hello']);

    use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
    ]);
    Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
    ]);