<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
          'name' => 'Product one',
          'slug' => 'product-slug',
          'details' => 'product detail',
          'price' => 24999,
          'description' => 'this is description',
          // 'category_id'
        ]);

        Product::create([
          'name' => 'Product two',
          'slug' => 'product-slug',
          'details' => 'product detail',
          'price' => 24999,
          'description' => 'this is description',
          // 'category_id'
        ]);


        Product::create([
          'name' => 'Product three',
          'slug' => 'product-slug',
          'details' => 'product detail',
          'price' => 24999,
          'description' => 'this is description',
          // 'category_id'
        ]);
    }
}
