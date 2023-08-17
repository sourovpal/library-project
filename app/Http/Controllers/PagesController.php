<?php

namespace App\Http\Controllers;

use App\Model\Book;
use App\Models\AboutUs;
use App\Models\Slider;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        $sliders = Slider::all();
        $about = AboutUs::all()->first();
        return view('frontend.pages.index', compact('books', 'sliders', 'about'));
    }

    public function singleShow()
    {
        return view('frontend.pages.single_show');
    }

    public function bookList()
    {
        return view('frontend.pages.books.index');
    }

    public function bookSingle()
    {
        return view('frontend.pages.books.single');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function newsSingle()
    {
        return view('frontend.pages.news.news_single');
    }
    
    public function singleSubtileShow()
    {
        return view('frontend.pages.single_subtitle_view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
