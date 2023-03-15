<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Doctrine\Common\Lexer\Token;
use Illuminate\Support\Facades\DB;

class AuthWithApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token = DB::table('users')->select([
            'api_token'
        ])->get();
        dd($token);
        // dd($request->auth_api);
        // $token = User::where('api_token',$api_token);
        // if($token){
            return $next($request);
        // }
        return url("http://localhost:5174");
    }
}
