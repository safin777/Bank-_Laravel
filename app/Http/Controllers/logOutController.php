<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logOutController extends Controller
{
    public function logout(Request $req)
    {
    	$req->session()->flush();
    	return Redirect()->route('/');
    }
}
