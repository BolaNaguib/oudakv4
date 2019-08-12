<?php

use App\SubCategory;
use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        SubCategory::create([
          'title' => 'Flores',
          'slug' => 'flores',
          // 'category_id'
        ]);
        //
        SubCategory::create([
          'title' => 'Sweet',
          'slug' => 'sweet',
          // 'category_id'
        ]);
    }
}
