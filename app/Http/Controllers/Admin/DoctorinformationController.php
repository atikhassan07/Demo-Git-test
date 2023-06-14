<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Diseas;
use App\Models\Doctorinformation;
use App\Models\Hospitalname;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DoctorinformationController extends Controller
{
    public function all_doctor() {
        $doctors = Doctorinformation::all();
        return view('admin.doctors.index',[
            'doctors' => $doctors,
        ]);
    }
    public function add_doctor(){
        $diseas = Diseas::all();
        $hospital = Hospitalname::all();
        return view('admin.doctors.add_new_doctor', compact('diseas', 'hospital'));
    }

    public function store_doctor(Request $request)
    {
        // $request->validate([
        //     'doctor_name' => 'required',
        //     'doctor_number' => 'required',
        //     'doctor_specialist' => 'required',
        //     'time_to' => 'required',
        //     'email' => 'required',
        //     'gender' => 'required',
        //     'hospital_name' => 'required',
        //     'doctor_fee' => 'required',
        //     'time_from' => 'required',
        //     'day_form' => 'required',
        //     'degree' => 'required',
        //     'doctor_image' => 'required',
        // ]);
        $doctor = new Doctorinformation();
        $image = $request->doctor_image;
        $extension = $image->extension();
        $file_name = str::lower(str_replace(' ', '-',$request->doctor_name)).'-'.$extension;
        $request->doctor_image->move(public_path('doctor_image'), $file_name);
       
              $doctor->doctor_name = $request->doctor_name;
               $doctor->phone = $request->phone;
               $doctor->doctor_specialist = $request->doctor_specialist;
               $doctor->hospital_address = $request->hospital_address;
               $doctor->time_to = $request->time_to;
               $doctor->email = $request->email;
               $doctor->hospital_name = $request->hospital_name;
               $doctor->hospital_address = $request->hospital_address;
               $doctor->doctor_fee = $request->doctor_fee;
               $doctor->time_from = $request->time_from;
               $doctor->day = $request->day;
               $doctor->degree = $request->degree;
               $doctor->room_no = $request->room_no;
               $doctor->doctor_image = $file_name;
               $doctor->save();
       return back();
    //    print_r($request->all());
    }
    public function edit_doctor($id)
    {
        $doctor= Doctorinformation::all();
        $diseas = Diseas::all();
        $branch = Branch::all();
        $hospital = Hospitalname::all();
        return view('admin.doctors.edit',[
            'doctor' => $doctor,
            'diseas' => $diseas,
            'branch' => $branch,
            'hospital' => $hospital,
        ]);
    }
    function delete_doctor($id)
    {
        $doctor= Doctorinformation::find($id);
    	$doctor->delete();

        $notification=array('messege' => 'Subcategory Deleted Successfuly', 'alert-type' => 'warning');
        return redirect()->back()->with($notification);
    }
}
