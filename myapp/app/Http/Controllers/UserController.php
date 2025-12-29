<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login (Request $request){
        $incomingFields = $request->validate ([
            'loginname' => 'required',
            'loginpassword' => 'required',
        ]);
        if (auth()->attempt (['name' => $incomingFields['loginname'], 'password' => $incomingFields['loginpassword']])){
            $request->session()->regenerate();
            return redirect ('/');
        }
        return back()->withErrors ([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput ('email');
    }
    public function logout(){
        auth()->logout();
        return redirect ('/');
    }
    public function  register (Request $request) {
       $inComingFields= $request->validate([
          'name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);
       $inComingFields['password'] = bcrypt($inComingFields['password']);
       $user= User::create($inComingFields);
       auth()->login ($user);
        return redirect('/');
    }
 
}
