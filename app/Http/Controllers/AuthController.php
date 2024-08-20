<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function index(){
        return view('auth');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'], // Validate email uniqueness
            'password' => ['required'],
        ]);


        // Attempt login using Laravel's Auth facade
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        // Authentication failed: Create user if email doesn't exist


        $user = User::firstOrCreate(
            ['email' => $request->email, 'password' => bcrypt($request->password)],
            ['name' => explode('@', $request->email)[0]]
        );

        //dd($user);

        // Login the newly created user (optional, depending on your needs)
        if (Auth::login($user)) {
            return redirect()->intended('home');  // Redirect to dashboard
        } else {
            return back()->withErrors(['error' => 'User creation failed.']); // Handle creation error
        }
    }

    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    }


    public function googleCallback(){
        $githubUser = Socialite::driver('github')->user();

        $user = User::updateOrCreate([
            'github_id' => $githubUser->id,
        ], [
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

}
