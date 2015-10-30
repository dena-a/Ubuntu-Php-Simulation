<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration {

	public function up() {
		Schema::create('options', function (Blueprint $table) {
			$table->increments('id');
			$table->string('option', 64);
			$table->enum('type', array('short', 'long'));
			$table->integer('command_id')->unsigned();
			$table->foreign('command_id')->references('id')->on('commands');
		});
	}

	public function down() {
		Schema::drop('options');
	}

}