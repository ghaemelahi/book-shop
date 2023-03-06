<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IntrodactionController extends Controller
{
    public function introduction()
    {
        $books['Introduction_Books'] = DB::table('books')
            ->select([
                'books.id as id',
                'book_name','book_title', 
                'book_writer','status',
                'translator','print_publisher',
                'format_book','format_book',
                'electronic_price','description',
            ])
            ->selectRaw('(select book__images.path_image from book__images where books_id = books.id limit 1) as path_image')
            ->get();
        return $books;
    }
}
