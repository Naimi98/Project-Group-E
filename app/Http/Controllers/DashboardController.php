<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user')){
            return view('user.userdashboard');
        }elseif(Auth::user()->hasRole('librarian')){
            return view('librarian.librariandashboard');
        }
    }

}
