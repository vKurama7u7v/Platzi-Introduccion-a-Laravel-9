<?php
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('home', [PageController::class, 'home'])->name('home');

Route::get("blog", [PageController::class, 'blog'])->name('blog');

Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');
*/

Route::controller(PageController::class)->group(function () {
    Route::get('home', 'home')->name('home');

    Route::get("blog", 'blog')->name('blog');

    Route::get('blog/{post:slug}', 'post')->name('post');
});

Route::get('buscar', function (Request $request) {
    return $request->all();
});