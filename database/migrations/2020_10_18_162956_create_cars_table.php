<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->smallIncrements('id');

            $table->smallInteger('number')->unique();
            $table->string('plate', 10)->unique();
            $table->string('color', 25);
            $table->year('year', 25);

            $table->unsignedSmallInteger('trade_marks_id')->nullable();
            $table->foreign('trade_marks_id')->references('id')->on('trade_marks');

            $table->unsignedSmallInteger('models_id')->nullable();
            $table->foreign('models_id')->references('id')->on('models');
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
        Schema::dropIfExists('cars');
    }
}
