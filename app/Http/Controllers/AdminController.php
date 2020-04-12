<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
     public function index(Request $req){
        
    	
    	return view('admin.index');
    }
    public function list(){
        $users = DB::table('users')->get();
        return view('admin.view_users', ['std' => $users]);
    }
    public function delete($id){
         $user = DB::table('users')->find($id);  
        return view('admin.delete', ['std' => $user]);

    }
    public function destroy($id, Request $req){
        $delete=DB::table('users')->where('id', $id)->delete();
        if ($delete) {
            return redirect()->route('home.list');
        }else{
            return redirect()->route('admin.delete');
        }

    }
    public function delete1($id){
        $delete=DB::table('add_info')->where('id', $id)->delete();
        if ($delete) {
             
            return redirect()->route('admin.requests')->with('message','rejected');
        }else{
            
            return redirect()->route('admin.requests');
        }

    }

     public function add(){
                return view('admin.createuser');

    }

    public function create(Request $req){

        $insert = DB::table('users')->insertGetId(
    ['email' => $req->email, 'user_name' => $req->user_name, 'password' => $req->password,'type' => $req->type]
);
                         
        if($insert){
            return redirect()->route('home.list');
        }else{
            return redirect()->route('add.user');
        }

    }
    public function profile($id){
       
        $user = DB::table('users')->find($id);  
        return view('admin.profile', ['std' => $user]);
    }

    public function edit($id){
         $user = DB::table('users')->find($id);  
        return view('admin.edit', ['std' => $user]);
    }

    public function update($id, Request $req){
       $update= DB::table('users')
            ->where('id', $id)
            ->update(['email' => $req->email,'user_name' => $req->user_name,'password' => $req->password,'type' => $req->type]);

             if($update){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('profile.edit');
        }

    }

    public function requests(){
        $users = DB::table('add_info')->get();
        return view('admin.requests', ['std' => $users]);
    }

    public function accept1($id, Request $req){
       $update= DB::table('add_info')
            ->where('id', $id)
            ->update(['country' => $req->country, 'city' => $req->city, 'placename' => $req->placename,'cost' => $req->cost,'travelmedium' => $req->travelmedium,'description' => $req->description,'scout_name' => $req->scout_name]);

             if($update){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('profile.edit');
        }

    }
    public function accept($id){
         $user = DB::table('add_info')->find($id);  
        return view('admin.accept', ['std' => $user]);
    }

    public function confirm($id, Request $req){
       $update= DB::table('add_info')
            ->where('id', $id)
            ->update(['country' => $req->country, 'city' => $req->city, 'placename' => $req->placename,'cost' => $req->cost,'travelmedium' => $req->travelmedium,'description' => $req->description,'scout_name' => $req->scout_name,'admin_name' => $req->admin_name]);

             if($update){
            return redirect()->route('admin.requests')->with('message','done');
        }else{
            return redirect()->route('admin.requests')->with('message','Not done');
        }

    }
    
}
