<?php

namespace App\Http\Controllers;

use Hekmatinasser\Verta\Verta;
use App\Models\Books;
use App\Http\Controllers\Controller;
use App\Models\Book_Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Polyfill\Uuid\Uuid;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::orderBy('created_at', 'desc')->paginate(50);
        // $images = Book_Image::where('books_id', $books->id);
        // $book = Books::find($id);
        // $book_images = $book->images()
        //     ->join('book__images', 'book__images.books_id', '=', 'books.id')
        //     ->get(['path_images']);
        return view('admin.books.list', compact(['books']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = 'create';
        return view('admin.books.create', compact(['action']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
        // $validator = validator::make($request->all(), [
        //     'book_name' => 'required|min:4',
        //     'book_title' => 'required|min:10',
        //     'book_writer' => 'required',
        //     'status' => 'required',
        //     'translator' => 'required',
        //     'print_publisher' => 'required',
        //     'year_of_publication' => 'required',
        //     'format_book' => 'required|mimes:pdf,word',
        //     'electronic_price' => 'required',
        //     'description' => 'required|min:20',
        // ], [
        //     'book_name.required' => 'نام کتاب را وارد کنید.',
        //     'book_title.required' => 'موضوع کتاب را وارد کنید.',
        //     'book_writer.required' => 'نام نویسنده کتاب را وارد کنید.',
        //     'status.required' => 'وضعیت پرداخت کتاب را وارد کنید.',
        //     'translator.required' => 'نام مترجم کتاب را وارد کنید.',
        //     'print_publisher.required' => 'ناشر چاپی کتاب را وارد کنید.',
        //     'year_of_publication.required' => 'تاریخ امتشار کتاب را وارد کنید.',
        //     'format_book.required' => 'فرمت کتاب را وارد کنید.',
        //     'electronic_price.required' => 'قیمت الکترونیکی کتاب را وارد کنید.',
        //     'description.required' => 'توضیحات کتاب را وارد کنید.',
        //     'book_name.required' => 'نام کتاب را وارد کنید.',
        // ]);
        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator);
        // }
        // dd($request);
        $book = Books::create([
            'book_name' => $request->book_name,
            'book_title' => $request->book_title,
            'book_writer' => $request->book_writer,
            'status' => $request->status,
            'translator' => $request->translator,
            'print_publisher' => $request->print_publisher,
            'year_of_publication' => change_date($request->year_of_publication),
            'format_book' => $request->format_book,
            'electronic_price' => str_replace(',', '', $request->electronic_price),
            'description' => $request->description,
        ]);
        $path_image = $request->path_image_book;
        $new_date = verta();
        $month = $new_date->month;
        $day = $new_date->day;
        for ($i = 0; $i < sizeof($path_image); $i++) {
            $photo = new Book_Image();
            $new_image_path = 'images/' . $month . '/' . $day . '/' . rand(2000, 10000) . '.jpg';
            Storage::move($path_image[$i], $new_image_path);
            $photo->path_image = $path_image[$i];
            $photo->books_id = $book->id;
            $photo->save();
        }
        return redirect()->route('books.index')->with('success', 'کتاب ' . $request->book_name . ' با موفقیت اضافه شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    // public function edit(Books $books,$id)
    {
        $action = 'edit';
        $books = Books::find($id);
        // dd($book->book_name);
        return view('admin.books.create', compact(['action', 'books']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $books)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Books::find($id);
        $book->id;
        $book->delete();
        return redirect()->route('books.index')->with('delete', ' کتاب '.$book->name.' با موفقیت حذف شد ');
    }
}
