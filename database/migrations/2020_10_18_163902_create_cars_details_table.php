<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_details', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('gasoline', 25);
            $table->string('observation', 25);

            $table->unsignedSmallInteger('cars_id');
            $table->foreign('cars_id')->references('id')->on('cars');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars_details');
    }
}
