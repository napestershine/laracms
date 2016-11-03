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

    public function testWeSeeCategoryForm()
    {
        $this->visit('/category/create')
            ->see('Create a category');
    }

    public function testCategoryFormValidation()
    {
        $this->visit('/category/create')
            ->press('Submit')
            ->see('The name field is required')
            ->see('The description field is required');
    }

    public function testSubmitCategoryToDb()
    {
        $this->visit('/category/create')
            ->type('Movies', 'name')
            ->type('My description', 'description')
            ->press('Submit')
            ->seeInDatabase('category', ['name' => 'Movies']);
    }
}
