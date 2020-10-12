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
            $table->bigIncrements('id');
            $table->string('title');
            $table->dateTime('date_written');
            $table->text('content');
            $table->string('featured_image')->nullable();
            $table->integer('vote_up')->nullable();
            $table->integer('vote_down')->nullable();
            $table->text('voters_up')->nullable();
            $table->text('voters_down')->nullable();
            $table->timestamps();
            //RelationShipw
            $table->integer('user_id');
            $table->integer('category_id');
            
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
