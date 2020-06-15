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
//        $rules = [];
        $max_size = 1000000;
//        foreach($request->file('images') as $key => $val){
//            $rules['image.'.$key] = "['required|mimes:bmp,png,jpg']|max:{$max_size}";
////            $rules['image'] = 'max:'.$max_size;
//        }
//        dd($rules);




        $request->validate([
            'images' => 'required',
            'images.*' => 'mimes:bmp,png,jpg',
            ]);
        foreach ($request->file() as $file){
            foreach ($file as $f){
//                dd($f);
                $size[] = $f->getSize();
                $sum = array_sum($size);
                if ($sum <= $max_size){
                    $f->move(storage_path('images'), time().'_'.$f->getClientOriginalName());
                }else{echo "Error";}

            }
        }
        return "Успех";
    }
}
