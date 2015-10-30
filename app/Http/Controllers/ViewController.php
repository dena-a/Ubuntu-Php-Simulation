<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewController extends Controller {
	
	public function makeView() {
		return 'SALAM';
	}

	public function enterCommand() {
		return 'hi';
	}

}