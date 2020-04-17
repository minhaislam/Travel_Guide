<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Requests\ValidRequest;
use Illuminate\Support\Facades\DB;

class registrationController extends Controller
{
    public function index(){
    	
    	return view('registration.index');
    }

    
    public function register(ValidRequest $validated){

       /* $validated = $req->validate([
        'email'=>'required',
            'user_name'=>'required',
            'password'=>'required',
            'type'=>'required',
    ]);*/
        //var_dump($validated);

         $register = new user();
        $register->email=$validated['email'];
        $register->user_name=$validated['user_name'];
        $register->password=$validated['password'];
        $register->type=$validated['type'];
    	//$register = DB::table('users')->insertGetId($validated);
                         
        if($register->save()){
            return redirect()->route('login.index');

       }else{
           return redirect()->route('registration.user');
        }
    	
    
    }	
    
}
