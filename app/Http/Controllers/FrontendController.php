<?php

namespace App\Http\Controllers;

use App\Models\Doctorinformation;
use App\Models\Diseas;
use App\Models\Hospitalname;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $doctor_info = Doctorinformation::all();
        $diseas = Diseas::all();
        $hospitals = Hospitalname::all();
        $sliders = Slider::all();
        return view('frontend.index', compact('doctor_info','diseas','hospitals','sliders'));
    }
    public function doctor_view($id)
    {
        $sliders = Slider::all();
        $doctor_info = Doctorinformation::all();
        $diseas = Diseas::all();
        $hospitals = Hospitalname::all();
        $sliders = Slider::all(); $doctor_info = Doctorinformation::find($id);
        return view('frontend.pages.doctor_view',[
            'sliders'=>$sliders,
            'doctor_info'=>$doctor_info,
            'diseas'=>$diseas,
            'hospitals'=>$hospitals,]);
    }
    public function getdoctor(Request $request)
    {
       $get_doctor = Doctorinformation::where('hospital_name', $request->hospital_name)->get();
        foreach($get_doctor as $doctor){
            echo $get_doctor;
        }

    }
    // doctor view page 
    function doctor_page()
    {
        $sliders = Slider::all();
        $doctor_info = Doctorinformation::all();
        $diseas = Diseas::all();
        $hospitals = Hospitalname::all();
        $sliders = Slider::all();
        return view('frontend.pages.all_doctor', [
            'sliders'=>$sliders,
            'doctor_info'=>$doctor_info,
            'diseas'=>$diseas,
            'hospitals'=>$hospitals,
        ]);
    }
}
