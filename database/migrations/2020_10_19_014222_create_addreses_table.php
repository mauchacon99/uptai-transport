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
            $table->string('starting_point', 100);  
            $table->unsignedSmallInteger('states_id');
            $table->foreign('states_id')->references('id')->on('states');        
            $table->unsignedSmallInteger('municipalities_id');
            $table->foreign('municipalities_id')->references('id')->on('municipalities');
            $table->unsignedSmallInteger('parishes_id');
            $table->foreign('parishes_id')->references('id')->on('parishes');
            $table->smallInteger('status')->default(1);
             $table->softDeletes();
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
