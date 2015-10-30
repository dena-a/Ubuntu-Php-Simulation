<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('username', 64)->unique();
			$table->string('name', 64)->unique();
			$table->string('password', 64);
			$table->integer('group_id')->unsigned();
			$table->foreign('group_id')->references('id')->on('user_groups');
			$table->timestamps();
		});
	}

	public function down() {
		Schema::drop('users');
	}

}