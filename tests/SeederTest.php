<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SeederTest extends TestCase
{
    public function testCategoriesTable()
    {
        factory(App\Category::class)->create([
            'name' => 'Movies',
        ]);
        $this->seeInDatabase('category', ['name'=> 'Movies']);
    }

    public function testPostsTable()
    {
        factory(App\Post::class)->create([
            'title' => 'Movies',
        ]);
        $this->seeInDatabase('posts', ['title'=> 'Movies']);
    }
}
