<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserGroupsTable extends Migration {

	public function up() {
		Schema::create('user_groups', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 64)->unique();
			$table->string('key', 64)->unique();
			$table->timestamps();
		});
	}

	public function down() {
		Schema::drop('user_groups');
	}

}