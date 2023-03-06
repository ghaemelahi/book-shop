<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
		$path = 'tamplate/' . $year . '/' . $month;
		$file->move($path, $name);
		$path_image = $path . '/' . $name;
		return response()->json(['path_image' => $path_image]);
	}
}
