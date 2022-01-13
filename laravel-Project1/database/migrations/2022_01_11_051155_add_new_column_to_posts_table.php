<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //jodi ekoi table e pore kono data add korte hobe tokhon ei notun file ready kore file add korte hobe


            //notun file create korte hoy karon age kono data entry thakle seta jate kono vabe haray na jay, ager data gulo jate thake

            $table->integer('type')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    //jokhovery n rollback kori tokhon down er kaj kore, orthat ek step ager kaj e cole jay,
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->dropColumn('age');
        });
    }
}
