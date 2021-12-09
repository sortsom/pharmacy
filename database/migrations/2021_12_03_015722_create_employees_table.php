<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('gender');
            $table->date('date_start');
            $table->String('idcard');
            $table->date('date_end');
            $table->String('position');
            $table->String('graduate');
            $table->integer('salary');
            $table->text('address');
            $table->text('phone');
            $table->String('image')->nullable();;
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
        Schema::dropIfExists('employees');
    }
}
