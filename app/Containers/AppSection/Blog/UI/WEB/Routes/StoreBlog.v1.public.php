<?php

use App\Containers\AppSection\Blog\UI\WEB\Controllers\CreateBlogController;
use Illuminate\Support\Facades\Route;

Route::post('blog/store', [CreateBlogController::class, 'store'])
    ->middleware(['auth:web']);

