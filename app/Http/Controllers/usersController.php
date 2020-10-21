<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class usersController extends Controller
{
   function addData(Request $req)
   {
        /* $users = new Users;
        $users->id=$req->id;
        $users->name=$req->name;
        $users->email=$req->email;
        $users->phone_no=$req->phone_no;
        $users->save(); */
        
        $users = new Users;
        $users->id=$req->id;
        $users->name=$req->name;
        $users->username=$req->username;
        $users->email=$req->email;
        $users->password=$req->password;
        $users->save(); 

   }
}
