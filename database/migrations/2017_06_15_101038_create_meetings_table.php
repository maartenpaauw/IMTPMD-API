<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMeetingsTable extends Migration {

	public function up()
	{
		Schema::create('meetings', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('name');
			$table->text('description');
			$table->timestamp('starting_at')->nullable();
			$table->timestamp('ending_at')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('meetings');
	}
}