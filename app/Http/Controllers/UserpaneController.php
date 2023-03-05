<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserpaneController extends Controller
{
    public function userpanel()
    {
        if (Auth::user()->roles != 'admin') {
            return view('index');
        } else {
            return redirect()->route('home');
        }
    }


    public function homepage()
    {
        return view('index');
    }
}
