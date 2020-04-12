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
            $req->session()->put('user',$user);
        	if($user->type=='admin'){
        		                             
                return redirect()->route('admin.index');
        	}
        	elseif($user->type=='scout'){   

                return redirect()->route('scout.index');
        	}
        	elseif($user->type=='user'){    
                      
                return redirect()->route('user.index');
        	}
            
        }else{
            $req->session()->flash('msg', 'invalid username/password');
            //return view('login.index');
            return redirect('login.index');
        }
    }

    

}
