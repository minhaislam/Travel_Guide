<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class registrationController extends Controller
{
    public function index(){
    	
    	return view('registration.index');
    }
    public function register(Request $req){
    	$register = DB::table('users')->insertGetId(
    ['email' => $req->email, 'user_name' => $req->user_name, 'password' => $req->password,'type' => $req->type]
);
                         
        if($register){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('registration.user');
        }
    	
    	
    }
}
