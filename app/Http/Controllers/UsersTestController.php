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
        return view('users_test', ['users' => \App\UsersTest::get()]);
    }
}
