<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{

    // Show login form
    public function login()
    {
        return view('login');
    }

    // Handle login authentication
    public function authenticate(Request $request): \Illuminate\Http\JsonResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return response()->json([
                'status' => 200,
                'message' => "Register Successfully"
            ]);
        }
        return response()->json([
            'status' => 400,
            'message' => "Kamu Telah Gagal"
        ]);
    }

    // Show register form
    public function register()
    {
        return view('register');
    }

    // Handle user registration
    public function store(Request $request)
    {
//        dd($request->input());
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        $validatedData['role_id'] = 2;
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('successMessage', 'Register successful! Please log in.');
    }

    public function storeAjax(Request $req){
        dd($req->input());
    }

    // Handle user session logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    // Handle user change name

    public function changeProfile()
    {
        return view('profile');
    }

    public function updateProfile(Request $request): RedirectResponse
    {
        $user = Auth::user();
        $user->name = $request['name'];
        $user->save();
        return back()->with('successMessage', 'Name changed successfully');
    }

    // Handle user change password
    public function changePassword()
    {
        return view('password');
    }

    // Change password for Auth User
    public function updatePassword(Request $request)
    {
        if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
            return back()->with('errorMessage', 'Your current password does not match');
        }
        if (strcmp($request->get('old_password'), $request->get('new_password')) === 0) {
            return back()->with('errorMessage', 'Your current password cannot be same with the new password');
        }
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed'
        ]);
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        return back()->with('successMessage', 'Password changed successfully');
    }
}




