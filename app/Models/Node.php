<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Node extends Model {

	protected $table = 'nodes';

	protected $guarded = ['id'];
	
	protected $fillable = [
				'name',
				'type',
				'parent_id',
				'user_permission',
				'group_permission',
				'everyone_permission',
				'owner_id',
				'group_id'
			];

	protected $hidden = [];

}