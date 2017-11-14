<?php

namespace App;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class Registers extends Model
{
	
	protected $table="users";

	public function dataStore($data)
	{
		$username=Input::get('username');
		$email=Input::get('email');
		$pass=Input::get('password');
		$us=new Register();

		$us->name=$username;
		$us->email=$email;
		$us->password=$pass;
		$us->save();
	}
}