<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // چک کردن اینکه آیا کاربر وجود دارد یا نه
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // اگر کاربر وجود دارد، لاگین انجام می‌دهیم
            if (Hash::check($request->password, $user->password)) {
                // توکن JWT یا هر سیستم احراز هویت دیگری را اینجا تولید کنید
                $token = $user->createToken('API Token')->plainTextToken;

                return response()->json(['token' => $token], 200);
            } else {
                return response()->json(['message' => 'Unauthorized'], 401);
            }
        } else {
            // اگر کاربر وجود ندارد، ثبت‌نام انجام می‌دهیم
            $newUser = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // توکن برای کاربر جدید تولید می‌کنیم
            $token = $newUser->createToken('API Token')->plainTextToken;

            return response()->json(['token' => $token], 201);
        }
    }
}
