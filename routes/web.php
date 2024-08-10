<?php
use App\Models\Actor;
use App\Http\Controllers\FilmController;
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
    [ActorController::class, 'restore']
    )->name('actors.restore');

Route::resource('actors', ActorController::class);

Route::get(
    'films/trash/{id}',
    [FilmController::class, 'trash']
    )->name('films.trash');

Route::get(
    'films/trashed/',
    [FilmController::class, 'trashed']
    )->name('films.trashed');

Route::get(
    'films/restore/{id}',
    [FilmController::class, 'restore']
    )->name('films.restore');

Route::resource('films', FilmController::class);