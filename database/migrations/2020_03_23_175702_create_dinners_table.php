<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDinnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('usertype');
            $table->string('date');
            $table->string('time');
            $table->string('foodname');
            $table->string('foodimage');
            $table->string('energy');
            $table->string('protein');
            $table->string('carbohydrate');
            $table->string('fat');
            $table->string('sugar');
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
        Schema::dropIfExists('dinners');
    }
}
