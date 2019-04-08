<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createadmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('third_name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('country')->nullable();;
            $table->string('profile_pic')->default('noimage.jpg');
            $table->enum('status',['active' , 'inactive' , 'blocked'])->default('active');
            $table->enum('type',['general_manger' , 'supervisor'])->default('supervisor');
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
        Schema::dropIfExists('admins');
    }
}
