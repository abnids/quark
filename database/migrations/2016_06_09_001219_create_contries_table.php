<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('contry');
            $table->string('currency');
            $table->string('fraction');
            $table->string('agreement');
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
        Schema::drop('contries');
    }
}
