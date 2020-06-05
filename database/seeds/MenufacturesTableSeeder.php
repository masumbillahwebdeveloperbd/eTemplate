<?php

use Illuminate\Database\Seeder;

class MenufacturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                    DB::table('menufactures')->insert(  [
            'name' => 'Samsung Korea',
            'menufacture_description' => 'Worlwide Company',
            
            'publication_status'=>'1'
        ]
      );
              DB::table('menufactures')->insert(  [
            'name' => 'Nike',
            'menufacture_description' => 'Worlwide Company',
            
            'publication_status'=>'1'
        ]
      );
                        DB::table('menufactures')->insert(  [
            'name' => 'Vinay Fashion',
            'menufacture_description' => 'Worlwide Company',
            
            'publication_status'=>'1'
        ]
      );
            DB::table('menufactures')->insert(  [
            'name' => 'Cats Eye',
            'menufacture_description' => 'Worlwide Company',
            
            'publication_status'=>'1'
        ]
      );
              DB::table('menufactures')->insert(  [
            'name' => 'Apple',
            'menufacture_description' => 'Worlwide Company',
            
            'publication_status'=>'1'
        ]
      );
                DB::table('menufactures')->insert(  [
            'name' => 'Swiss',
            'menufacture_description' => 'Worlwide Company',
            
            'publication_status'=>'1'
        ]
      );
              DB::table('menufactures')->insert(  [
            'name' => 'Yellow',
            'menufacture_description' => 'Worlwide Company',
            
            'publication_status'=>'1'
        ]
      );
    }
}
