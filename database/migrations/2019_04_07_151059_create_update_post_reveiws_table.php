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
            $table->bigInteger('post_review_id')->unsigned();
            $table->foreign('post_review_id')->references('id')->on('post_reveiws');
            $table->bigInteger('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->enum('status', ['accept', 'refuse']);
            $table->string('comment');
            $table->timestamp('accept_at')->nullable();
            $table->timestamp('refuse_at')->nullable();
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
