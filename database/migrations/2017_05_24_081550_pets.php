<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('color_id');
            $table->double('age');
            $table->longText('description');
            $table->string('image');
            $table->integer('province_id');
            $table->string('phone_no', 15);
            $table->string('email');
            $table->string('full_name');
            $table->integer('city_id');
            $table->string('activation_code', 255);
            $table->boolean('is_pedigree');
            $table->boolean('kcp_number');
            $table->boolean('is_vaccinated');
            $table->boolean('is_active');
            $table->boolean('is_verified');
            $table->boolean('require_checking');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
