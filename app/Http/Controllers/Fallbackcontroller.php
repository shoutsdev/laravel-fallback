<?php

namespace App\Http\Controllers;



class Fallbackcontroller extends Controller
{
    public function __invoke()
    {
        return view('fallback.index');
    }
}
