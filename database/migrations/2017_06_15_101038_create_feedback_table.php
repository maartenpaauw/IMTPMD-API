<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeedbackTable extends Migration {

	public function up()
	{
		Schema::create('feedback', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('emotion_id')->unsigned()->default(1);
			$table->integer('meeting_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->text('description')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('feedback');
	}
}