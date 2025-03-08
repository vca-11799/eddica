<?php

use App\Http\Controllers\maincontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bodycompoction\bodyCampoctionController;
use App\Http\Controllers\dashboard\dashboardController;

Route::get('/', [dashboardController::class, 'dashboardIndex'])->name('dashboard.index');
Route::get('/bodycompoctionMaster', [bodyCampoctionController::class, 'bodyCompoctionMaster'])->name('body.compoction.master');
Route::get('/addbodycompoction', [bodyCampoctionController::class, 'addbodyCompoction'])->name('add.body.compoction');