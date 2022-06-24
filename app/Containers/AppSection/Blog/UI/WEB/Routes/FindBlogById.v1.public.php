<?php

use App\Containers\AppSection\Blog\UI\WEB\Controllers\FindBlogByIdController;
use Illuminate\Support\Facades\Route;

Route::get('blog/{id}', [FindBlogByIdController::class, 'show'])
    ->middleware(['auth:web']);

