<?php

namespace App\Http\Controllers;

use App\Model\Book;
use App\Models\AboutUs;
use App\Models\Order;
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
        if (auth()->guard('web')->check()) {
            return view('frontend.pages.dashboard');
        }
        return view('frontend.pages.index');
    }

    public function status(Request $request)
    {
        if ($request->status == 0 || $request->status == 3 || $request->status == 1) {
            $order = Order::where('user_id', auth()->guard('web')->id())->where('id', $request->order_id)->first();
            if ($order) {
                $order->update(['status' => $request->status]);
            }
        }
        return back();
    }

    public function collect(Request $request)
    {
        Order::create([
            'user_id' => auth()->guard('web')->id(),
            'book_id' => $request->id,
            'status' => 1,
            'book_return' => now(),
        ]);
        return back()->withSuccess('Success!');
    }

    public function logout(Request $request)
    {
        auth()->guard('web')->logout();

        return back()->withSuccess('Success!');
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
