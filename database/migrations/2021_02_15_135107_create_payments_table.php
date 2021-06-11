<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('semester_id')->unsigned();
            $table->double('semester_fee')->default(4000);
            $table->double('per_credit_fee');
            $table->double('total_credit');
            $table->double('payable');
            $table->double('paid');
            $table->double('due');



            $table->timestamps();

            $table->foreign('semester_id')
              ->references('id')->on('semesters')
              ->onDelete('cascade');

            $table->foreign('user_id')
              ->references('id')->on('users')
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
        Schema::dropIfExists('payments');
    }
}
