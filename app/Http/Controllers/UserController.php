<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\add_info;
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
       $users = DB::table('user_comment')->get();
        
        return view('User.details', ['s' => $user , 'std' => $users ]);
}


public function comment($id,Request $req){

        $insert = DB::table('user_comment')->insertGetId(
    ['comment' => $req->comment, 'place_id' => $req->place_id, 'commentator_id' => $req->commentator_id]
);
                         
        if($insert){
            return redirect()->route('user.details',['id'=>$id])->with('message','comment posted');
        }else{
            return redirect()->route('user.details',['id'=>$id])->with('message','comment not posted');
        }

    }


     public function search(){
        $data = add_info::orderBy('country', 'asc');

        if (request()->country != '') {
            $data->where('country', request()->country);
           
        }

        if (request()->city != '') {
            $data->where('city', request()->city);
            
        }
        
        if (request()->placename != '') {
            $data->where('placename', request()->placename);
        }
        
        if (request()->cost != '') {
            $data->where('cost', '<', request()->cost);

        }

        
        return view('user.searchresult', ['result' => $data->get() ]);
       
    
    }

}