<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    function create()
    {
        $pageData = [
            "title" => "Shortlink baru"
        ];

        return view('link.create', $pageData);
    }

    function simpan(Request $request)
    {
        $linkBaru = $request->validate([
            'original' => 'required|unique:links',
            'short' => 'required|unique:links',
        ]);

        // $linkBaru['user_id'] = auth()->user()->id;
        $linkBaru['user_id'] = 1;

        $link = Link::create($linkBaru);

        // if (!$insert) {
        //     return "Insert gagal";
        // }

        return redirect('/');
    }
}
