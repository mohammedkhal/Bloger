<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSigninOperationAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singin_operation_admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->string('ip') ; 
            $table->string('country') ; 
            $table->string('device') ; 
            $table->string('browser') ;
            $table->string('operating_system') ; 
            $table->timestamp('last_signin')->nullable() ; 
            $table->timestamp('signin_date')->nullable() ; 
            $table->timestamp('session_end_date')->nullable() ; 
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
        Schema::dropIfExists('singin_operation_admins');
    }
}
