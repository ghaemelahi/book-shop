<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Orders;
use App\Models\Payment;
use App\Models\Trust;
use App\Models\User;
use Illuminate\Http\Request;
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
        $users = User::count();
        $books = Books::count();
        $orders = Orders::count();
        $payments = Payment::count();
        $trusts = Trust::count();
        $users_admin = Auth::user()->roles;
        // dd($users_admin);
        if($users_admin == 'admin'){
            return view('admin.index',compact(['users','books','orders','payments','trusts']));
        }
        elseif($users_admin == 'user'){
            return redirect()->route('userpanel');
        }
    }
    
}
