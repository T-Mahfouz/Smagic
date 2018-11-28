<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('image');
            $table->string('password');
            $table->string('position');
            $table->string('management');
            $table->integer('branch_id')->unsigned();
            $table->string('gender');
            $table->float('salary');
            $table->integer('shift_id')->unsigned();
            $table->timestamp('shift_from');
            $table->timestamp('shift_to');
            $table->boolean('special_needs')->default(0);
            $table->string('hosting');
            $table->timestamp('hosting_end');
            $table->string('nationality');
            $table->string('education');
            $table->string('medical_insurance');
            $table->timestamp('medical_insurance_end');
            $table->timestamp('hiring_date');
            $table->string('firebase')->nullable();
            $table->boolean('notify')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('employers');
    }
}
