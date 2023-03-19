<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search()
    {
        $books['search_books'] = DB::table('books')
        ->select([
            'books.id as id',
            'book_name','description','electronic_price',
        ])
        ->selectRaw('(select book__images.path_image from book__images where books_id = books.id limit 1) as path_image')
        ->get();
        return $books;
    }
}
