<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (request()->has('empty')) {
            $users = [];
        } else {
            $users = ['Luis','Frank','Oswal','Prank'];
        }
    	
    	return view('users', [
    		'users' => $users,
    		'title' => 'List of Users',
    	]);
    }

    public function show($id)
    {
    	return "Show details of user: {$id}";
    }

    public function create()
    {
    	return 'Create new user';
    }
}
