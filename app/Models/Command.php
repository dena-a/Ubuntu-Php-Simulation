<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Command extends Model {

	protected $table = 'commands';

	public $timestamps = false;

	protected $guarded = ['id'];
	
	protected $fillable = [
				'command',
			];

	protected $hidden = [];

}
