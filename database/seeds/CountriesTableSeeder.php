<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             DB::table('countries')->insert(  [
            'name' => 'Bangladesh',
            'created_at'=>now()
        ]
      

    );
                        DB::table('countries')->insert(  [
            'name' => 'America',
            'created_at'=>now()
        ]
      

    );
                          DB::table('countries')->insert(  [
            'name' => 'Canada',
            'created_at'=>now()
        ]
      

    );
                          DB::table('countries')->insert(  [
            'name' => 'Saudi Arab',
            'created_at'=>now()
        ]
      

    );
    }
}
