<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->unsigned();
            $table->integer('horse_id')->unsigned();
            $table->integer('place_id')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('treatment_type_id')->unsigned();
            $table->float('cost');
            $table->float('discount')->nullable();
            $table->float('tax')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('treatments');
    }
}
