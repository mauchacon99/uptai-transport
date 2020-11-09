<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsExitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_exits', function (Blueprint $table) {
           
            $table->mediumIncrements('id');

            $table->unsignedSmallInteger('routes_id')->nullable();
            $table->foreign('routes_id')->references('id')->on('routes');

            $table->unsignedSmallInteger('drivers_id')->nullable();

            
            $table->foreign('drivers_id')->references('id')->on('drivers');

            $table->unsignedSmallInteger('cars_id')->nullable();
            $table->foreign('cars_id')->references('id')->on('cars');

            $table->smallInteger('status');
            
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
        Schema::dropIfExists('cars_exits');
    }
}
