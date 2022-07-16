<?php

use App\Http\Controllers\{
    UserController,
    PostController,
    TeamController,
    ViaCepController,
    WeatherController,
    HealthCheck
};
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('users.index');
    Route::post('usuarios', 'store')->name('users.store');
    Route::get('/usuarios/criar', 'create')->name('users.create');
    Route::get('/usuarios/{userEditId}/editar', 'edit')->name('users.edit');
    Route::delete('/usuarios/{id}', 'destroy')->name('users.destroy');
    Route::put('/usuarios/{id}', 'update')->name('users.update');
    Route::get('/usuarios/{id}', 'show')->name('users.show');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/{userId}', 'showOne')->name('posts.showOne');
});

Route::controller(ViaCepController::class)->group(function () {
    Route::get('/viacep', 'index')->name('viacep.index');
    Route::post('/viacep', 'index')->name('viacep.post');
    Route::get('/viacep/{cep}', 'show')->name('viacep.show');
});

Route::get('/times', [TeamController::class, 'index'])->name('teams.index');

Route::get('/weather', [WeatherController::class, 'index'])->name('weather.index');

Route::get("/health-check", [HealthCheck::class, 'healthCheck'])->name('health.check');