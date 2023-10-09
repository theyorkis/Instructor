<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class instructor extends Controller
{
    public function index()
    {
      return view('content.pages.pages-instructor');
    }
}
