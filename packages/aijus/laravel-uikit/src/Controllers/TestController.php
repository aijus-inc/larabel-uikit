<?php

namespace aijus\Uikit\Controllers;

use Illuminate\Routing\Controller;

class TestController extends Controller
{
	public function test(){
		echo 'test';
		exit;
	}
}