<?php

/**
 * @apiGroup           Blog
 * @apiName            CreateBlog
 *
 * @api                {POST} /v1/blog Create Blog
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

use App\Containers\AppSection\Blog\UI\API\Controllers\CreateBlogController;
use Illuminate\Support\Facades\Route;

Route::post('blog', [CreateBlogController::class, 'createBlog'])
    ->middleware(['auth:api']);

