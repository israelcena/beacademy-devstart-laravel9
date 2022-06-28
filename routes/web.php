<?php

use App\Http\Controllers\ViaCepController;
use Illuminate\Support\Facades\Route;

Route::controller(ViaCepController::class)->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('index-route');

    Route::get('/viacep', 'index')->name('viacep.index');
    Route::post('/viacep', 'index')->name('viacep.post');
    Route::get('/viacep/{cep}', 'show')->name('viacep.show');
});
