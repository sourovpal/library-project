<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Slider;
use Intervention\Image\ImageManagerStatic as Image;

class SliderController extends Controller
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
        $sliders = Slider::all();
        return view('backend.pages.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider_image = $request->image;
        if($slider_image){
            $file=$slider_image->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $image_name =$filename."-".hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
            Image::make($slider_image)->save('images/sliders/' .$image_name);
            $slider->image = 'images/sliders/' .$image_name;
        }
        $slider->created_by = $this->user->username;
        $slider->save();
        session()->flash('success', 'Slider has been created !!');
        return redirect()->route('admin.sliders.create');
        
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
        $sliders = Slider::find($id);
        return view('backend.pages.sliders.edit', compact('sliders'));
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
        $slider = Slider::find($id);
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider_image = $request->image;
        if($slider_image){
            $file=$slider_image->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $image_name =$filename."-".hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
            Image::make($slider_image)->save('images/sliders/' .$image_name);
            $slider->image = 'images/sliders/' .$image_name;
        }
        $slider->updated_by = $this->user->username;;
        $slider->save();
        session()->flash('success', 'Slider has been Updated !!');
        return redirect()->route('admin.sliders.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        if (!is_null($slider)) {
            $slider->delete();
        }

        session()->flash('success', 'Slider has been deleted !!');
        return back();
    }
}
