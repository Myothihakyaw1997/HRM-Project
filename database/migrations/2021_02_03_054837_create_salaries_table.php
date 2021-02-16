<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('employee_id');
            $table->integer('salary');
            $table->float('tax',12,3)->nullable();
            $table->float('ssb',12,3)->nullable();
            $table->integer('unpaid_leave');
            $table->string('position',200);
            $table->float('bonus',12,3)->nullable();
            $table->timestamps();


            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
}
