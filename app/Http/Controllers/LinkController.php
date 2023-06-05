<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    function create()
    {
        $pageData = [
            "title" => "Shortlink baru"
        ];

        return view('');
    }
}
