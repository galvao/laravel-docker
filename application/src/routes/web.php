<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TesteController;

Route::get('/', function () {
    return view('home');
});

Route::get('/teste', [TesteController::class, 'testar']);
