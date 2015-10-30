<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodesTable extends Migration {

	public function up() {
		Schema::create('nodes', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 128);
			$table->enum('type', array('file', 'directory'));
			$table->integer('parent_id')->unsigned();
			$table->tinyInteger('user_permission')->length(1)->unsigned()->default(1);
			$table->tinyInteger('group_permission')->length(1)->unsigned()->default(1);
			$table->tinyInteger('everyone_permission')->length(1)->unsigned()->default(1);
			$table->integer('owner_id')->unsigned();
			$table->foreign('owner_id')->references('id')->on('users');
			$table->integer('group_id')->unsigned();
			$table->foreign('group_id')->references('id')->on('user_groups');
			$table->timestamps();
		});
	}

	public function down() {
		Schema::drop('nodes');
	}
}