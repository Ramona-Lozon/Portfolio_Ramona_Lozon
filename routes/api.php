<?php

use App\Http\Controllers\CaseFileController;

Route::get('/case-files', [CaseFileController::class, 'index']);
Route::get('/case-files/{id}', [MediaController::class, 'detail']);