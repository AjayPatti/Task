<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
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
        ]);
        $data=[
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),

        ];
        dd($data);
            // app/Http/Controllers/Auth/RegisterController.php

 


        
    }
}
