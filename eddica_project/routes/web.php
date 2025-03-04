<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bodycompoction\bodyCampoctionController;
use App\Http\Controllers\dashboard\dashboardController;

Route::get('/', [dashboardController::class, 'dashboardIndex'])->name('dashboard.index');
Route::get('/bodycompoction', [bodyCampoctionController::class, 'bodyCompoction'])->name('body.compoction');