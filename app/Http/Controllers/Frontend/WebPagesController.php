<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\WebPages;
use Illuminate\Http\Request;

class WebPagesController extends Controller
{
    public function show($id){
        $web = WebPages::find($id);
        return view('frontend.pages.web_pages.single', compact('web'));
    }
}
