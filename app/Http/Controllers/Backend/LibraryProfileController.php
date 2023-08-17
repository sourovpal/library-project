<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class LibraryProfileController extends Controller
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
        //
    }

    public function index_about()
    {
        if (is_null($this->user) || !$this->user->can('role.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any role !');
        }
        $about = AboutUs::all();
        return view('backend.pages.about_us.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = AboutUs::all()->first();
    
        if($about){
            return redirect()->route('admin.libraries.edit_about_us', $about->id);
        }
        else{
             return view('backend.pages.about_us.create');
        }
    }

    public function create_about_us()
    {
        $about = AboutUs::all()->first();
        if($about){
            return redirect()->route('admin.libraries.edit_about_us', $about->id);
        }
        else{
             return view('backend.pages.about_us.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_about(Request $request)
    {
        
        $about = new AboutUs();
        $about->title = $request->title;
        $about->description = $request->description;
        $about_image = $request->image;
        if($about_image){
            $file=$about_image->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $image_name =$filename."-".hexdec(uniqid()).'.'.$about_image->getClientOriginalExtension();
            Image::make($about_image)->save('images/' .$image_name);
            $about->image = 'images/' .$image_name;
        }
        $about->created_by = $this->user->username;
        $about->updated_by = "";
        $about->save();
        session()->flash('success', 'About Us has been created !!');
        return redirect()->route('admin.libraries.create_about_us');
    }
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
        $about = AboutUs::find($id);
        return view('backend.pages.about_us.edit', compact('about'));
    }

    
    public function edit_about($id)
    {
        // if (is_null($this->user) || !$this->user->can('role.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized to edit any role !');
        // }
        $about = AboutUs::find($id);
        return view('backend.pages.about_us.edit', compact('about'));
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

    public function update_about(Request $request, $id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized to edit any admin !');
        // }

        // Create New Admin
        $about = AboutUs::find($id);

        // // Validation Data
        // $request->validate([
        //     'book_name' => 'required|max:250',
        //     'writer_name' => 'required|max:250',
        //     'book_description' => 'max: 1000',
        // ]);


        $about->title = $request->title;
        $about->description = $request->description;
        $about_image = $request->image;
        if($about_image){
            $file=$about_image->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $image_name =$filename."-".hexdec(uniqid()).'.'.$about_image->getClientOriginalExtension();
            Image::make($about_image)->save('images/' .$image_name);
            $about->image = 'images/' .$image_name;
        }
        $about->created_by = "";
        $about->updated_by = $this->user->username;
        $about->save();
        session()->flash('success', 'About Us has been Updated !!');
        return redirect()->route('admin.libraries.edit_about_us', $about->id);
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
