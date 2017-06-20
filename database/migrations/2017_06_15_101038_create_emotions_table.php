<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmotionsTable extends Migration
{

    public function up()
    {
        Schema::create(
            'emotions',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->unique();
                $table->string('slug')->unique();
                $table->timestamps();
            }
        );
    }

    public function down()
    {
        Schema::drop('emotions');
    }
}