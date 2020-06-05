<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              DB::table('cities')->insert(  [
            'name' => 'Dhaka',
            'country_id'=>1,
            'created_at'=>now()
        ]
      

    );
             DB::table('cities')->insert(  [
            'name' => 'Khulna',
            'country_id'=>1,
            'created_at'=>now()
        ]
    );
                      DB::table('cities')->insert(  [
            'name' => 'New York',
            'country_id'=>2,
            'created_at'=>now()
        ]
    );
                              DB::table('cities')->insert(  [
            'name' => 'Florida',
            'country_id'=>2,
            'created_at'=>now()
        ]
    );
                               DB::table('cities')->insert(  [
            'name' => 'Toronto',
            'country_id'=>3,
            'created_at'=>now()
        ]
    );
             DB::table('cities')->insert(  [
            'name' => 'Manitova',
            'country_id'=>3,
            'created_at'=>now()
        ]
    );
                 DB::table('cities')->insert(  [
            'name' => 'Madina',
            'country_id'=>4,
            'created_at'=>now()
        ]
    );
             DB::table('cities')->insert(  [
            'name' => 'Riyad',
            'country_id'=>4,
            'created_at'=>now()
        ]
    );
      
    }
}
