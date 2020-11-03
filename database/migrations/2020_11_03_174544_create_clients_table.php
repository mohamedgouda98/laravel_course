<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    /**
     * students :
     * ----------------------------------------
     * id | name | age | school_id | class_id
     * ----------------------------------------
     * schools:
     * -------------
     * id | name
     * -------------
     * class:
     * -----------------------
     * id | name | school_id
     * -----------------------
     */







    /**
     * ----------------------------------------------
     * id | name | job | age | city | phone | phone_2
     * ----------------------------------------------
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('job');
            $table->integer('age');

            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

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
        Schema::dropIfExists('clients');
    }
}
