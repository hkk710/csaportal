<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebteamController extends Controller
{
 public function index()
    {
        return view('webteam/webteam');
    }

}
