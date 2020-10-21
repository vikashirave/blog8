<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;


class UserController2 extends Controller
{
    function login(Request $req)
    {
        return User::where(['username'=>$req->username])->first();
       //return $req->input();
    }
}
