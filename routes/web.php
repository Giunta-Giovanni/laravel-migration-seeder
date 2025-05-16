<?php

use App\Http\Controllers\Guest\TrainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TrainController::class, 'index']);
Route::get('/departure', [TrainController::class, 'indexdeparture']);
Route::get('/arrival', [TrainController::class, 'indexarrival']);
