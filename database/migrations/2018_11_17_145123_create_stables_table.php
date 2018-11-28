<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->unsigned();
            $table->integer('stable_type_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('branch_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->float('count');
            $table->float('cost');
            $table->float('tax')->nullable();
            $table->boolean('new_user')->default(0);
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
        Schema::dropIfExists('stables');
    }
}
