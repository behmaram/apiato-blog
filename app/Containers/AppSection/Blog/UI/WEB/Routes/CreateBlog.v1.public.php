<?php

use App\Containers\AppSection\Blog\UI\WEB\Controllers\CreateBlogController;
use Illuminate\Support\Facades\Route;

Route::get('blog/create', [CreateBlogController::class, 'create'])
    ->middleware(['auth:web']);

