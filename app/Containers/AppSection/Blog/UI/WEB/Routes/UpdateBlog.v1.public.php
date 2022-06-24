<?php

use App\Containers\AppSection\Blog\UI\WEB\Controllers\UpdateBlogController;
use Illuminate\Support\Facades\Route;

Route::patch('blog/{id}', [UpdateBlogController::class, 'update'])
    ->middleware(['auth:web']);

