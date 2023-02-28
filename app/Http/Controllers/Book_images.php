<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book_image;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Book_images extends Controller
{
    public function dropzoneUpload(Request $request)
    {
        $file = $request->file('file');
		$filename = time().'_'.$file->getClientOriginalName();
		$year = Carbon::now()->year;
		$month = Carbon::now()->month;
		$location = "/files/books/{$year}/{$month}/";
		$file->move($location, $filename);
		$path_image = url($location.$filename);
		$newPhoto = new Book_image();
        $newPhoto->original_name = $file->getClientOriginalName();
        $newPhoto->path_image = $path_image;
		$newPhoto->save();
        return response()->json(['book_id' => $newPhoto->id]);
    }
}
