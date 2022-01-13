<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); //primary key
            $table->string('title');
            $table->text('description');

              //for foreign key
              /*
              $table->unsignedBigInteger('author_id');

              $table->foreign('author_id')->references('id')->on('users');
              */

              //or
              
              $table->foreignId('author_id')->constrained('users');






            $table->timestamps(); //created_at & updated_at

          

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
