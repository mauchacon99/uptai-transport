<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->integer('identity')->unique();
            $table->string('name', 50);
            $table->string('surname', 50);
            $table->string('sex',23);
            $table->bigInteger('phone');
            $table->date('birthdate');
            $table->string('occupation');
            $table->string('address', 50);
            $table->smallInteger('status')->default(1);
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
        Schema::dropIfExists('employee');
    }
}
