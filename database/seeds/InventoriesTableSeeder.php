<?php

use Illuminate\Database\Seeder;

class InventoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('inventories')->insert(  [
            'product_id'=>1,
            'quantity'=>20,
            'purchase_price'=>30000,
            'purchasedate'=>date_create("2019-12-25")
       
        ]
      );
                
             DB::table('inventories')->insert(  [
            'product_id'=>2,
            'quantity'=>30,
            'purchase_price'=>50000,
            'purchasedate'=>date_create("2019-12-15")
       
        ]
      );
    }
}

 