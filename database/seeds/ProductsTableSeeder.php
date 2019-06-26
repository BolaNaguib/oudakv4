<?php
use App\Product;
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
          'slug' => 'product-slug2',
          'details' => 'product detail',
          'price' => 24999,
          'description' => 'this is description',
          // 'category_id'
        ]);


        Product::create([
          'name' => 'Product three',
          'slug' => 'product-slug3',
          'details' => 'product detail',
          'price' => 24999,
          'description' => 'this is description',
          // 'category_id'
        ]);
    }
}
