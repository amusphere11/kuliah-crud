<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return redirect()->route('siswas.index');
});

Route::resource('siswas', SiswaController::class);
