<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class Authentication extends Controller
{
    //
    public function login(Request $request) {
        $validation = Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember_me);
        if(!$validation) {
            return back()->withErrors("Invalid account.");
        }

        if($request->remember_me) {
            Cookie::queue('email', $request->email, 20);
            Cookie::queue('password', $request->password, 20);
        }

        return redirect("/home");
    }

    public function logout() {
        Auth::logout();
        return redirect("/home");
    }

    public function register(Request $request) {
        $validation = Validator::make($request->all(),
            [
                'first_name' => 'required',
                'email' => 'required|email:rfc,dns',
                'gender' => 'required',
                'password' => 'required',
                'last_name' => 'required',
                'role' => 'required',
                'display_picture_link' => 'required',
                'confirm' => 'required|same:password'
        ]);

        if($validation->fails()) {
            return back()->withErrors($validation);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->type = "role_id";
        $user->save();
        return redirect('/');

        
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (!Auth::attempt($credentials)) {
            return redirect()->back()->withErrors(['email' => 'Wrong email/password. Please check again.'])->withInput();
        }

        return redirect()->route('home')->with('success', 'Sign-in');
    }
}
