<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cart["cart"] = DB::table('orders')
            ->join('books', 'orders.book_id', '=', 'books.id' , 'api_token', '=',$request->session()->get('api_token'))
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select([
                'orders.id as id',
                'total_prices',
                'type_pay',
                'users.name',
                'books.book_name',
                'books.book_title'
            ])->get();

        return $cart;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'user_id'=>'required',
        //     'book_id'=>'required',
        //     'total_prices'=>'required',
        //     'type_pay'=>'required',
        // ]);
        // Orders::create([
        //     'user_id' =>$request->user_id,
        //     'book_id' => $request->book_id,
        //     'total_prices' => str_replace(',','',$request->total_prices),
        //     'type_pay' => $request->type_pay,
        // ]);
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
        $request->validate([
            'total_prices'=>'required',
            'type_pay'=>'required',
        ]);
        $orders = Orders::find($id);
        $orders->update([
            'user_id' => $request->session()->get('id'),
            'book_id' => $request->book_id,
            'total_prices' => str_replace(',','',$request->total_prices),
            'type_pay' => $request->type_pay,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        return Orders::destroy($request->id);
    }

    // public function create_cart(Request $request)
    // {
    //     $request->validate([
    //         'user_id'=>'required',
    //         'book_id'=>'required',
    //         'total_prices'=>'required',
    //         'type_pay'=>'required',
    //     ]);
    //     Orders::create([
    //         'user_id' =>$request->user_id,
    //         'book_id' => $request->book_id,
    //         'total_prices' =>$request->total_prices,
    //         'type_pay' => $request->type_pay,
    //     ]);
    // }
}
