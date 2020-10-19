<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class usersController extends Controller
{
   function addData(Request $req)
   {
        $users = new Users;
        $users->id=$req->id;
        $users->name=$req->name;
        $users->designation=$req->designation;
        $users->save();
   }
}
