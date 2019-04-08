<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinginOperationUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singin_operation_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('ip') ; 
            $table->string('country') ; 
            $table->string('device') ; 
            $table->string('browser') ;
            $table->string('operating_system') ; 
            $table->timestamp('last_signin') ; 
            $table->timestamp('signin_date') ; 
            $table->timestamp('session_end_date') ; 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('singin_operation_users');
    }
}
