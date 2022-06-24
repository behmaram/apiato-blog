<?php

use App\Containers\AppSection\Blog\UI\WEB\Controllers\UpdateBlogController;
use Illuminate\Support\Facades\Route;

Route::get('blog/{id}/edit', [UpdateBlogController::class, 'edit'])
    ->middleware(['auth:web']);

