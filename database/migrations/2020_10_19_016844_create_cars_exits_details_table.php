<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsExitsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_exits_details', function (Blueprint $table) {
            
            $table->mediumIncrements('id');

            $table->unsignedMediumInteger('cars_exits_id')->nullable();
            $table->foreign('cars_exits_id')->references('id')->on('cars_exits');
            $table->date('time_exit');
            $table->date('time_entry');


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
        Schema::dropIfExists('cars_exits_details');
    }
}
