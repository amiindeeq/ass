<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    public function index()
    {
        return view('Students');
    }

}
