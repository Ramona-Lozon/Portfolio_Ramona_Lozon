<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaseFileController;
use App\Http\Controllers\MediaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [CaseFileController::class, 'list'])->name('home');

Route::get('/about', function () {return view('about');})->name('about');
Route::get('/work', function () {return view('work');})->name('work');
Route::get('/case-files', [CaseFileController::class, 'index']);
Route::get('/case-file/{id}', [CaseFileController::class, 'show'])->name('case-file.show');
Route::get('/case-files/{id}', [CaseFileController::class, 'detail']);
Route::get('/contact', function () {return view('contact');})->name('contact');


// Route::get('/home', function () {
// return view('home');
// })->name('home');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/work', function () {
//     return view('work');
// })->name('work');

// Route::get('/case_file', function () {
//     return view('case_file');
// })->name('case_file');

// Route::get('/case-file', [CaseFileController::class, 'show']);
// Route::get('/media', [MediaController::class, 'show']);

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');