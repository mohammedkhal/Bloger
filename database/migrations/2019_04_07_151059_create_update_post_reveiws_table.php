<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdatePostReveiwsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('update_post_reveiws', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('post_review_id')->unsigned();
            $table->foreign('post_review_id')->references('id')->on('post_reveiws');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('status')->default(true);
            $table->string('comment');
            $table->timestamp('accept_date');
            $table->timestamp('refuse_date');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('update_post_reveiws');
    }
}
