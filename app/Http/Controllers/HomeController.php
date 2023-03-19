<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Orders;
use App\Models\Payment;
use App\Models\Trust;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users_admin = Auth::user()->roles;
        if ($users_admin == 'admin') {
            $users = User::count();
            $books = Books::count();
            $orders = Orders::count();
            $payments = Payment::count();
            $trusts = Trust::count();
            return view('admin.index', compact(['users', 'books', 'orders', 'payments', 'trusts']));
        } 
        elseif ($users_admin == 'user') {
            return redirect()->url('http://localhost:5173');
        }
    }
}
