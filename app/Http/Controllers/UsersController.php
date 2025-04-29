<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function register (Request $request)
    {
        $id = mt_rand(1000000000000000, 9999999999999999);
        $data = [
            'user_nama' => $request->input('nama'),
            'user_alamat' => $request->input('alamat'),
            'user_username' => $request->input('username'),
            'user_email' => $request->input('email'),
            'user_notelp' => $request->input('notelp'),
            'user_password' => bcrypt($request->input('password'))
        ];

        $user = Users::register($data);

        if ($user) {
            return redirect()->route('login')->with('success', 'Pendaftaran akun berha
            sil!');
        } else {
            return back()->withInput();
        }
    }

    public function login(Request $request)
    {
        $credentials = [
            'user_username' => $request->input('user_username'),
            'user_password' => $request->input('user_password'),
        ];

        $user = Users::where('user_username', $credentials['user_username'])->first();

        if ($user && Hash::check($credentials['user_password'], $user->user_password)) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            return back()->withErrors([
                'message' => 'Username atau password Anda salah.',
            ]);
        }
    }


}
