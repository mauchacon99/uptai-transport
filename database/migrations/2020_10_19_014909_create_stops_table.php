<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stops', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name', 100);
            
            $table->unsignedSmallInteger('addreses_id')->nullable();
            $table->foreign('addreses_id')->references('id')->on('addreses');
            $table->smallInteger('status')->default('1');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stops');
    }
}
