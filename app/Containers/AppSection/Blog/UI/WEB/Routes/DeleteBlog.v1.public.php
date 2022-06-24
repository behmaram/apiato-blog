<?php

use App\Containers\AppSection\Blog\UI\WEB\Controllers\DeleteBlogController;
use Illuminate\Support\Facades\Route;

Route::delete('blog/{id}', [DeleteBlogController::class, 'destroy'])
    ->middleware(['auth:web']);

