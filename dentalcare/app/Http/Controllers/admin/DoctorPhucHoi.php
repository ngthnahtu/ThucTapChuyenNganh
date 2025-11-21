<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\doctorPH;
use Illuminate\Http\Request;

class DoctorPhucHoi extends Controller
{
    public function __construct()
    {
        $doctorPH=doctorPH::orderBy('id','desc')->get();
        view()->share(['doctorPH'=>$doctorPH]);
    }
    public function index(){
        $doctorPH=doctorPH::all();
        return view('admin.doctor.doctorPH-list',compact('doctorPH'));
    }
}