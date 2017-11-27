<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Registers;
use Redirect;
use Illuminate\Database\Eloquent\Model;

class RegisterController extends Controller
{

    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    //validate the input
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);
    }
    //get the inputs and store them into database for a new user
    public function store()
    {
        $data=Input::except(array('token'));

        $rule=array(
            'username'=>'required',
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|min:8',
            'repassword'=>'required|same:password'
        );

        $message=array(
            'repassword.required'=>'Please confirm your passowrd',
            'password.min'=>'password length must be greater than 7',
            'repassword.same'=>'password did not match'
        );
        $validator=Validator::make($data,$rule,$message);
        if($validator->fails())
        {
            return Redirect::to('login')->withErrors($validator);
        }
        else
        {
            RegisterController::create(Input::except(array('_token','repassword')));
            return Redirect::to('login')->with('success','sucessfully registered');
        }
    }
}
