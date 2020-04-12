<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class ScoutController extends Controller
{
     public function index(Request $req){
     	
    	
    	return view('scout.index');
    }

    public function addinfo(Request $req){
        
        
        return view('scout.addinfo');
    }

    public function add(Request $req){

        $insert = DB::table('add_info')->insertGetId(
    ['country' => $req->country, 'city' => $req->city, 'placename' => $req->placename,'cost' => $req->cost,'travelmedium' => $req->travelmedium,'description' => $req->description,'scout_name' => $req->scout_name]
);
                         
        if($insert){
            return redirect()->route('scout.index')->with('message','added');
        }else{
            return redirect()->route('scout.index')->with('message','not added');
        }

    }

     public function profile($id){
       
        $user = DB::table('users')->find($id);  
        return view('scout.profile', ['std' => $user]);
    }
    public function edit($id){
         $user = DB::table('users')->find($id);  
        return view('scout.edit', ['std' => $user]);
    }
    public function update($id, Request $req){
       $update= DB::table('users')
            ->where('id', $id)
            ->update(['email' => $req->email,'user_name' => $req->user_name,'password' => $req->password,'type' => $req->type]);

             if($update){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('profile1.edit');
        }

    }
}
