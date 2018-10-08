<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\SendKeyRegistration;
use App\Http\Requests\RegisterUserRequest;
use Webpatser\Uuid\Uuid;
use App\User;
use Session;

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

    public function step2($uuid)
    {
        $user = User::where('personId', $uuid)->first();
        return view('prueba', compact('user'));
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
    	$user->personId = Uuid::generate()->string;
    	$user->fill($post)->save();
        Mail::to($post['email'])->send(new SendKeyRegistration($user));
        Session::flash('email-sent', 'An email has been sent to continue the registration, please check.');
        return view('user.signup');
    }
}