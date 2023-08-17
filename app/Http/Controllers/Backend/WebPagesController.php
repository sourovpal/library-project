<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WebPages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class WebPagesController extends Controller
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
        $webs = WebPages::all();
        return view('backend.pages.web_pages.index', compact('webs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.web_pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $web = new WebPages();
        $web->title = $request->title;
        $web->description = $request->description;
        $web_image = $request->image;
        if($web_image){
            $file=$web_image->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $image_name =$filename."-".hexdec(uniqid()).'.'.$web_image->getClientOriginalExtension();
            Image::make($web_image)->save('images/webpages/' .$image_name);
            $web->image = 'images/webpages/' .$image_name;
        }
        $web->created_by = $this->user->username;
        $web->updated_by = "";
        $web->save();
        session()->flash('success', $web->title.' has been created !!');
        return redirect()->route('admin.web_pages.create');
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
        // if (is_null($this->user) || !$this->user->can('role.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized to edit any role !');
        // }
        $web = WebPages::find($id);
        return view('backend.pages.web_pages.edit', compact('web'));
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
        $web = WebPages::find($id);

        $web->title = $request->title;
        $web->description = $request->description;
        $web_image = $request->image;
        if($web_image){
            $file=$web_image->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $image_name =$filename."-".hexdec(uniqid()).'.'.$web_image->getClientOriginalExtension();
            Image::make($web_image)->save('images/webpages' .$image_name);
            $web->image = 'images/webpages' .$image_name;
        }
        $web->created_by = "";
        $web->updated_by = $this->user->username;
        $web->save();
        session()->flash('success', 'Web Page has been Updated !!');
        return redirect()->route('admin.web_pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session()->flash('error', 'You Can Not Delete This!! Please Contact with IT department to Delete This Page');
        return redirect()->back();
    }
}
