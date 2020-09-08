<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressTable extends Migration {

    public $table = "address";

	public function up()
	{
		Schema::create('address', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index();
			$table->timestamps();
			$table->string('address', 255);
			$table->string('address2', 255)->nullable();
			$table->string('locality', 255);
			$table->string('province', 255);
			$table->string('postcode', 255);
			$table->string('country', 255);
		});
	}

	public function down()
	{
		Schema::drop('address');
	}
}
