<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UniversitycomponentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university_components', function( Blueprint $table)
        {
            $table->increments('id');
            $table->integer('university_id')->unsigned();
            $table->foreign('university_id')->references('id')->on('universities')->onUpdate('cascade');
            $table->string('comp_name');
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
        Schema::dropIfExists('universities_components');
    }
}
