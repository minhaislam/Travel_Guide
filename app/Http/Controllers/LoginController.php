<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
    	
    	return view('login.index');
    }
    public function login(Request $req){
    	
    	$user = DB::table('users')
                    ->where('email', $req->email)
                    ->where('password', $req->password)
                    ->first();
        
        if($user != null){
        	if($user->type=='admin'){
        		$req->session()->put('user_name',$user->user_name);
            return redirect()->route('admin.index');
        	}
        	elseif($user->type=='scout'){
        		$req->session()->put('user_name',$user->user_name);
            return redirect()->route('scout.index');
        	}
        	elseif($user->type=='user'){
        		$req->session()->put('user_name',$user->user_name);
            return redirect()->route('user.index');
        	}
            
        }else{
            $req->session()->flash('msg', 'invalid username/password');
            //return view('login.index');
            return redirect('login.index');
        }
    }

    

}
