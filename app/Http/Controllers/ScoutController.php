<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoutController extends Controller
{
     public function index(){
    	
    	return view('scout.index');
    }
}
