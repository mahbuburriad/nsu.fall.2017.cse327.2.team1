<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Registers;
use Redirect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{

    public function loginn()
    {
        $data=Input::except(array('_token'));
        $rule=array(
            'email'=>'required|email',
            'password'=>'required|min:8',
        );

        $validator=Validator::make($data,$rule);

        if($validator->fails())
        {

            return Redirect::to('login')->withErrors($validator);
        }
        else
        {
            $email=Input::get('email');
            $password=Input::get('password');
            if(Auth::attempt(['email' => $email, 'password' => $password]))
                return Redirect::to('/');
            else
                return Redirect::to('login');
        }
    }

}
