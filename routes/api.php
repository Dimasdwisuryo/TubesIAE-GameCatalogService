<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/games', [GameController::class, 'index']);

Route::get('/games/{slug}', [GameController::class, 'show']);
