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
            $table->string('description',100);
            $table->time('time_exit');
            $table->time('time_entry');
            $table->time('time_public');
            $table->date('date_exit');
            $table->date('date_public');
            $table->smallInteger('status_public');
            $table->unsignedMediumInteger('cars_exits_id')->nullable();
            $table->foreign('cars_exits_id')->references('id')->on('cars_exits');

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
