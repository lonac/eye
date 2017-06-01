<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index()->unique();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->integer('college_id')->unsigned()->index();
            $table->foreign('college_id')->references('id')->on('colleges')->onUpdate('cascade');
            $table->string('officeNo');
            $table->string('phoneno')->nullable();
            $table->string('department')->nullable();
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
        Schema::dropIfExists('lectures');
    }
}
