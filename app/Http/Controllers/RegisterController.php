<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function Register(){
        return view('register');
    }
    public function Store(Request $request){
       
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'pass' =>'required',
            'cpass' =>'required',
        ]);
    }
}
