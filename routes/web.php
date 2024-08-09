<?php
use App\Models\Actor;
use App\Http\Controllers\ActorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'actors/trash/{id}',
    [ActorController::class, 'trash']
    )->name('actors.trash');

Route::get(
    'actors/trashed/',
    [ActorController::class, 'trashed']
    )->name('actors.trashed');

Route::get(
    'actors/restore/{id}',
    [ActorController::class, 'trash']
    )->name('actors.restore');

Route::resource('actors', ActorController::class);