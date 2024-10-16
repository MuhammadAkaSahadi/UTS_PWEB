<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');  // Mengarahkan ke view dashboard.blade.php
    }

    // public function user()
    // {
    //     return view('admin.user');
    // }

    // public function list_user(){
    //     return view('admin.pages.user.index');
    // }

    public function login() {
        return view('admin.pages.login');
    }

    public function contact() {
        return view('admin.pages.contact');
    }

    public function sign_up() {
        return view('admin.pages.sign_up');
    }
}
