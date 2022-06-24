<?php

namespace App\Containers\AppSection\Blog\UI\WEB\Controllers;

use App\Containers\AppSection\Blog\Actions\GetAllBlogsAction;
use App\Containers\AppSection\Blog\Models\Blog;
use App\Containers\AppSection\Blog\UI\WEB\Requests\GetAllBlogsRequest;
use App\Ship\Parents\Controllers\WebController;

class GetAllBlogsController extends WebController
{
    public function index(GetAllBlogsRequest $request)
    {
//        return view(app);
//        $blogs = app(GetAllBlogsAction::class)->run($request);
        // ..
    }
}
