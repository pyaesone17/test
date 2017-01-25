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

Route::get('/', function () {
    $posts = App\Post::all();
    return view('welcome')->with('posts',$posts);
});

Route::get('/create', function () {
    return view('form');
});

Route::post('/', function () {
    $posts =App\Post::create(Request::all());
    return redirect('/');
});
