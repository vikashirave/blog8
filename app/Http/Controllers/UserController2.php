<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;


class UserController2 extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['username'=>$req->username])->first();
       //return $req->input();
       //return $user->password;
       if(!$user || !Hash::check($req->password,$user->password))
       {
               return "username or password not match";
       }
       else
       {
            $req->session()->put('user', $user);
              return redirect('/');
       }

    }
}
