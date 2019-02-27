<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersTestController extends Controller
{
    //
    public function index()
    {
        return view('users_test');
    }
}
