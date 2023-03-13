<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TestApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books['favorite_books'] = DB::table('books')
        ->select([
            'books.id as id',
            'book_name','description',
        ])
        ->selectRaw('(select book__images.path_image from book__images where books_id = books.id limit 1) as path_image')
        ->limit(4)->get();

        $books['best_books'] = DB::table('books')
        ->select([
            'books.id as id',
            'book_name','description','electronic_price',
        ])
        ->selectRaw('(select book__images.path_image from book__images where books_id = books.id limit 1) as path_image')
        ->get();
        // $value = $request->header('Access-Control-Allow-Origin', '*');
        return $books;
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

    public function  FunctionName(Request $request)
    {
        if(auth()->attempt(['email'=>$request->input('email') , 'password'=>$request->input('password')])){
            $user=auth()->user();
            $user->api_token = Str::random(60);
            // $user->save();
            return $user;
        }
    }
}
