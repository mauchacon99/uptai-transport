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

            $table->unsignedSmallInteger('routes_id');
            $table->foreign('routes_id')->references('id')->on('routes')->onDelete('cascade');
            $table->unsignedSmallInteger('drivers_id');
            $table->foreign('drivers_id')->references('id')->on('drivers')->onDelete('cascade');
            $table->unsignedSmallInteger('cars_id');
            $table->foreign('cars_id')->references('id')->on('cars')->onDelete('cascade');
            $table->smallInteger('status')->default('1');
            $table->timestamps();
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
        Schema::dropIfExists('cars_exits');
    }
}
