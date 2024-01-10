<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function logged(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $credential=$request->only('email','password');
        if(Auth::attempt($credential) && auth()->user()->role =='1');
        {
            return redirect()->route('admin.dash');
        }
        return redirect()->back();
        }
    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
        ]);
        $data = $request->all();
        User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
        ]);
        return redirect()->back();
    }
    public function post_register()
    {
        return view();
    }
}
