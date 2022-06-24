<?php

namespace App\Containers\AppSection\Blog\UI\WEB\Controllers;

use App\Containers\AppSection\Blog\Actions\FindBlogByIdAction;
use App\Containers\AppSection\Blog\Actions\UpdateBlogAction;
use App\Containers\AppSection\Blog\UI\WEB\Requests\EditBlogRequest;
use App\Containers\AppSection\Blog\UI\WEB\Requests\UpdateBlogRequest;
use App\Ship\Parents\Controllers\WebController;

class UpdateBlogController extends WebController
{
    public function edit(EditBlogRequest $request)
    {
        $blog = app(FindBlogByIdAction::class)->run($request);
        // ..
    }

    public function update(UpdateBlogRequest $request)
    {
        $blog = app(UpdateBlogAction::class)->run($request);
        // ..
    }
}
