<?php

use App\Containers\AppSection\Blog\UI\WEB\Controllers\GetAllBlogsController;
use Illuminate\Support\Facades\Route;

Route::get('blog', [GetAllBlogsController::class, 'index']);

