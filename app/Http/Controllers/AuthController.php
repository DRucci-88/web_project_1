<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

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
        //        dd($request->input());
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        //        $credentials['password'] = Hash::make($credentials['password']);

        //        dd($credentials);
        //        $tempo = Account::query()->where([
        //            ['email', $credentials['email']],
        //            ['password', $credentials['password']]
        //        ])->get();
        //        $tempo = Account::where('email', $credentials['email'])
        //            ->where('password',Hash::check($credentials['password']))
        //            ->get();
        //        $tempo = Account::query()->where('email', $credentials['email'])->get();
        //        $tempo = Account::query()->where('password', 'admin12345')->get();
        //        dd($tempo);

        $user = Account::query()->where('email', $credentials['email'])->first();
        if ($user !== null) {
            if (Hash::check($credentials['password'], $user['password'])) {
                session(['auth' => $user]);
                return response()->json([
                    'status' => 200,
                    'message' => "Register Successfully"
                ]);
            }
            //            dd($user);
        }
        //        dd('Tewas');
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
        //        dd($request->file());
        $validatedData = $request->validate([
            'first_name' => ['required', 'max:25'],
            'middle_name' => ['max:25'],
            'last_name' => ['required', 'max:25'],
            'gender_id' => ['required', 'integer'],
            'email' => ['required', 'email', 'unique:accounts'],
            'role_id' => ['required', 'integer'],
            'password' => ['required', 'min:8'],
            'display_picture_link' => ['required', 'mimes:jpg,jpeg,png'],
        ]);
        $coverName = '';
        if ($request->file('display_picture_link')) {
            $coverName = time() . '_' . $request->file('display_picture_link')->getClientOriginalName();
            $request->file('display_picture_link')->move(public_path('img'), $coverName);
        }

        $validatedData['role_id'] = 2;
        $validatedData['display_picture_link'] = $coverName;
        $validatedData['password'] = Hash::make($validatedData['password']);

        Account::create($validatedData);

        return redirect('/login');
    }

    // Handle user session logout
    public function logout(Request $request)
    {
        //        Auth::logout();
        //        $request->session()->invalidate();
        //        $request->session()->regenerateToken();
        session()->flush();
        return redirect('/')->with('message', 'Logout successful! Please log in.');
    }

    // Handle user change name

    public function profile()
    {
        if (session()->has('auth')) {
            $account = session('auth');
            return view('profile', [
                'account' => $account
            ]);
        }
        else {
            return redirect('/');
        }
    }

    public function updateProfile(Request $request)
    {
        // dd($request->input());
        // dd($request->file());
        $validatedData = $request->validate([
            'first_name' => ['required', 'max:25'],
            'middle_name' => ['max:25'],
            'last_name' => ['required', 'max:25'],
            'gender_id' => ['required', 'integer'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
            'display_picture_link' => ['required'],
            'new_display_picture_link' => ['mimes:jpg,jpeg,png'],
        ]);
        $coverName = $request['display_picture_link'];
        if($request->file('new_display_picture_link')){
            $coverName = time().'_'.$request->file('new_display_picture_link')->getClientOriginalName();
            $request->file('new_display_picture_link')->move(public_path('img'), $coverName);
            File::delete(public_path('img/'.$request['display_picture_link']));
            unset($validatedData['new_display_picture_link']);
        }
        unset($validatedData['id']);
        $validatedData['display_picture_link'] = $coverName;

        // dd($validatedData);

        // $newProfile = Account::updateOrCreate(
        //     ['id' => $request['id']],
        //     $validatedData
        // );

        $newProfile = Account::all()->find($request['id']);
        $newProfile->first_name = $validatedData['first_name'];
        $newProfile->middle_name = $validatedData['middle_name'];
        $newProfile->last_name = $validatedData['last_name'];
        $newProfile->gender_id = $validatedData['gender_id'];
        $newProfile->email = $validatedData['email'];
        $newProfile->password = Hash::make($validatedData['password']);
        $newProfile->display_picture_link = $validatedData['display_picture_link'];

        $newProfile->save();

        session(['auth' => $newProfile]);

        // dd($newProfile);
        return redirect('/')->with('message', 'Profile changed successfully');
    }

    // Handle user change password
    public function changePassword()
    {
        return view('password');
    }

}
