<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function listuser()
    {
        $users['users_list'] = DB::table('users')
        ->select([
            'id',
            'name',
            'email',
            'username',
            'api_token',
        ])->get();
        return $users;
    }
}
