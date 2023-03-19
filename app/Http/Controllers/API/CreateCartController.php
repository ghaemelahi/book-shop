<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class CreateCartController extends Controller
{
    public function create_cart(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'total_prices' => 'required',
            'type_pay' => 'required',
        ]);
        Orders::create([
            'user_id' => $request->user_id,
            'book_id' => $request->book_id,
            'total_prices' => $request->total_prices,
            'type_pay' => $request->type_pay,
        ]);
    }
}
