<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CollegeIDsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collegestaffids',function( Blueprint $table)
        {
            $table->increments('id');
            $table->integer('college_id')->unsigned()->index();
            $table->foreign('college_id')->references('id')->on('colleges')->onUpdate('cascade');
            $table->string('staffids')->unique();
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
        Schema::dropIfExists('collegestaffids');
    }
}
