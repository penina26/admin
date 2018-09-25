<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store(Request $request)
    {
    	$this->validate(request(),[
    		'name'=>'required',
    		'email'=>'required',
    		'password'=>'required|confirmed']);
    	//using eloquent to save

    	$user=User::create(['name'=>request('name'),
    		'email'=>request('email'),
    		'password'=> bcrypt(request('password'))]);
    	

    	//sign user in
    	auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

    	//redirect to home page
    	return redirect('/');
    }
}
