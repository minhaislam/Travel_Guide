<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
     public function index(Request $req){
     	
    	$users = DB::table('add_info')->get();
    	return view('user.index',['std'=> $users]);
    }

    public function profile($id){
       
        $user = DB::table('users')->find($id);  
        return view('user.profile', ['std' => $user]);
    }


    public function edit($id){
         $user = DB::table('users')->find($id);  
        return view('user.edit', ['std' => $user]);
    }

    public function update($id, Request $req){
       $update= DB::table('users')
            ->where('id', $id)
            ->update(['email' => $req->email,'user_name' => $req->user_name,'password' => $req->password,'type' => $req->type]);

             if($update){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('profile2.edit');
        }

    }   
        
       
public function details($id){
        $user = DB::table('add_info')->find($id);
        
        return view('User.details', ['s' => $user]);
}

}