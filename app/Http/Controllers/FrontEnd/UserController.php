<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function register(){
    	return view('frontEnd.user.register');
    }
    public function registerSave(Request $request){
        $obj=new User();
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->password=$request->password;
        $obj->save();


    }
}
