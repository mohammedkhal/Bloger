<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostReveiwsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_reveiws', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')->references('id')->on('posts');
            $table->integer('user_id ')->unsigned();
            $table->foreign('user_id ')->references('id')->on('users');
            $table->integer('admin_id ')->unsigned();
            $table->foreign('admin_id ')->references('id')->on('admin');
            $table->boolean('status')->default(true);
            $table->string('comment');
            $table->date('accept_date');
            $table->date('refuse_date');
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
        Schema::dropIfExists('post_reveiws');
    }
}
