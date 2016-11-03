<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CategoryTest extends TestCase
{
    public function testWeSeeAListOfCategory()
    {
        factory(App\Category::class)->create([
            'name' => 'Movies',
        ]);
        $this->visit('/category')->see('Movies');
    }
}
