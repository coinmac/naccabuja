<?php
use App\Post;
use App\Profile;
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
    $posts = Post::orderBy('created_at','desc')->paginate(5);
    return view('welcome',['posts'=>$posts]);
});
Route::get('/about', function () {
    $posts = Post::orderBy('created_at','desc')->paginate(5);
    return view('about',['posts'=>$posts]);
});

Route::get('/contact', function () {
    $posts = Post::orderBy('created_at','desc')->paginate(5);
    return view('contact',['posts'=>$posts]);
});

Route::get('/events', function () {
    $posts = Post::where('category','News')->paginate(5);
    $events = Post::where('category','Events')->paginate(10);
    return view('events',['posts'=>$posts,'events'=>$events]);
});

Route::get('/membership', function () {
    $posts = Post::orderBy('created_at','desc')->paginate(5);
    return view('membership',['posts'=>$posts]);
});
Route::get('/edit_profile', function (){
    $profiles = Profile::where('id',auth()->user()->id)->get();
    return view('edit_profile',['profiles'=>$profiles]);
});

Auth::routes(['verify' => true]);
Route::resource('posts', 'PostController');
Route::resource('profile','ProfileController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/updatepassport', 'ProfileController@updatepassport');