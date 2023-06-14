<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diseas;
use App\Models\Doctorinformation;
use App\Models\Hospitalname;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DoctorController extends Controller
{
   
    public function diseas()
    {
        $diseas = Diseas::all();
        return view('admin.diseas.index', compact('diseas'));
    }
    public function add_diseas(Request $request)
    {
        $request->validate([
            'diseas_name' => 'required|unique:diseas',
            'diseas_image' => 'required',
        ]);
        $image = $request->diseas_image;
        $extension = $image->extension();
        $file_name = str::lower(str_replace(' ', '-',$request->diseas_name)).'-'.$extension;
        $request->diseas_image->move(public_path('diseas'), $file_name);

        Diseas::create([
            'diseas_name' =>$request->diseas_name,
            'diseas_image' =>$file_name
        ]);
        $notification=array('messege' => 'Category  Added Successfuly', 'alert-type' => 'success');

        return redirect()->back()->with($notification);
    }
    // Add Doctor Code 
    
    public function edit($id)
    {
        return view('admin.diseas.edit');
    }
    function delete_diseas($id)
    {
        $diseas= Diseas::find($id);
    	$diseas->delete();

        $notification=array('messege' => 'Subcategory Deleted Successfuly', 'alert-type' => 'warning');
        return redirect()->back()->with($notification);
    }

}
