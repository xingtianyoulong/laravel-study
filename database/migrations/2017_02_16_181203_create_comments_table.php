<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create articles table
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname');
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->text('content')->nullable();
            $table->integer('article_id');
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
        // Drop comments table
        Schema::drop('comments');
    }
}
