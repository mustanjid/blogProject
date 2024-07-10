<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function signUp()
    {
        return view('front.auth.signup');
    }

    public function login()
    {
        return view('front.auth.login');
    }

    public function newRegister(Request $request)
    {
        $request->validate([
            "name"  => 'required',
            "email" => 'required',
            "mobile" => 'nullable',
            "password" => 'required'
        ]);

            $file       =   $request->file('profile_img');
            $ext        =   uniqid().'-'.mt_rand(0, 99999).'.'.$file->getClientOriginalExtension();
            $store      =   './front/uploads/';
            $path       =   $store.$ext;
            $file->move($store,$ext);

        User::create([
            'name' => $request->name,
            "email" => $request->email,
            "mobile" => $request->mobile,
            "password" => Hash::make($request->password),
            "profile_img" => $path
        ]);

        return redirect('/user/login');
    }

    public function processToLogin(Request $request)
    {
        $request->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email'  => $request->email, 'password' => $request->password]))
        {
            return 'success';
        }else{
            return 'fail';
        }
    }
}
