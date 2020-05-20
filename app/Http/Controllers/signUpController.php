<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\User;
use Validator;

class signUpController extends Controller
{
   public function showSignUpPage()
   {
     return view ('login.signup');

   }

   public function postSignUp(Request $req)
   {
   	        $validatedData = $req->validate([
        'uname' => 'required|max:25|min:6|unique:users',
        'email' => 'required|max:70|min:8 |unique:users|regex:/(.+)@(.+)\.(.+)/i',
        'password' => 'required|max:12|min:6',
       'cpassword' => 'required_with:password|same:password|min:6',
        'image' => 'required|mimes:jpeg,jpg,png',
        'phone' => 'required|max:16|min:11|unique:users',
             ]);
         $data=array();
        
         $data['uname']=$req->uname;
         $data['email']=$req->email;
         $data['phone']=$req->phone;
         $data['password']=$req->password;
         $data['gender']=$req->gender;
         $data['balance']='300';
         $data['status']='active';
          $data['type']='customer';
          $image=$req->file('image');
         if ($image)
         {
           $imageName= Str::random(5
           );     
                $ext=strtolower($image->getClientOriginalExtension());
                $imageFullName=$imageName.'.'.$ext;
                $uploadPath='public/design/image/';
                $imageUrl=$uploadPath.$imageFullName;
                $success=$image->move($uploadPath,$imageFullName);
                $data['image']=$imageUrl;
                DB::table('users')->insert($data);
                 return Redirect()->back();
               
         }
        else
            {
               DB::table('users')->insert($data);
                return Redirect()->back();
            }
        

   }
}
