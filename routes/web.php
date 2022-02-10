<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

// Route::get('/acerca de', function () {
//     return 'Hola mundo';
// });

// Route::get('/hola/{nombre?}', function ($nombre = 'Desconocido') {
//     return 'Hola: $nombre conocenos: <a href="'.route('nosotros').'>Nosotros</a>';
// });

// Route::get('/sobre-nosotros-en-la-web}', function () {
//     return '<h1>Toda la información sobre nosotros!</h1>';
// })->name("nosotros");

// Route::get('home/{nombre?}/{apellido?}', function ($nombre = 'Carlos', $apellido = '') {

//     $posts = ["Posts1", "Posts2", "Posts3", "Posts4", "Posts5"];
//     $posts2 = [];

//     return view('home', ['nombre' => $nombre, 'apellido' => $apellido]);
// })->name("home");

// Route::get('post', [App\Http\Controllers\dashboard\PostController, 'index']);

Route::resource('dashboard/post', App\Http\Controllers\dashboard\PostController::class);
Route::post('dashboard/post/{post}/image', 'App\Http\Controllers\dashboard\PostController@image' )->name('post.image');

Route::resource('dashboard/category', App\Http\Controllers\dashboard\CategoryController::class);

Route::resource('dashboard/user', App\Http\Controllers\dashboard\UserController::class);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

