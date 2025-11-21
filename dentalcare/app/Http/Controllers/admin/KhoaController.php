<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Khoa;
use Illuminate\Http\Request;

class KhoaController extends Controller
{
    public function __construct(){
        $khoas= Khoa::orderBy('id','desc')->get();
        view()->share(['khoas'=>$khoas]);
    }
    public function index(){
        $khoas=Khoa::all();
        return view('admin.khoa.khoa-list',compact('khoas'));
    }
}
