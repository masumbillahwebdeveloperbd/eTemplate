<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                    DB::table('products')->insert(  [
            'name' => 'Pareena 2',
            
            'slug' => Str::slug('Pareena 2', '-'),
            'quantity'=>20,
            'purchase_price'=>3000,
            'sell_price'=>3500,
            'short_description'=>'Short Description Here...',
            'long_description'=>'Long Description Here...',
            're_order_level'=>5,
            'publication_status'=>1,
            'category_id'=>7,
            'menufacture_id'=>2,
            'supplier_id'=>1
          
        ]
      );
             DB::table('products')->insert(  [
            'name' => 'Full Sleeve',
            
            'slug' => Str::slug('Full Sleeve', '-'),
            'quantity'=>20,
            'purchase_price'=>2300,
            'sell_price'=>2900,
            'short_description'=>'Short Description Here...',
            'long_description'=>'Long Description Here...',
            're_order_level'=>5,
            'publication_status'=>1,
            'category_id'=>6,
            'menufacture_id'=>4,
            'supplier_id'=>2
          
        ]
      );
                       DB::table('products')->insert(  [
            'name' => 'Samsung S10',
            'slug' => Str::slug('Samsung S10', '-'),
            'quantity'=>30,
            'purchase_price'=>50000,
            'sell_price'=>55000,
            'short_description'=>'Short Description Here...',
            'long_description'=>'Long Description Here...',
            're_order_level'=>5,
            'publication_status'=>1,
            'category_id'=>8,
            'menufacture_id'=>1,
            'supplier_id'=>2
          
        ]
      );
             DB::table('products')->insert(  [
            'name' => 'Samsung S8',
            'slug' => Str::slug('Samsung S8', '-'),
            'quantity'=>30,
            'purchase_price'=>35000,
            'sell_price'=>40000,
            'short_description'=>'Short Description Here...',
            'long_description'=>'Long Description Here...',
            're_order_level'=>5,
            'publication_status'=>1,
            'category_id'=>8,
            'menufacture_id'=>1,
            'supplier_id'=>2
          
        ]
      );
         
    }
}

