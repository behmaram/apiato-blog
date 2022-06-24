<?php

namespace App\Containers\AppSection\Blog\UI\WEB\Controllers;

use App\Containers\AppSection\Blog\Actions\FindBlogByIdAction;
use App\Containers\AppSection\Blog\UI\WEB\Requests\FindBlogByIdRequest;
use App\Ship\Parents\Controllers\WebController;

class FindBlogByIdController extends WebController
{
    public function show(FindBlogByIdRequest $request)
    {
        $blog = app(FindBlogByIdAction::class)->run($request);
        // ..
    }
}
