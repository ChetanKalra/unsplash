<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::create([
        //     'name' => 'Category 1',
        // ]);

        // Category::create([
        //     'name' => 'Category 2',
        // ]);

        // Category::create([
        //     'name' => 'Category 3',
        // ]);

        factory(Category::class, 100)->create();
    }
}
