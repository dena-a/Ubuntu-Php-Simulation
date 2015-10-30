<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract {

	use Authenticatable;

	protected $table = 'users';

	protected $guarded = ['id'];
	
	protected $fillable = [
				'username',
				'name',
				'password',
				'group_id'
			];

	protected $hidden = [];

}