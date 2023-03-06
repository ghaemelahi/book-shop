<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book_Image;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomebookController extends Controller
{
    public function index()
    {
        // $book_image = Book_Image::get()->where('books_id', $books->id);
        // $book_image = Book_Image::where(function (Builder $query) {
        //     $query->select('path_image')
        //         ->from('book_images')
        //         ->whereColumn('books.id', 'book_image.books_id')
        //         ->limit(1);
        // });
        // $books = Books::all();
        // $book__images = $books->images()
        //     ->join('books', 'books.id', '=', 'book__images.books_id')->limit(1)
        //     ->get(['path_image']);
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
        return $books;
    }
}
