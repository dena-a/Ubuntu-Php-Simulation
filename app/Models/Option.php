<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model {

	protected $table = 'options';

	public $timestamps = false;

	protected $guarded = ['id'];
	
	protected $fillable = [
				'option',
				'type',
				'command_id'
			];

	protected $hidden = [];

}
