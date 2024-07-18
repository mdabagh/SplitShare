<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function index(){
        return view('auth');
    }


    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    }


    public function googleCallback(){
        $githubUser = Socialite::driver('github')->user();

        $user = User::updateOrCreate([
            'google_id' => $githubUser->id,
        ], [
            'name' => $githubUser->name,
            'email' => $githubUser->email
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

}
