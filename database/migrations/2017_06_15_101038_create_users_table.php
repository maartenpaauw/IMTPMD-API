<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('number', 8)->unique();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}