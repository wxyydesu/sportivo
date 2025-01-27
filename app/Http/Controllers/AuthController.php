<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
     public function login()
     {
          return view("auth.login");
     }
     public function registration()
     {
          return view("auth.registration");
     }
     public function registerUser(Request $request)
     {
          $request->validate([
               'name' => 'required',
               'email' => 'required|email|unique:users',
               'password' => 'required|min:5|max:12'
          ]);
          $user = new User();
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = $request->password;
          $res = $user->save();
          if($res){
               return back()->with('success','You have registered successfully');
          }else{
               return back()->with('fail','Something Wrong');
          }
     }
}
