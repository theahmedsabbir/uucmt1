<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batch_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('semester_id')->unsigned();
            $table->string('image')->nullable();
            $table->string('name');
            $table->integer('code');
            $table->text('description')->nullable();
            $table->double('credit')->default(3.00);
            $table->string('link')->nullable();
            $table->timestamps();



            $table->foreign('batch_id')
              ->references('id')->on('batches')
              ->onDelete('cascade');

            $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');

            $table->foreign('semester_id')
              ->references('id')->on('semesters')
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
        Schema::dropIfExists('courses');
    }
}
