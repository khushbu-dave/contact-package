<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Biztech\Contact\Http\Controllers\ContactController;

Route::get('contact',[ContactController::class,'index'])->name('contact');

Route::post('save-contact',[ContactController::class,'send'])->name('save-contact');
