<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //register
    public function register(Request $request)
    {
        $attrs = $request->validate(
            [
                'user_name' => 'required|',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:9|confirmed'
            ]
        );
        //create user
        $user = User::create([
            'user_name' => $attrs['user_name'],
        'email' =>$attrs['email'],
        'password' =>bcrypt($attrs['password'])
        ]);

        //return user token and id
        return response([
            'user' => $user,
            'token' => $user->createToken('secret')->plainTextToken
        ], 200);
    }

    //login user
    public function login(Request $request){
        $attrs = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:9'
            ]
        );
        //attemp login
        if(!Auth::attempt($attrs))
        {
          return response([
              'message' => 'Invalid Credentials.',
          ], 403);
        }

        //return user token and id
        return response([
            'user' => auth()->user(),
            'token' => auth()->user()->createToken('secret')->plainTextToken
        ], 200);
    }


    //logout
    public function logout(){
        auth()->user()->tokens()->delete();
        return response([
            'message' => 'Logout successfully.'
        ], 200);
    }

    //get user detail

    public function user(){
        return response([
            'user' => auth()->user()
        ], 200);
    }

}
