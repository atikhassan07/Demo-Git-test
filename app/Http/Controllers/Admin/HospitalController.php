<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hospitalname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HospitalController extends Controller
{
    public function all_hospital()
    {
        $hospital = Hospitalname::all();
        return view('admin.hospital.index', compact('hospital'));
    }
    public function hospital_store(Request $request)
    {
        $hospital = array();
        $hospital['hospital_name'] = $request->hospital_name;
        DB::table('hospitalnames')->insert($hospital);
        return back();
    }

        // hospital  delete 
        public function hospital_delete($id)
        {
            $branch = Hospitalname::find($id);
            $branch->delete();
            return back();
        }
}
