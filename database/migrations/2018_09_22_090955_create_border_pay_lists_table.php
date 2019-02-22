<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorderPayListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('border_pay_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('roomNo');
            $table->integer('seatNo');
            $table->integer('phone');
            $table->integer('rent');
            $table->integer('month');
            $table->integer('year');
            $table->integer('fine')->default(0);



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
        Schema::dropIfExists('border_pay_lists');
    }
}
