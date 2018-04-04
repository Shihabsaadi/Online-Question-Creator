<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Question;
use Validator;
use DB;

class UserController extends Controller
{
    //
    public function index(){
    	return view('user.home');
    }

    

     public function showProfile(Request $request){
    	$member = DB::table('users_table')
            ->join('users_profile_table','users_table.user_id','users_profile_table.user_id')
            ->where('users_table.user_id',$request->session()->get('userid'))
            ->first();
        /*
        echo "<pre>";
        print_r($admin);
        echo "</pre>";
        */
        return view('user.profile')
            ->withMember($member);	
    }

     public function logout(Request $request){
     	$request->session()->flush();
     	return redirect()->route('Login.loginView');
    }
}
