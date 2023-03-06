<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(50);
        return view('admin.users.list', compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        if (!$request->expectsJson()) {
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'username' => ['required', 'string', 'max:255', 'unique:users'],
                'phone' => ['required', 'max:16', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'phone' => 'unique:users|regex:/(09)[0-9]{9}/',
            ], [
                'email.regex' => 'فیلد ایمیل نامعتبر است.',
                'email.unique' => 'کاربر با این ایمیل قبلا ثبت شده است.',
            ]);
        }
        if ($validator->fails()) {
            if ($request->expectsJson()) {
                return response()->json(['status' => 'error']);
            }
        } else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->input('password')),
                'IP' => request()->ip(),
                'api_token' => Str::random(60),
            ]);

            if ($request->expectsJson()) {
                return response()->json(['status' => 'success', 'id' => $user->id]);
            } elseif(auth()->user()->roles=='admin') {
                return redirect()->route('home');
            }elseif(auth()->user()->roles == 'user'){
                return url('http://digikala.com');
            }
        }
    }

    public function login(Request $request){
        $validData = $this->validate($request,[
           'email'=>'required|exists:users',
           'password'=>'required'
       ]);
       if(! auth()->attempt($validData)){
           return response()->json([
               'errors' => [
                   'error' => ["نام کاربری یا رمز عبور اشتباه است. لطفا دوباره سعی کنید."]
               ]], 422);
       }
       $user = User::where('phone', $request->phone)->first();
       return response()->json(['id'=>$user->id, 'fname'=>$user->first_name, 'lname'=>$user->last_name, 'type'=>$user->type]);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);

        return view('admin.users.edit', compact(['users']));
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
        // dd($request);
        $user = User::find($id);
        $user->update([
            'roles' => $request->roles,
        ]);
        return redirect()->route('users.index')->with('update', 'سمت کاربر با موفقیت تغیر یافت');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user->roles == 'admin') {
            return redirect()->route('users.index')->with('delete', ' ادمین سامانه ' . $user->name . ' را نمی توان حذف کرد ');
        } elseif ($user->roles == 'user') {
            $user->delete();
            return redirect()->route('users.index')->with('delete', ' کاربر ' . $user->name . ' با موفقیت حذف شد ');
        }
    }
}
