<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VisitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('email', 150);
            $table->string('phone', 14)->nullable();
            $table->string('occupation', 120)->nullable();
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
        Schema::drop('visitor');
    }
}
