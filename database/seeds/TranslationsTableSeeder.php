<?php

use Illuminate\Database\Seeder;

class TranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translations')->delete();
        
        \DB::table('translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Post',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            1 => 
            array (
                'id' => 2,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Página',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            2 => 
            array (
                'id' => 3,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 3,
                'locale' => 'pt',
                'value' => 'Utilizador',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            3 => 
            array (
                'id' => 4,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 4,
                'locale' => 'pt',
                'value' => 'Categoria',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            4 => 
            array (
                'id' => 5,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 5,
                'locale' => 'pt',
                'value' => 'Menu',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            5 => 
            array (
                'id' => 6,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 6,
                'locale' => 'pt',
                'value' => 'Função',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            6 => 
            array (
                'id' => 7,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Posts',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            7 => 
            array (
                'id' => 8,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Páginas',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            8 => 
            array (
                'id' => 9,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 3,
                'locale' => 'pt',
                'value' => 'Utilizadores',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            9 => 
            array (
                'id' => 10,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 4,
                'locale' => 'pt',
                'value' => 'Categorias',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            10 => 
            array (
                'id' => 11,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 5,
                'locale' => 'pt',
                'value' => 'Menus',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            11 => 
            array (
                'id' => 12,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 6,
                'locale' => 'pt',
                'value' => 'Funções',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            12 => 
            array (
                'id' => 13,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Olá Mundo',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            13 => 
            array (
                'id' => 14,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'ola-mundo',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            14 => 
            array (
                'id' => 15,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            15 => 
            array (
                'id' => 16,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Painel de Controle',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            16 => 
            array (
                'id' => 17,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Media',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            17 => 
            array (
                'id' => 18,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'pt',
                'value' => 'Publicações',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            18 => 
            array (
                'id' => 19,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'pt',
                'value' => 'Utilizadores',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            19 => 
            array (
                'id' => 20,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'pt',
                'value' => 'Categorias',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            20 => 
            array (
                'id' => 21,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'pt',
                'value' => 'Páginas',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            21 => 
            array (
                'id' => 22,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'pt',
                'value' => 'Funções',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            22 => 
            array (
                'id' => 23,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 8,
                'locale' => 'pt',
                'value' => 'Ferramentas',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            23 => 
            array (
                'id' => 24,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 9,
                'locale' => 'pt',
                'value' => 'Menus',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            24 => 
            array (
                'id' => 25,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 10,
                'locale' => 'pt',
                'value' => 'Base de dados',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
            25 => 
            array (
                'id' => 26,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 11,
                'locale' => 'pt',
                'value' => 'Configurações',
                'created_at' => '2017-05-23 07:07:37',
                'updated_at' => '2017-05-23 07:07:37',
            ),
        ));
        
        
    }
}