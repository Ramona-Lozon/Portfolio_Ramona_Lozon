<?php

use App\Http\Controllers\CaseFileController;
use App\Http\Controllers\MediaController;

Route::get('/case-file', [CaseFileController::class, 'index']);
Route::get('/media', [MediaController::class, 'index']);