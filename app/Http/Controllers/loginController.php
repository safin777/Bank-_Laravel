<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\User;
use Validator;

class loginController extends Controller
{
   public function index ()
   {
   	return view ('admin.index');
   }
   
   public function loginPage()
   {

   	return view('login.login');
   }

   public function login(Request $req)
   {
      $validatedData = $req->validate([
        'uname' => 'required',
        'password' => 'required',
             ]); 

       $uname = $req->uname;
    	$password = $req->password;
     
        $user = DB::table('users')
                ->where('uname', $uname)
                ->where('password', $password)
                ->first();

		if($user != null && $user->status=="active"){
            if($user->type == "admin"){
                $req->session()->put('uid',$user->uid);
    			return view ('admin.index',compact('user'));
            }
            elseif($user->type == "agent"){
               //$request->session()->put('email', $email);
                return view ('agent.index',compact('user'));
            }

            elseif($user->type == "
            	employee"){
               //$request->session()->put('email', $email);
                return view ('employee.index',compact('user'));
            }

            else{
               //$request->session()->put('email', $email);
                return view ('customer.index',compact('user'));
            }
		}
        else{
			
			//$request->session()->flash('message', 'Invalid email or password');
			//return redirect()->route('login', ['email'=>$email]);

			return view ('login.login');
		}
    
         
   }
        
           

}
