<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->smallInteger('km');
         
            $table->unsignedSmallInteger('addreses_exit_id')->nullable();
            $table->foreign('addreses_exit_id')->references('id')->on('addreses');

            $table->unsignedSmallInteger('addreses_intermediate_id');
            $table->foreign('addreses_intermediate_id')->references('id')->on('addreses');

            $table->unsignedSmallInteger('addreses_destination_id')->nullable();
            $table->foreign('addreses_destination_id')->references('id')->on('addreses');

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
        Schema::dropIfExists('routes');
    }
}
