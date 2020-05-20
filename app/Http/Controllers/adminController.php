<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\User;
use Validator;


class adminController extends Controller
{
    

    public function viewAdminInfo(Request $req)
    {
    	
    	if(session('uid')==null)
    	{
    		return redirect()->route('/');
    	}

    	else
    	{
    		$user=DB::table('users')
    		->where('uid',session('uid'))
    		->get();

    	//	return response()->json($user);
    	return view('admin.adminProfile',compact('user'));
    	}
    }



    public function getEditProfile (Request $req)
    {
     

    		$uid=$req->session()->get('uid');
    		$user=DB::table('users')
        ->select('users.*')
    		->where('uid',$uid)
    		->first();

    		//return response()->json($user);
    	return view('admin.editAdminProfile',compact('user'));
    	
    }
    	

      public function postEditProfile(Request $req)
    	{
    		 $validatedData = $req->validate([
    	   'uname'=>'required|max:25|min:6',
         'email'=>'required|max:70|min:8|regex:/(.+)@(.+)\.(.+)/i',
        'phone'=>'required|max:16|min:11',
        'balance'=>'required|max:16|min:3',
             ]);

          $uid=$req->session()->get('uid');
         $data=array();
        
         $data['uname']=$req->uname;
         $data['email']=$req->email;
         $data['phone']=$req->phone;
         $data['balance']=$req->balance;
         
              $user=DB::table('users')
              ->where('uid',$uid)
              ->update($data);
              if($user){
                $notification=array(
                    'messege'=>'Successfully Updated ',
                    'alert-type'=>'success'
                     );
        
                
                return redirect()->back()->with($notification);
               }

               else{
                    $notification=array(
                    'messege'=>'Can not Update ',
                    'alert-type'=>'error'
                     );
                    return redirect()->back()->with($notification);
               }
          
    	}


      public function getChangePassword()
      {
          return view ('admin.changePassword'); 

      }


      public function postPassword(Request $req)
      {
        $validatedData = $req->validate([
        'password' => 'required|max:12|min:6',
        'cpassword' => 'required_with:password|same:password|min:6',
       
             ]);
        $uid=$req->session()->get('uid');
         $data=array();
         $data['password']=$req->password;

         $user=DB::table('users')
              ->where('uid',$uid)
              ->update($data);
              
          if($user){
                $notification=array(
                    'messege'=>'Successfully Updated ',
                    'alert-type'=>'success'
                     );
        
                
                return redirect()->back()->with($notification);
               }

               else{
                    $notification=array(
                    'messege'=>'Can not Update ',
                    'alert-type'=>'error'
                     );
                    return redirect()->back()->with($notification);
               }

      }

    }



