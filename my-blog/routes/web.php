<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


// Статические страницы
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Динамический маршрут с параметром
Route::get('/post/{slug}', function ($slug) {
    return view('pages.post', ['slug' => $slug]);
})->where('slug', '[a-z0-9-]+');

Route::get('/post/{slug}', [PageController::class, 'showPost'])->name('post.show');
