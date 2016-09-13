<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlothsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sloths', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('birthday');
            $table->integer('wives');
            $table->integer('kids');
            $table->longText('background');
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
        Schema::drop('sloths');
    }
}
