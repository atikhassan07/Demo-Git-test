<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Hospitalname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    public function all_branch()
    {
        $hospital = Hospitalname::all();
        $branch =   Branch::all();
        return view('admin.hospital.branch.index', compact('hospital','branch'));
    }
    // hostpital branh store 
    public function all_branch_store(Request $request)
    {
        $branch = array();
        $branch['hospital_name']=$request->hospital_name; 
        $branch['branch_name']=$request->branch_name; 
        DB::table('branches')->insert($branch);
        return back();
    }
    // hospital brand delete 
    public function branch_delete($id)
    {
        $branch = Branch::find($id);
        $branch->delete();
        return back();
    }
}
