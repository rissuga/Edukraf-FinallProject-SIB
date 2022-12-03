<?php

namespace App\Http\Controllers\backend;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout() {
        Auth::logout();
        return Redirect()->route('login');
    }
}
