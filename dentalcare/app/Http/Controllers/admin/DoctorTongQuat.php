<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\doctorTQ;
use Illuminate\Http\Request;

class DoctorTongQuat extends Controller
{
    public function __construct()
    {
        $doctorTQ=doctorTQ::orderBy('id','desc')->get();
        view()->share(['doctorTQ'=>$doctorTQ]);
    }
    public function index(){
        $doctorTQ=doctorTQ::all();
        return view('admin.doctor.doctorTQ-list',compact('doctorTQ'));
    }
}
