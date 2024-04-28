<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showRegister()
   {
       return view('users/register');
   }

   public function register(Request $request)
   {
       $user = User::query()->create([
           'name'=>$request['name'],
           'email'=>$request['email'],
           'password'=>Hash::make($request['password'])
       ]);

       Auth::login($user);

       return redirect('/');
   }

   public function profile()
   {
       return view('users/profile');
   }

   public function logout()
   {
       Auth::logout();

       return redirect('/');
   }

   public function showLogin()
   {
       return view('users/login');
   }

   public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back();
    }
}
