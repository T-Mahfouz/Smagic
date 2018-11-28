<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('horse_id')->unsigned();
            $table->integer('place_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->string('source_place');
            $table->string('source_phone');
            $table->string('source_address');
            $table->timestamp('moved_at');
            $table->string('destination_place');
            $table->string('destination_phone');
            $table->string('destination_address');
            $table->timestamp('arrived_at');
            $table->float('cost');
            $table->float('insurance');
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
        Schema::dropIfExists('transactions');
    }
}
