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
                'image' => 'categories/June2017/2qJB7npgD4nuhZdKDK9S.jpg',
                'created_at' => '2017-06-06 10:07:26',
                'updated_at' => '2017-06-09 12:47:05',
            ),
            1 => 
            array (
                'id' => 13,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Dogs',
                'slug' => 'dogs',
                'image' => 'categories/June2017/Dk2IQ0koyDHYvhTIFkR2.jpg',
                'created_at' => '2017-06-06 10:01:07',
                'updated_at' => '2017-06-09 12:48:16',
            ),
            2 => 
            array (
                'id' => 14,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Cats',
                'slug' => 'cats',
                'image' => 'categories/June2017/91rW0SJSjwmjng0L5xgu.jpg',
                'created_at' => '2017-06-06 10:02:03',
                'updated_at' => '2017-06-09 12:47:56',
            ),
            3 => 
            array (
                'id' => 15,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Birds',
                'slug' => 'birds',
                'image' => 'categories/June2017/T7WWWF03uGZLxC7cfuBS.jpg',
                'created_at' => '2017-06-06 10:03:04',
                'updated_at' => '2017-06-09 12:47:31',
            ),
            4 => 
            array (
                'id' => 17,
                'parent_id' => 13,
                'order' => 1,
                'name' => 'Pug',
                'slug' => 'pug',
                'image' => 'categories/June2017/qZpiNhW7FRfssXVYoyWB.jpg',
                'created_at' => '2017-06-07 08:03:18',
                'updated_at' => '2017-06-09 12:46:49',
            ),
            5 => 
            array (
                'id' => 18,
                'parent_id' => 14,
                'order' => 1,
                'name' => 'Russian cat',
                'slug' => 'russian-cat',
                'image' => 'categories/June2017/JS2XWBKaWGqatGOQOuuK.jpg',
                'created_at' => '2017-06-09 12:46:21',
                'updated_at' => '2017-06-09 12:46:21',
            ),
        ));
        
        
    }
}