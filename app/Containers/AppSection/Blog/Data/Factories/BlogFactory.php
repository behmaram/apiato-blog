<?php

namespace App\Containers\AppSection\Blog\Data\Factories;

use App\Containers\AppSection\Blog\Models\Blog;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class BlogFactory extends ParentFactory
{
    protected $model = Blog::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
