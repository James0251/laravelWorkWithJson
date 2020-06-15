<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
    public function getForm(){
        return view('upload-form');
    }

    public function upload(Request $request){

        $max_size = 1024;

        $request->validate([
            'images' => 'array|required|max_uploaded_file_size:'.$max_size,
            'images.*' => 'mimetypes:image/jpeg,image/png,image/bmp',
            ]);

        foreach ($request->file() as $files){
            foreach ($files as $file){
                $file->move(storage_path('images'), time().'_'.$file->getClientOriginalName());
            }
        }
        return "Успех";
    }
}
