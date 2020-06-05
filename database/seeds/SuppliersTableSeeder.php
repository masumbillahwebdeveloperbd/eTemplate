<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             DB::table('suppliers')->insert(  [
            'company_name' => 'Feroz Trading',
            'phone'        =>'01719440550',
            'email'        =>'fabrika786@gmail.com',
            'password'     =>'1234',
            'address'      =>'Wari',

            'country_id'   =>1,
            'city_id'      =>1,
            'postal_code'  =>1203,
            'status'       =>1,

            'created_at'=>now()
        ]
      

    );

             DB::table('suppliers')->insert(  [
              'company_name' => 'Mnz Corporation',
            'phone'        =>'01913507041',
            'email'        =>'masumbillahwebdeveloper@gmail.com',
            'password'     =>'1234',
            'address'      =>'Newyork',

            'country_id'   =>2,
            'city_id'      =>2,
            'postal_code'  =>110,
            'status'       =>1,
            
            'created_at'=>now()
        ]
    );

             DB::table('suppliers')->insert(  [
              'company_name' => 'Sk Corporation',
            'phone'        =>'01913507040',
            'email'        =>'sk@gmail.com',
            'password'     =>'1234',
            'address'      =>'Bangladesh',

            'country_id'   =>2,
            'city_id'      =>2,
            'postal_code'  =>110,
            'status'       =>1,
            
            'created_at'=>now()
        ]
    );
    }
}
