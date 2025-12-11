<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function signupview(){
        return view('Auth.signup');
    }
    public function signinview(){
        return view('Auth.signin');
    }

    public function signupcomplete(Request $request){
        $request->validate([
            'full_name' => 'required|string|max:255',
            'username'  => 'required|string|max:255|unique:users,username',
            'email'     => 'required|email|max:255|unique:users,email',
            'phone'     => 'required|string|max:20|unique:users,phone',
            'password'  => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'full_name' => $request->full_name,
            'username'  => $request->username,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'password'  => Hash::make($request->password),
        ]);

        auth()->login($user);

        return redirect('/dashboard')->with('success','Your Account Has Been Created!');
    }

    public function signincomplete(Request $request)
    {
        $request->validate([
            // Use 'email' or 'username' depending on your authentication field
            'email'    => 'required|email', 
            'password' => 'required|min:6',
        ]);

        // 1. Prepare the credentials array
        $credentials = $request->only('email', 'password');
        
        // 2. Determine the 'remember' status (converts the form input to a boolean)
        // This is necessary because $request->remember will be null or "on"
        $remember = $request->filled('remember'); 

        // 3. Attempt to authenticate the user, passing the credentials and the boolean status
        if (Auth::attempt($credentials, $remember)) {
            // Regeneration of the session ID is a security best practice after login
            $request->session()->regenerate(); 
            
            return redirect('/dashboard')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->withInput();
    }

    // Logout User
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/signin');
    }
}
