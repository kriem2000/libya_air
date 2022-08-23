<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class UserController extends Controller
{
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            "email" => "required|email|unique:users,email",
            "full_name" => "required|alpha|min:3|max:100",
            "passport_num" => "required|alpha_num",
            "phone_num" => "nullable|digits:10",
            "password" => "required|min:8|max:20",
        ] );


        if ($validator->fails()) {
          return response()->json([
            'success' => false,
            'message' => $validator->errors(),
          ], 401);
        } else {
            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);
            $success['token'] = $user->createToken('appToken')->accessToken;
            return response()->json([
            'success' => true,
            'token' => $success,
            'user' => $user
        ]);
        }

    }

    public function login() {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('appToken')->accessToken;
           //After successfull authentication, notice how I return json parameters
            return response()->json([
              'success' => true,
              'token' => $success,
              'user' => $user
          ], 200);
        } else {
       //if authentication is unsuccessfull, notice how I return json parameters
          return response()->json([
            'success' => false,
            'message' => 'Invalid Email or Password',
        ], 401);
        }
    }


    public function logout()
    {
      if (Auth::user()) {
        $user = Auth::user()->token();
        $user->revoke();

        return response()->json([
          'success' => true,
          'message' => 'Logout successfully'
      ], 200);
      }else {
        return response()->json([
          'success' => false,
          'message' => 'Unable to Logout'
        ] ,401);
      }
     }
}
