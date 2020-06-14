<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function getForm(){
        return view('upload-form');
    }

    public function upload(Request $request){
//        dd($request->file('images'));
        $max_size = 1024;
        $request->validate([
            'images' => 'required|max:'.$max_size,
            'images.*' => 'mimes:bmp,png,jpg',
            ]);
        foreach ($request->file() as $file){
            foreach ($file as $f){
                $f->move(storage_path('images'), time().'_'.$f->getClientOriginalName());
            }
        }
        return "Успех";
    }
}
