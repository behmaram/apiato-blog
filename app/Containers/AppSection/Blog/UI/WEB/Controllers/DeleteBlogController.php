<?php

namespace App\Containers\AppSection\Blog\UI\WEB\Controllers;

use App\Containers\AppSection\Blog\Actions\DeleteBlogAction;
use App\Containers\AppSection\Blog\UI\WEB\Requests\DeleteBlogRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteBlogController extends WebController
{
    public function destroy(DeleteBlogRequest $request)
    {
         $result = app(DeleteBlogAction::class)->run($request);
         // ..
    }
}
