<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use Artisan;
use Validator;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use DB;


class SessionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest', ['except'=> 'destroy']);
    }
    public function create()
    {
        return view('session.create');
    }
    public function store(Request $request)
    {
        $user = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
         if ($user) 
        {
            // Authentication passed...
           session()->flash('message', 'You are Login');
            return redirect('/post/create');
        }
        else
        {
            return back()->withErrors([
                'message' => 'Please Check your credentials'
            ]);
        }
    }
    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
