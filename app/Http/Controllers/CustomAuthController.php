<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function adminlogin()
    {
        return view('auth.admin');
    }

    public function checkAdmin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password' => $request->password]))
        {
            return redirect()->route('home');
        }
        return back()->withInput($request->only('email'));
    }

}
