<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('address', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('user')
						->onDelete('restrict')
						->onUpdate('cascade');
		});
		Schema::table('user_role', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('user')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_role', function(Blueprint $table) {
			$table->foreign('role_id')->references('id')->on('role')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('address', function(Blueprint $table) {
			$table->dropForeign('address_user_id_foreign');
		});
		Schema::table('user_role', function(Blueprint $table) {
			$table->dropForeign('user_role_user_id_foreign');
		});
		Schema::table('user_role', function(Blueprint $table) {
			$table->dropForeign('user_role_role_id_foreign');
		});
	}
}
