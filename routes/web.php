<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group( function() {   
    
    Route::get('users',                   [UserController::class, 'index'])->name('users.index');
    Route::get('users/edit/{user}',       [UserController::class, 'edit'])->name('users.edit');
    Route::get('users/password/{user}',   [UserController::class, 'editpassword'])->name('users.password');
    Route::put('users/password/{user}',    [UserController::class, 'updatepassword'])->name('users.updatepassword');
    Route::put('users/{user}',             [UserController::class, 'update'])->name('users.update');
    Route::get('pokemons',                   [PokemonController::class, 'index'])->name('pokemons.index');
    Route::get('pokemons/show/{id}',          [PokemonController::class, 'show'])->name('pokemons.show');
    Route::view('pokemon', 'pokemon.table')->name('pokemon.table');
    
});