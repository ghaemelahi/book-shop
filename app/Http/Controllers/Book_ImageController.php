<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book_Image;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Book_ImageController extends Controller
{
	public function dropzoneUpload(Request $request)
	{
		// dd($request);
		$file = $request->file('file');
		$name = time() . $file->getClientOriginalName();
		$v = verta();
		$year = $v->year;
		$month = $v->month;
		$path = 'images/' . $year . '/' . $month;
		$file->move($path, $name);
		$photo = new Book_Image();
		$photo->path_image = $path . '/' . $name;
		$photo->save();
		return response()->json(['id' => $photo->id]);
	}
}
