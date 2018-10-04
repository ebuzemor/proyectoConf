<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\SendKeyRegistration;
use App\Http\Requests\RegisterUserRequest;
use App\User;
use Webpatser\Uuid\Uuid;

class UserController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}

    public function signup()
    {
    	return view('user.signup');
    }

    public function forgot()
    {
    	
    }

    public function logout()
    {
    	//return (string) Str::uuid();
    }

    public function devuelve_uuid()
    {
        $cadUID = Uuid::generate()->string;
        return $cadUID;
    }

    public function register(RegisterUserRequest $request)
    {
    	$post = $request->all();
    	$post['password'] = bcrypt($post['password']);
    	$user = new User;
    	$user->idpersona = Uuid::generate()->string;
    	$user->fill($post)->save();
        Mail::to($post['email'])->send(new SendKeyRegistration());
    	//return redirect('/');
    }
}