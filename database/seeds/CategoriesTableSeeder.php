<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 16,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Reptiles',
                'slug' => 'reptiles',
                'image' => 'categories/June2017/WU3kujiveZWdM6SDCX9J.jpg',
                'created_at' => '2017-06-06 10:07:26',
                'updated_at' => '2017-06-06 10:07:26',
                'is_pedigree' => 0,
            ),
            1 => 
            array (
                'id' => 13,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Dogs',
                'slug' => 'dogs',
                'image' => 'categories/June2017/peqs4a8GoBMzW8eMzXfp.jpg',
                'created_at' => '2017-06-06 10:01:07',
                'updated_at' => '2017-06-06 10:01:07',
                'is_pedigree' => 0,
            ),
            2 => 
            array (
                'id' => 14,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Cats',
                'slug' => 'cats',
                'image' => 'categories/June2017/L36ADGtrcxY8qhAgLk0B.jpg',
                'created_at' => '2017-06-06 10:02:03',
                'updated_at' => '2017-06-06 10:02:03',
                'is_pedigree' => 0,
            ),
            3 => 
            array (
                'id' => 15,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Birds',
                'slug' => 'birds',
                'image' => 'categories/June2017/zEWfBybXwoBxxPoo1ydb.jpg',
                'created_at' => '2017-06-06 10:03:04',
                'updated_at' => '2017-06-06 10:03:04',
                'is_pedigree' => 0,
            ),
            4 => 
            array (
                'id' => 17,
                'parent_id' => 13,
                'order' => 1,
                'name' => 'Pug',
                'slug' => 'pug',
                'image' => 'categories/June2017/509I6fINecyH6peE35R2.jpg',
                'created_at' => '2017-06-07 08:03:18',
                'updated_at' => '2017-06-07 08:03:18',
                'is_pedigree' => 1,
            ),
        ));
        
        
    }
}