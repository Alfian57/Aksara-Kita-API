<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            $user = User::where('username', $request->username)->firstOrFail();
            $token = $user->createToken('token')->plainTextToken;
            return response()->login('Success to login', $user->toArray(), $token, Response::HTTP_OK);
        }

        return response()->failed('Username or Password invalid', Response::HTTP_UNAUTHORIZED);
    }

    public function register(RegisterRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['password'] = Hash::make($request->password);
        $user = User::create($validatedData);
        return response()->success('Success to register', $user->toArray(), Response::HTTP_CREATED);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->success('Success to logout', $request->user()->toArray(), Response::HTTP_OK);
    }
}
