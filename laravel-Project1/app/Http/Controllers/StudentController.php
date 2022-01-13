<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   //URL theke value catch korar jonno

   /*
    public function index($x,$y,Request $request)  //request for querey string like home/234/edit/45?name=devskill (here name=devskill is query string)
    {
       // echo 1;
       echo $x;
       echo $y;
       echo $request->name;
       return view('Welcome');  
    }
    */

   //trasfer to MeetingConroller
   //--------------------------->
   // public function edit($x,Request $request)  //request for querey string like home/234/edit/45?name=devskill (here name=devskill is query string)
   // {
   //    echo $request->listType;
   // }


   //for welcome.blade.php (new navigation bar)
   public function index()
   {
      return view('Welcome');
   }
}
