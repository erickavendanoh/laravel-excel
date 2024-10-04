<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario_import', [UsuarioController::class, 'import']);
Route::get('/usuario_export', [UsuarioController::class, 'export']);
