<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserRoleTable extends Migration {

    public $table = "user_role";

	public function up()
	{
		Schema::create('user_role', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned()->index();
			$table->integer('role_id')->unsigned()->index();
		});
	}

	public function down()
	{
		Schema::drop('user_role');
	}
}
