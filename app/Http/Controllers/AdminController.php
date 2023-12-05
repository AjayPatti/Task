<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;
class AdminController extends Controller
{
    public function Customer(Request $request){
        $login_id =Auth::user()->id;
        $login_type=Auth::user()->login_type;

        if($login_type =='user'){
            $data =User::where('user_id',$login_id)->get();
        }else{
            $data =User::where('user_id',$login_id)->get();
        }
        return view('customer',compact('data','login_type'));
    }
    public function add(){
        return view('customer_add');
    }
    public function AddCustomer(Request $request){
       
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        try{
            $data=[
                'name' => $request['name'],
                'email' => $request['email'],
                'login_type' =>'user',
                'user_id'=>Auth::user()->id,
                'password' => Hash::make($request['password']),
    
            ];
          $insert =  User::create($data);  
          if($insert != false){
            return ['status'=> true];
          }  

        }catch(\Exception $e){
            return $e;
        } 
    }
    public function ApproveStatus(Request $request){

       $id =$request->id;
       $approve=User::where('id',$id)->update([
        'approve_status' => '1',
    ]);
        if($approve != false){
           return ['status'=>true];
        }
    }
    public function edit(Request $request){
        $id = $request->query('id');
        // dd($id); 
        $data =User::where('id',$id)->get();
        return $data;
    }
    public function UpdateStore(Request $request){

        $email =$request->email;
        $name =$request->name;
        $id =$request->id;
        $approve=User::where('id',$id)->update([
         'email' => $email,
         'name' => $name,
     ]);
         if($approve != false){
              return['status' =>true];
         }
     }
     public function Reject(Request $request){

        $id =$request->id;
        $approve=User::where('id',$id)->update([
         'reject' => '0',
     ]);
         if($approve != false){
            return['status' =>true];
         }
     }
     public function authCheck(){
        $login_type=Auth::user()->login_type;

        return view('navbar',compact('login_type'));
     }
}
