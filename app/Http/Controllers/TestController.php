<?php

namespace App\Http\Controllers;

use App\UserTest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        //LOGIC HERE

        return redirect()->route('index');
    }

}
