<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }
    public function add_new_slider()
    {
        return view('admin.slider.add_new');
    }

    // store slider 
    public function store_slider(Request $request)
    {
        $imageName = '';
        $slug = Str::slug($request->slider_title);
        if($image = $request->file('slider_image')){
    
            $currentDate = Carbon::now()->toDateString();
    
            $imageName = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
    
            $image->move('slider/images',$imageName);
        }
                $slider = new Slider();
                $slider->slider_title = $request->slider_title;
                $slider->slider_sub_title = $request->slider_sub_title;
                $slider->slider_image = $imageName;
                $slider->save();

                $notification=array('messege' => 'Slider Added Successfuly', 'alert-type' => 'success');

                // return redirect()->route('admin.slider.index')->with('notification');
                return back()->with('notification');
    }
    // delete slider 
    public function delete_slider($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return back();
    }
}
