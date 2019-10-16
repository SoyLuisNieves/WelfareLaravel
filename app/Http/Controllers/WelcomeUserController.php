<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function greet($name, $nickname = null)
    {
    	$name = ucfirst($name);
		if($nickname) {
			return "Hello {$name}, your nick is: {$nickname}";
		} else {
			return "Hello {$name}";
		}
    }
}
