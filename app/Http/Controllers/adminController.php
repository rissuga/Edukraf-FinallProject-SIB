<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function logout() {
        Auth::logout();
        return Redirect()->route('login');
    }
}
