<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lấy tất cả lịch hẹn, kèm theo thông tin bs và bn
        // doctor patient la các hàm quan hệ trong model Appointment
        $appointments = Appointment::with(['doctor', 'patient'])->get();
        return view('admin.appointment.appointment-list', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $nguoiDung = Auth::user();
        Appointment::create([
            'date'      => $request->date,
            'time'      => $request->time,
            'idDoctor'  => $request->idDoctor,
            'idPatient' => $nguoiDung->patient->id,
            'status'    => 0,
            'note'      => $request->note,
        ]);

        return back(); // Lưu xong quay lại trang cũ
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $appointment = Appointment::find($id);
        // lay ds bs de sua
        $doctors = Doctor::where('status', '1')->get();
        return view('admin.appointment.edit', compact('appointment', 'doctors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $appointment = Appointment::find($id);
        $appointment->update([
            'date'     => $request->date,
            'time'     => $request->time,
            'idDoctor' => $request->idDoctor,
            'status'   => $request->status,
            'note'     => $request->note,
        ]);
        return redirect()->route('admin.appointment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $appointment = Appointment::find($id);
        if ($appointment) {
            $appointment->delete();
        }

        return redirect()->route('admin.appointment.index');
    }
}
