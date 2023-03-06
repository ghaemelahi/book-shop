<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserpaneController extends Controller
{
    public function userpanel()
    {
        if (Auth::user()->roles != 'admin') {
            $count_trust = DB::table('trusts')
            ->count('');
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
