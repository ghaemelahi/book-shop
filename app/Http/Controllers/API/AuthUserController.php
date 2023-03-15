<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class AuthUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'phone' => ['required', 'max:16', 'unique:users'],
    //         'username' => ['required', 'string', 'max:255', 'min:5', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }
    protected function register(Request $request)
    {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'IP' => request()->ip(),
            'api_token' => Str::random(60),
        ]);
    }
    public function login(Request $request)
    {
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = auth()->user();
            $user->api_token = Str::random(60);
            $user->save();
            return $user;
        }
        return response()->json([
            'error' => 'احراز هویت کاربر با شکست مواجه شد'
        ], 401);
        // $this->validateLogin($request);
        // $user = User::where('email',$request->email)->first();
        // if(!$user || !Hash::check($request->password,$user->password)){
        //     return ["error"=>"ایمیل یا مرز عبور وارد شده معتبر نمیباشد"];
        // }



        // if ($this->attemptLogin($request)) {
        //     if ($request->hasSession()) {
        //         $request->session()->put('auth.password_confirmed_at', time());
        //     }

        //     return $this->sendLoginResponse($request);
        // }


        // $this->incrementLoginAttempts($request);

        // return $this->sendFailedLoginResponse($request);
        // return $user;
    }

    public function logout(Request $request)
    {
        if (auth()->user()) {
            $user = auth()->user();
            $user->api_token == null;
            $user->save();

            return response()->json([
                'msg' => 'کاربر گرامی ممنون از اینکه از سامانه ما استفاده کرده اید'
            ]);
        }
        return response()->json([
            'error' => 'خروج از سیستم با موفقیت انجام نشد'
        ], 401);
    }
}
