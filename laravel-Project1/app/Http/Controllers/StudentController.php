<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
       // echo 1;
          return view('Welcome');  

    }
    
}
