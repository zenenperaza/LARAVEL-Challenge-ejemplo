<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/',            [PageController::class, 'blog'])->name('blog');
Route::get('/{post:slug}', [PageController::class, 'post'])->name('post');
