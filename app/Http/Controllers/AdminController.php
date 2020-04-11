<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
     public function index(){
    	
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
    
}
