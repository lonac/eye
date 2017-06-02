<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LecturerStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturerstates', function(Blueprint $table){
            
            $table->increments('id');
            $table->integer('lecturer_id')->unsigned()->index();
            $table->foreign('lecturer_id')->references('id')->on('lecturers')->onUpdate('cascade');
            $table->string('state');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('lecturerstates');
    }
}
