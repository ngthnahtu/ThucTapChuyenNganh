<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Khoa;
use App\Models\Service;
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
        //chia se toan bo cac trang
        $khoas = Khoa::where('status', '1')->get();
        $doctors_list = Doctor::where('status', '1')->get();
        view()->share(['khoas' => $khoas, 'doctors_list' => $doctors_list]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $khoas = Khoa::where('status', '1')->get();
        $doctors = Doctor::where('status', '1')->get();
        $services = Service::where('status', '1')->get();
        return view('home.index', compact('khoas', 'doctors', 'services'));
    }
    //truyền vào trang home hiển thị
    public function service()
    {
        $services = Service::where('status', '1')->get();
        return view('home.services', compact('services'));
    }
    public function doctor()
    {
        $doctors = Doctor::where('status', '1')->get();
        return view('home.doctors', compact('doctors'));
    }
    public function khoa_doctor($id)
    {
        $doctors = Doctor::where([
            ['idKhoa', '=', $id],
            ['status', '=', '1']
        ])->get();
        return view('home.khoa_doctor', compact('doctors', 'doctors'));
    }
    public function single_doctor($id)
    {
        $doctor = Doctor::where([
            ['id', '=', $id],
            ['status', '=', '1']
        ])->get();
        return view('home.single_doctor', compact('doctor', 'doctor'));
    }
    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect("/");
        // chuyển hướng về trang chủ
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function profile()
    {
        $user = Auth::user();
        return view('home.user', compact('user'));
    }
    public function datLich(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        Appointment::create([
            'date'      => $request->date,
            'time'      => $request->time,
            'status'    => 0,
            'note'      => $request->note,
            'idDoctor'  => $request->idDoctor,
            'idPatient' => Auth::user()->patient->id,
        ]);
        return back();
    }
}
