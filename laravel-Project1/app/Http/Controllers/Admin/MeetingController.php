<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function edit($meeting_id, Request $request)  //request for querey string like home/234/edit/45?name=devskill (here name=devskill is query string)
    {
        $data["m_id"] = $meeting_id;      //controller e html code lekha ucit na
        $data["list_type"] = $request->listType;
        return view('meeting_edit', $data);
    }
}
