<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()  
    {
       return view('Welcome');  
    }
    public function create() 
    {
       echo "Welcome to create";
    }  
}
