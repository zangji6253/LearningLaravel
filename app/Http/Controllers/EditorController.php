<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EditorController extends Controller
{
    public function index()
    {
        return view('editor');
    }

    public function upload(Request $request)
    {
//        dd($request->files);

        $data = [];

        foreach ($request->files as $key => $file){
//            if ($file->isValid()) {
//                dd($key);
                $path = $request->file($key)->store('avatars');
////                $path = $file->store('avatars');
                $data[] = Storage::url($path) ;
//            }
        }
//        $file = $request->file('picture');



        return response()->json(["errno" => 0, "data" => $data], 200);
    }
}
