<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\User;

class UserController extends Controller
{
    public function index()
	{
		return view('users.index');
	}

	public function listar()
	{
		return \Response::json(User::all(), 200);
	}
=======

class UserController extends Controller
{
    //
>>>>>>> 7692020ee4ab0b8ec3dbe15b703db6ed5cb6487e
}
