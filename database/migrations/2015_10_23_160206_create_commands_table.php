<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandsTable extends Migration {

	public function up() {
		Schema::create('commands', function (Blueprint $table) {
			$table->increments('id');
			$table->string('command', 64)->unique();
		});
	}

	public function down() {
		Schema::drop('commands');
	}

}