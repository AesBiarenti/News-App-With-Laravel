<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create_user(CreateUserRequest $request){
        dd('123');
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return response()->json([
            'status'=>true,
            'message'=>"Kullanıcı Kaydı Başarılı",
            'user'=>$user,
        ]);
    }
}
