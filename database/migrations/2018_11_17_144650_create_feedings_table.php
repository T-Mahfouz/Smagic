<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('feeding_type_id')->unsigned();
            $table->string('identifier');
            $table->integer('count');
            $table->float('cost');
            $table->float('discount')->nullable();
            $table->float('tax')->nullable();
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
        Schema::dropIfExists('feedings');
    }
}
