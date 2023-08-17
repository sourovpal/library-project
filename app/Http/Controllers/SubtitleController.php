<?php

namespace App\Http\Controllers;

use App\Subtitle;
use Illuminate\Http\Request;

class SubtitleController extends Controller
{
    public function create(){
        return view("backend.pages.subtitle.create");
    }

    public function store(Request $request){
        $request->validate([
            'subtitle_name' => 'required|max:100',
        ]);

        $subtitle = new Subtitle();
        $subtitle->subtitle_name = $request->subtitle_name;
        $subtitle->subtitle_description = $request->subtitle_description;
        $subtitle->save();
    }
}
