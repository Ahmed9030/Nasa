<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\postsController;
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

Route::get('/', function () {
    return view('index');
});


/**
 * ================================
 * Routeing the webbsite for users
 * ================================
 */
// posts routeing
Route::get('/', [postsController::class , 'index']);
// show post
Route::get('/{post}/post' ,[postsController::class , 'show'])->name("post.show");

// antarctica post page
Route::get('/antarctica' , function(){ return view('Antarctica'); })->name("antar");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
