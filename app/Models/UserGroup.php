<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model {
	
	protected $table = 'user_groups';

	protected $guarded = ['id'];
	
	protected $fillable = [
				'name',
				'key'
			];

	protected $hidden = [];

}
