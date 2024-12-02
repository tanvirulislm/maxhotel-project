<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagingController extends Controller
{
    public function about()
    {
        return view('hello');
    }
}
