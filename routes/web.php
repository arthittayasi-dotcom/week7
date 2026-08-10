<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;

Route::get('/seeder', [BlogController::class, 'index'])->name('seeder');

Route::get('/', function () {
    return view("index");
});

Route::get('/welcome', function () {
    return view("welcome");
});

Route::get('/about', function () {
    return view("about");
});

Route::get('/blog', function () {
    return view("blog");
});

Route::get('/claim', function () {
    return view('claim');
});

Route::get('/seeder', function () {
    $blogs = Blog::all();
    return view('seeder', compact('blogs'));

});


Route::get('/abouts', [AdminController::class, 'abouts'])-> name('abouts');

Route::get('/blogs', [AdminController::class,'blogs'])-> name('blogs'); 

Route::get('/create', [AdminController::class,'create'])-> name('create');

Route::get('/claims', [AdminController::class,'claims'])-> name('claims');

Route::get('/seeder', [BlogController::class, 'index'])->name('seeder');