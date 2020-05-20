<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\User;
use Validator;

class employeeController extends Controller
{
    public function addEmployee(Request $req)
    {
    	return view ('employee.addEmployee');
    }

    public function postAddEmployee(Request $req)
    {
            $validatedData = $req->validate([
        'uname' => 'required|max:25|min:6|unique:users',
        'email' => 'required|max:70|min:8 |unique:users|regex:/(.+)@(.+)\.(.+)/i',
        'password' => 'required|max:12|min:6',
       'cpassword' => 'required_with:password|same:password|min:6',
        'image' => 'mimes:jpeg,jpg,png',
        'phone' => 'required|max:16|min:11|unique:users',
             ]);
        
         $data=array();
        
         $data['uname']=$req->uname;
         $data['email']=$req->email;
         $data['phone']=$req->phone;
         $data['password']=$req->password;
         $data['gender']=$req->gender;
         $data['balance']=$req->balance;
         $data['status']=$req->status;
          $data['type']='employee';
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


         public function employeeList()
         {
         	 $user=DB::table('users')
         	 ->where('type','employee')
         	 ->get();
        return view ('employee.employeeList',compact('user'));
         }
      
    public function getUpdate($uid)
    {
        $user=DB::table('users')->where('uid',$uid)->first();
        return view ('employee.updateEmployee',compact('user'));

    }

    public function postUpdate(Request $req,$uid)
    {
           $validatedData = $req->validate([
        'uname' => 'required|max:25|min:6',
        'email' => 'required|max:70|min:8|regex:/(.+)@(.+)\.(.+)/i',
        'password' => 'required|max:12|min:6',
        'phone' => 'required|max:16|min:11',
        'balance' => 'required|max:16|min:2',
        'status' => 'required',
        'gender' => 'required',
        'type' => 'required',

             ]);
         
          $data=array();
        
         $data['uname']=$req->uname;
         $data['email']=$req->email;
         $data['phone']=$req->phone;
         $data['password']=$req->password;
         $data['gender']=$req->gender;
         $data['balance']=$req->balance;
         $data['status']=$req->status;
          $data['type']=$req->type;
         

         $catagory=DB::table('users')->where('uid',$uid)->update($data); 

         return Redirect('employee/list');   

    }


     public function view($uid)
    {
        $user=DB::table('users')->where('uid',$uid)->get();
        return view ('employee.viewEmployee',compact('user'));

    }



 public function deleteEmployee($uid)
    {
        $User=DB::table('users')->where('uid',$uid)->delete();
        return Redirect()->back();
    }
    





    
    }

