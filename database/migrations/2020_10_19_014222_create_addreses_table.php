<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddresesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addreses', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name', 100);  
            $table->unsignedSmallInteger('states_id')->nullable();
            $table->foreign('states_id')->references('id')->on('states');        
            $table->unsignedSmallInteger('municipalities_id')->nullable();
            $table->foreign('municipalities_id')->references('id')->on('municipalities');
            $table->unsignedSmallInteger('parishes_id')->nullable();
            $table->foreign('parishes_id')->references('id')->on('parishes');
            $table->smallInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addreses');
    }
}
