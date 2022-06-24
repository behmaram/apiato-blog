<?php

/**
 * @apiGroup           Blog
 * @apiName            DeleteBlog
 *
 * @api                {DELETE} /v1/blog/:id Delete Blog
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} parameters here...
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\AppSection\Blog\UI\API\Controllers\DeleteBlogController;
use Illuminate\Support\Facades\Route;

Route::delete('blog/{id}', [DeleteBlogController::class, 'deleteBlog'])
    ->middleware(['auth:api']);

