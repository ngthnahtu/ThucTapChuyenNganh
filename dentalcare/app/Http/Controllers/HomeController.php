<?php

namespace App\Http\Controllers;

use App\Models\Khoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function admin()
{
    if (!Auth::check()) {
        return redirect('/login');
    }
    return view('admin.admin');
}
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $khoas= Khoa::all();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $khoas= Khoa::where('status','1')->get();
        return view('home.index',compact('khoas'));
    }
    public function logout(){
        if(Auth::check()){
            Auth::logout();
        }
        return redirect("/");
        // chuyển hướng về trang chủ
    }
}
