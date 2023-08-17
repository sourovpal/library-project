<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Model\Book;
use App\Models\Order;

class OrderController extends Controller
{
    //

    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            if(is_null($this->user)){
                return redirect()->route('admin.login');
            }
            return $next($request);
        });
    }
   
    public function index()
    {
        return view('backend.pages.orders.index');
    }
    public function approve(Request $request){
        if($request->status > -1){

            $book = Book::findOrFail($request->book_id);
            $order = Order::findOrFail($request->id);
            if(($request->status == 2 && $order->status == 1) || ($request->status == 2 && $order->status == 0)){

                if($book && $book->current_total_books > 0){

                    $book->update([
                        'current_total_books' => $book->current_total_books - 1,
                    ]);
                    $order->update([
                        'status' => $request->status,
                    ]);

                }
            }
            elseif(($request->status == 4 && $order->status == 3) || ($request->status == 0 && $order->status == 2)){

                $book->update([
                    'current_total_books' => $book->current_total_books + 1,
                ]);
                Order::findOrFail($request->id)->update([
                    'status' => $request->status,
                ]);

            }
        }

        return back();
    }

    public function create()
    {
        
    }
    
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
