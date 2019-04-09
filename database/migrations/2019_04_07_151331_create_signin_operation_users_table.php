<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSigninOperationUsersTable extends Migration
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
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('ip') ; 
            $table->string('country') ; 
            $table->string('device') ; 
            $table->string('browser') ;
            $table->string('operating_system') ; 
            $table->timestamp('last_signin')->nullable() ; 
            $table->timestamp('signin_at')->nullable() ; 
            $table->timestamp('session_end_at')->nullable() ; 
            
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
