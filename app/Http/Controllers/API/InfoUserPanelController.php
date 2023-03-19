<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Trust;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InfoUserPanelController extends Controller
{
    public function my_acount(Request $request, $id)
    {
        $count_trust['count_trust'] = Trust::find($id)->count();
        return $count_trust;

        $count_orders['count_orders'] = Orders::find($id)->count();
        return $count_orders;

        $user_info['user_info'] = User::find($id)->get();
        return $user_info;
    }

    public function user_trust(Request $request, $id)
    {
        $user_trust['user_trust'] = Trust::find($id)->get();
        return $user_trust;
    }

    public function user_orders(Request $request, $id)
    {
        $user_orders['user_orders'] = Orders::find($id)->get();
        return $user_orders;
    }

    public function user_info(Request $request,$id)
    {
        $user_info['user_info'] = User::find($id)->get();
        return $user_info;
    }

    public function edit_user(Request $request, $id)
    {
        $users = User::find($id);
        $users->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'IP' => request()->ip(),
        ]);
    }
}
