<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }
    public function profile_update(Request $request)
    {
    }
}
