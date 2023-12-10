<?php

use App\Http\Controllers\Admin\SupportController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\SiteController;

Route::get('/supports', [SupportController::class, 'index'])->name('suppors.index');

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
