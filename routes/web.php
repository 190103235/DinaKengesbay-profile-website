<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\post;
use App\Models\Client;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|uuu it is comment
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
}); 

Route::get('/projects', function() {
    return view('projects');
}); 

Route::get('/main', function() {
    return view('main');
}); 

Route::get('/services', function() {
    return view('services');
}); 

Route::get('/contact', function() {
    return view('contact');
}); 

Route::get('/post/create', function () {
    DB::table('posts')->insert([
        'title' => 'hobby',
        'body' => 'my hobby is reading books'
    ]);
});

Route::get('/post', function () {
    $post = post::find(1);
    return $post; 
});

Route::get('/blog/index', [BlogController::class, 'index']);

Route::get('/blog/create', function(){
    return view('create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-post');

Route::get('post/{id}', [BlogController::class, 'get_post']);

Route::get('/client/index', [ClientController::class, 'index']);

Route::get('/client/create', function(){
    return view('create');
});

Route::post('client/create', [ClientController::class, 'store'])->name('add-client');

// lab-9
Route::get('/about/{lang}', function($lang){
    App::setlocale($lang);
    return view('about');
});
Route::get('/projects/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('projects');
});

Route::get('/main/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('main');
});

Route::get('/services/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('services');
});

Route::get('/contact/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('contact');
});