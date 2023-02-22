<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(CourseController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/courses', 'store')->name('store');
    Route::get('/courses/create_course', 'create_course')->name('create_course');
    Route::get('/courses/{course}', 'course_detail')->name('course_detail');
    Route::delete('/courses/{course}', 'delete_course')->name('delete_course');
});

Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::post('/posts', 'store')->name('store');
    Route::get('/posts/create_menu', 'create_menu')->name('create_menu');
    Route::get('/posts/{post}', 'menu_detail')->name('menu_detail');
    Route::get('/posts/', 'show')->name('show');
    Route::put('/posts/{post}', 'update_menu')->name('update_menu');
    Route::delete('/posts/{post}', 'delete_menu')->name('delete_menu');
});

Route::controller(MenuController::class)->middleware(['auth'])->group(function(){
    Route::get('/menus/{menu}', 'menu_detail')->name('menu_detail');
});
Route::controller(CommentController::class)->middleware(['auth'])->group(function(){
    Route::post('/comments', 'store')->name('store');
    Route::get('/comments/create_comment', 'create_comment')->name('create_comment');
    Route::delete('/comments/{comment}', 'delete_comment')->name('delete_comment');
});
Route::controller(StatisticController::class)->middleware(['auth'])->group(function(){
    Route::get('/statistic/{id}', 'statistic')->name('statistic');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
