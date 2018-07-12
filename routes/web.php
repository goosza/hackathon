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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post',function(){
    $comments = App\Comment::get();
    return view('post',['comments' => $comments]);
});
Route::post('/post',function(Request $req){
    App\Comment::create([
        "comment"=>$req->comment,
        "user_id"=>Auth::user()->id,
    ]);
    return back();
});
Route::get('/buy',function(){
    return view('buy');
});
    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tutorials',function(){
    return view('tutorials');
});