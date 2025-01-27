<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

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
          if ($request->hasFile('profile_picture')) {
               $image = $request->file('profile_picture');
               $imageName = time().'.'.$image->getClientOriginalExtension();
               $image->storeAs('public/profile_pictures', $imageName);  // Menyimpan gambar di storage/public/profile_pictures
               $user->profile_picture = $imageName;
           }
           
     }
     public function loginUser(Request $request){
          $request->validate([
               'email' => 'required|email',
               'password' => 'required|min:5|max:12'
          ]);
          $user = User::where('email','=', $request->email)->first();
          if($user){
               if(Hash::check($request->password, $user->password)) {
                    $request->session()->put('loginId', $user->id);
                    return redirect('/');
               }else{
                    return back()->with('fail','Password not matches.'); 
               }
          }else{
               return back()->with('fail','This email is not registered.');
          }
     }
     public function logout(Request $request)
     {
          $request->session()->forget('loginId');  // Menghapus ID pengguna dari session
          return redirect()->route('login');  // Mengarahkan kembali ke halaman login
     }

}
