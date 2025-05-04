<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicController extends Controller
{
    public function dashboard () {
        return view('public.dashboard');
    }

    public function dashboardadmin () {
        return view('public.admindashboard');
    }

    public function setting () {
        return view('public.setting');
    }

    public function book () {
        return view('public.book');
    }

    public function activity () {
        return view('public.activity');
    }

    public function register () {
        return view('public.register');
    }

    public function login () {
        return view('public.login');
    }
}
