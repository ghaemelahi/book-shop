<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book_Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class ImageController extends Controller
{
    // public function attach(Request $request)
    // {
    //     $data = array();

    //     $validator = Validator::make($request->all(), [
    //         'file' => 'required|mimes:png,jpg,jpeg|max:2048'
    //     ]);

    //     if ($validator->fails()) {
    //         $data['success'] = 0;
    //         $data['error'] = $validator->errors()->first('file');// Error response

    //     }else{
    //         if($request->file('file')) {

    //             $file = $request->file('file');
    //             $filename = time().'_'.$file->getClientOriginalName();

    //             // File extension
    //             $extension = $file->getClientOriginalExtension();

    //             // File upload location
    //             $location = $request->type == 'post' ? 'files/image' : 'files/user';

    //             // Upload file
    //             $file->move($location,$filename);

    //             // File path
    //             $filepath = url($location.'/'.$filename);

    //             // Response
    //             $data['success'] = 1;
    //             $data['message'] = 'فایل آپلود شد.';
    //             $data['filepath'] = $filepath;
    //             $data['extension'] = $extension;
    //         }else{
    //             // Response
    //             $data['success'] = 2;
    //             $data['message'] = 'فایل آپلود نشد.';
    //         }
    //     }
    // 	return response()->json($data);
    // }

    public function dropzoneUpload(Request $request)
    {
        $file = $request->file('file');
        $name = time() . $file->getClientOriginalName();
        $v = verta();
        $year = $v->year;
        $month = $v->month;
        $path = 'images/' . $year . '/' . $month;
        $file->move($path, $name);
        $photo = new Book_Image();
        $photo->type = $request->type;
        $photo->path = $path . '/' . $name;
        $photo->save();
        return response()->json(['id' => $photo->id]);
    }

    // public function ck_upload(Request $request)
    // {
    //     if ($request->hasFile('upload')) { 
    //         $originName = $request->file('upload')->getClientOriginalName();
    //         $fileName = pathinfo($originName, PATHINFO_FILENAME);
    //         $extension = $request->file('upload')->getClientOriginalExtension();
    //         $fileName = $fileName . '_' . time() . '.' . $extension;

    //         $year = Carbon::now()->year;
    //         $month = Carbon::now()->month;
    //         $imagePath = "files/ckeditor/{$year}/{$month}";
    //         $request->file('upload')->move(public_path($imagePath), $fileName);

    //         $CKEditorFuncNum = $request->input('CKEditorFuncNum');
    //         $url = asset($imagePath .'/'. $fileName);
    //         $msg = 'تصویر با موفقیت بارگذاری شد.';
    //         $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

    //         @header('Content-type: text/html; charset=utf-8');
    //         echo $response;
    //     }
    // }
}
