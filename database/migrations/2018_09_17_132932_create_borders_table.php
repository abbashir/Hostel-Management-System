<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borders', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('roomNo')->unique();
            $table->bigInteger('seatNo');
            $table->string('name');
            $table->string('fName');
            $table->string('mName');
            $table->string('institute', 200);
            $table->string('bDay');
            $table->bigInteger('NID');
            $table->string('relegious');
            $table->bigInteger('phone');

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
        Schema::dropIfExists('borders');
    }
}
