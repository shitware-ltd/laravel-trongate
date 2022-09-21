<?php

use Illuminate\Support\Facades\Route;

Route::get('/{trongate}', fn ($trongate) => view('trongate::trongate'))->name('trongate');
