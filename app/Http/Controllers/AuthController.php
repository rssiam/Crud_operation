<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Session;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function processRegisterForm(Request $request)
    {
        $rules = [
            'full_name'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|min:6|confirmed',
            'mobile'=> 'required|numeric|unique:users,mobile',
        ];
        $custom_message =[
            'full_name.required' => 'Please input your full Name',
            'email.required' => 'Please input your email address',
            'email.email' => 'Please Enter a valid email address',
            'email.unique' => 'This Email address has already taken',
            'password.required' => 'Please input a password',
            'password.min' => 'Your password can not contain less then 6 cheracter',
            'password.confirmed' => 'password and confirm password dose not match',
            'mobile.required' => 'Please input your mobile number',
            'mobile.numeric' => 'The mobile must be a number',
            'mobile.unique' => 'This mobile number has already taken',

        ];
        $this->validate($request, $rules, $custom_message);
        $user = new Users();
        $user->name = $request->full_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->mobile = $request->mobile;
        $user -> save();
        Session::flash('msg','you have successfully registerd');
        return redirect('/login');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function processLoginForm(Request $request)
    {
        $rules = [
            'email'=> 'required|email',
            'password'=> 'required|min:6',
        ];
        $custom_message =[
            'email.required' => 'Please input your email address',
            'email.email' => 'Please Enter a valid email address',
            'password.required' => 'Please input a password',
            'password.min' => 'Your password can not contain less then 6 cheracter',

        ];
        $this->validate($request, $rules, $custom_message);
        $users_data = $request->except(['_token']);
        if(auth()->attempt($users_data)){
            Session::flash('msg','Login successfull');
        return redirect('/show-data');
        }
        Session::flash('msg','invalid Email or Password');
        Session::flash('type','danger');
        return redirect()->back();


    }
}
