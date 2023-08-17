<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Book;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BooksController extends Controller
{

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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (is_null($this->user) || !$this->user->can('role.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any role !');
        }
        $books = Book::all();
        return view('backend.pages.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $books = new Book();
        $books->book_name = $request->book_name;
        $books->writer_name = $request->writer_name;
        $books->book_description = $request->book_description;
        $books->total_page = $request->total_page;
        $books->total_books = $request->total_books;
        $books->current_total_books = $request->total_books;
        $books->created_by = $this->user->username;
        $book_image = $request->book_image;
        if($book_image){
            $file=$book_image->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $image_name =$filename."-".hexdec(uniqid()).'.'.$book_image->getClientOriginalExtension();
            Image::make($book_image)->save('images/books/' .$image_name);
            $books->book_image = 'images/books/' .$image_name;
        }
        $books->book_url = $request->book_url;
        $books->updated_by = "";
        $books->save();
        session()->flash('success', 'Book has been created !!');
        return redirect()->route('admin.books.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $book = Book::find($id);
        // return view('backend.pages.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // if (is_null($this->user) || !$this->user->can('role.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized to edit any role !');
        // }
        $book = Book::find($id);
        return view('backend.pages.books.edit', compact('book'));
    }
    public function edit_about($id)
    {
        // if (is_null($this->user) || !$this->user->can('role.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized to edit any role !');
        // }
        $book = Book::find($id);
        return view('backend.pages.about_us.edit', compact('book'));
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
        // if (is_null($this->user) || !$this->user->can('admin.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized to edit any admin !');
        // }

        // Create New Admin
        $book = Book::find($id);

        // // Validation Data
        // $request->validate([
        //     'book_name' => 'required|max:250',
        //     'writer_name' => 'required|max:250',
        //     'book_description' => 'max: 1000',
        // ]);


        $book->book_name = $request->book_name;
        $book->writer_name = $request->writer_name;
        $book->book_description = $request->book_description;
        $book->total_page = $request->total_page;
        $book->total_books = $request->total_books;
        $book_image = $request->book_image;
        if($book_image){
            $file=$book_image->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $image_name =$filename."-".hexdec(uniqid()).'.'.$book_image->getClientOriginalExtension();
            Image::make($book_image)->save('images/books/' .$image_name);
            $book->book_image = 'images/books/' .$image_name;
        }
        $book->book_url = $request->book_url;
        $book->updated_by = $this->user->username;
        $book->save();
        session()->flash('success', 'Book has been Updated !!');
        return redirect()->route('admin.books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.delete')) {
        //     abort(403, 'Sorry !! You are Unauthorized to delete any admin !');
        // }

        $book = Book::find($id);
        if (!is_null($book)) {
            $book->delete();
        }

        session()->flash('success', 'Book has been deleted !!');
        return redirect()->route('admin.books.index');
    }
}
