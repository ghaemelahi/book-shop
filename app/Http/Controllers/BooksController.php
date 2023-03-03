<?php

namespace App\Http\Controllers;

use Hekmatinasser\Verta\Verta;
use App\Models\Books;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
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
        $count_books = Books::count();
        return view('admin.books.list', compact(['books', 'count_books']));
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
        $explode = explode(',',$request->image_book[0]);
        $book->images()->attach($explode);
        // $photo = new Book_image();
        // $photo->book_id = $book->id;

        // dd($request->path_image);
        // if ($request->path_image[0] != null) {
        //     $images = explode(',', $request->path_image[0]);
        //     $book->images()->attach($images);
        
        //     // 'book_id'=>$book->id;
        // }elseif($request->path_image[0]==null){
        //     return redirect()->route('books.create')->with('not_image','عکس نیست 😔😕🥺');
        // }

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
    public function edit(Books $books)
    {
        $action = 'edit';
        // dd($action);
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
    public function destroy(Books $books)
    {
        $books->delete();
        return redirect()->route('books.index')->with('delete', 'کتاب مورد نظر با موفقیت حذف شد');
    }
}
