<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsigned();
            $table->string('name');
            $table->string('date');
            $table->string('start_time');
            $table->string('end_time');
            $table->integer('total_marks');
            $table->integer('is_completed')->default(0);
            $table->integer('is_open')->default(0);
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('course_id')
              ->references('id')->on('courses')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
