<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('auth/login');
    }
}
