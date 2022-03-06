<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
            $users = User::query()->inRandomOrder()->limit(6)->get();
            return response($users);
    }
}
