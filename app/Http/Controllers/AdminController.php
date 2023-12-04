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
        $data =User::where('user_id',$login_id)->get();
        
        return view('customer',compact('data','login_type'));
    }
    public function add(){
        return view('customer_add');
    }
    public function AddCustomer(Request $request){
       
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'password' =>'required',
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
            return redirect('customer');
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
            echo " approved succesfully done";
        }
    }
    public function edit(Request $request){
        $id = $request->query('id');
        // dd($id); 
        $data =User::where('id',$id)->get();
        return $data;
    }
    public function upStore(Request $request){

        $email =$request->eamil;
        $name =$request->name;
        $id =$request->id;
        $approve=User::where('id',$id)->update([
         'email' => $email,
         'name' => $name,
     ]);
         if($approve != false){
             echo " approved succesfully done";
             return back()->with('msg', 'approved succesfully done');
         }
     }
     public function Reject(Request $request){

        $id =$request->id;
        $approve=User::where('id',$id)->update([
         'reject' => '0',
     ]);
         if($approve != false){
             echo " Reject";
             return back()->with('msg', 'Reject');
         }
     }
}
