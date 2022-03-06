<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function Register(Request $request)
    {
       $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'nationalcode' => 'required',
            'mobile' => 'required',
            'homephone' => 'required',
            'password' => 'required',
       ]);

       $data = $request->all();
       $check = $this->create($data);
    }
    public function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'nationalcode' => $data['nationalcode'],
            'mobile' => $data['mobile'],
            'homephone' => $data['homephone'],
            'password' => Hash::make($data['password'])
        ]);
    }
}
