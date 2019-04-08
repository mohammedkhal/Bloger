<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('users', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('first_name');
                $table->string('second_name');
                $table->string('third_name');
                $table->string('email');
                $table->string('country')->nullable();
                $table->string('account')->nullable();
                $table->string('website')->nullable();
                $table->string('profile_pic')->default('noimage.jpg');
                $table->string('username')->unique();
                $table->string('password');
                $table->integer('vote')->default(0);
                $table->boolean('status')->default(true);
                $table->integer('is_writer')->default(0);
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
        Schema::dropIfExists('users');
    }
}
