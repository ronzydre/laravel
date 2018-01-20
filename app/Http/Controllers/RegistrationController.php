<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Hash;
use Carbon\Carbon;

class RegistrationController extends Controller
{
    
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function create()
    {
        return view('registration.create');
    }
    public function store()
    {
        $this-> validate(request(),
        [
        'name'=> 'required',
        'email'=> 'required|email',
        'password'=> 'required|confirmed'

        ]);

       $user= User::create(
            [
                'name'=> request('name'), 'email' => request('email'), 'password'=> Hash::make(request('password'))
            ]
        );

        auth()-> login($user);

        return redirect()->home();
    }
}
