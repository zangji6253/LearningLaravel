<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersTestController extends Controller
{
    //
    public function index()
    {
//        $flights = \App\UsersTest::get();
//        dd($flights);
        $users = \App\UsersTest::simplePaginate(1);
        return view('users_test', ['users' => $users]);
    }

    /**
     * 存储新用户
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
//        $name = $request->input('fname');
//        dd($name);
//        //
        $file = $request->file('picture');

        // 文件是否上传成功
        dd ($file->isValid()) ;
    }

    /**
     * 更新用户头像.
     *
     * @param  Request $request
     * @return Response
     * @translator laravelacademy.org
     */
    public function update(Request $request)
    {
        $file = $request->file('picture');

        // 文件是否上传成功
        if ($file->isValid()) {

            $path = $file->store('avatars');
////
            dd($path) ;
//
//            // 获取文件相关信息
//            $originalName = $file->getClientOriginalName(); // 文件原名
//            $ext = $file->getClientOriginalExtension();     // 扩展名
//            $realPath = $file->getRealPath();   //临时文件的绝对路径
//            $type = $file->getClientMimeType();     // image/jpeg
//
//            // 上传文件
//            $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
//            // 使用我们新建的uploads本地存储空间（目录）
//            $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
//            var_dump($bool);

        }
//
//        $request->validate([
//            'avatar' => 'required',
//        ]);
//
////        if ($val->fails()) {
////            return redirect()->back()->with(['message' => 'No file received']);
////        } else {
//            $file = $request->file('avatar')->store('avatars');
//            return redirect()->back();
////        }
////
////        $path = $request->file('avatar')->store('avatars');
////
////        return $path;
    }
}
