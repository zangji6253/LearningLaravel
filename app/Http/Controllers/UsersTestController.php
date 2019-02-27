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
        $name = $request->input('fname');
        dd($name);
        //
    }
}
