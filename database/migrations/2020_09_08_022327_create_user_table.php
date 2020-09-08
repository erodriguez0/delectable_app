<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	public function up()
	{
		Schema::create('user', function(Blueprint $table) {
			$table->increments('id');
			$table->string('first_name', 255);
			$table->string('last_name', 255);
			$table->string('username', 255)->index();
			$table->string('email', 255)->unique();
			$table->string('password', 255);
			$table->boolean('banned')->default(false);
            $table->rememberToken();
			$table->timestamps();
			$table->datetime('last_login');
		});
	}

	public function down()
	{
		Schema::drop('User');
	}
}
