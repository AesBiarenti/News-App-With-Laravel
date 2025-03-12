<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create_user(CreateUserRequest $request){
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return response()->json([
            'status'=>true,
            'message'=>"Kullanıcı Kaydı Başarılı",
            'data'=>$user,
        ]);
    }
    public function login(LoginUserRequest $request){
        $user = Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
        if (!$user) {
            return response()->json([
                'status'=>false,
                'message'=>'kullanıcı bulunamadı',
            ]);
        }
        return response()->json([
            'status'=>true,
            'message'=>'giriş başarılı',
            'data'=>Auth::user(),
        ]);
    }
    public function logout(LoginUserRequest $request){
        $user = Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
        if (!$user) {
            return response()->json([
                'status'=>false,
                'message'=>'kullanıcı bulunamadı',
            ]);
        }
        Auth::logout();
        return response()->json([
            'status'=>true,
            'message'=>'Çıkış İşlemi Başarılı'
        ]);
    }
}
