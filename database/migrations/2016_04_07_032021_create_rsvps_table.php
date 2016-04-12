<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsvpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsvps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name1');
            $table->string('last_name1');
            $table->string('email');
            $table->string('restrictions1');
            $table->string('first_name2');
            $table->string('last_name2');
            $table->string('restrictions2');
            $table->integer('kids')->unsigned();
            $table->boolean('vote');
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
        Schema::drop('rsvps');
    }
}
