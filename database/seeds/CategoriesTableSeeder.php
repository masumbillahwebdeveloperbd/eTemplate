<?php

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
            DB::table('categories')->insert(  [
            'name' => 'Men',
            'category_description' => 'For Personal Use',
            'parent_id' =>null,
            'publication_status'=>'1'
        ]
      );


          DB::table('categories')->insert(  [
            'name' => 'Women',
            'category_description' => 'For Personal Use',
            'parent_id' =>null,
            'publication_status'=>'1'
        ]
      );
             DB::table('categories')->insert(  [
            'name' => 'Electronics',
            'category_description' => 'For Personal Use',
            'parent_id' =>null,
            'publication_status'=>'1'
        ]
      );
             DB::table('categories')->insert(  [
            'name' => 'Home Appliance ',
            'category_description' => 'For Personal Use',
            'parent_id' =>null,
            'publication_status'=>'1'
        ]
      );
            DB::table('categories')->insert(  [
            'name' => 'Kids',
            'category_description' => 'For Personal Use',
            'parent_id' =>null,
            'publication_status'=>'1'
        ]
      );
           DB::table('categories')->insert(  [
            'name' => 'Shirt',
            'category_description' => 'For Personal Use',
            'parent_id' =>1,
            'publication_status'=>'1'
        ]
      );

               DB::table('categories')->insert(  [
            'name' => 'Salwar Kameez',
            'category_description' => 'For Personal Use',
            'parent_id' =>2,
            'publication_status'=>'1'
        ]
      );
            DB::table('categories')->insert(  [
            'name' => 'Mobile',
            'category_description' => 'For Personal Use',
            'parent_id' =>3,
            'publication_status'=>'1'
        ]
      );
               DB::table('categories')->insert(  [
            'name' => 'Bed Sheet',
            'category_description' => 'For Personal Use',
            'parent_id' =>4,
            'publication_status'=>'1'
        ]
      );
            DB::table('categories')->insert(  [
            'name' => 'Toy',
            'category_description' => 'For Children Use',
            'parent_id' =>5,
            'publication_status'=>'1'
        ]
      );
       
    }
}
