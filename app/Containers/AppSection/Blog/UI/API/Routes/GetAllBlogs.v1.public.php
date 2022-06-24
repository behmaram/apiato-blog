<?php

/**
 * @apiGroup           Blog
 * @apiName            GetAllBlogs
 *
 * @api                {GET} /v1/blog Get All Blogs
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

use App\Containers\AppSection\Blog\UI\API\Controllers\GetAllBlogsController;
use Illuminate\Support\Facades\Route;

Route::get('blog', [GetAllBlogsController::class, 'getAllBlogs'])
    ->middleware(['auth:api']);

