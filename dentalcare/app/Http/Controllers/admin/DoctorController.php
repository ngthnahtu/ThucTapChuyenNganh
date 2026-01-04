<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Khoa;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors=Doctor::all();
        return view('admin.doctor.doctor-list',compact('doctors'));
    }           

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $khoas=Khoa::where('status','1')->get();
        $users = User::where('role', 1)->get();
        return view('admin.doctor.add',compact('khoas','users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $doctor=Doctor::create([
            'name'=>$request->name,
            'image'=>$request->image,
            'description'=>$request->description,
            'age'=>$request->age,
            'exp'=>$request->exp,
            'status'=>$request->status,
            'idKhoa'=>$request->idKhoa,
            'idUser'=> $request->idUser,
        ]);
        if($doctor){
            return redirect()->route('admin.doctor.index');
        }
        else{
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $doctor=Doctor::find($id);
        $khoas=Khoa::where('status','1')->get();
        $users = User::where('role', 1)->get();
        return view('admin.doctor.edit',compact('doctor','khoas','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {   
        $doctorUpdate=Doctor::find($id);
        $doctorUpdate->update([
            'name'=>$request->name,
            'image'=>$request->image,
            'description'=>$request->description,
            'age'=>$request->age,
            'exp'=>$request->exp,
            'status'=>$request->status,
            'idKhoa'=>$request->idKhoa,
            'idUser'=> $request->idUser,
        ]);
        if($doctorUpdate){
            return redirect()->route('admin.doctor.index');
        }
        else{
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doctor=Doctor::find($id);
        $doctor->delete();
        if($doctor){
            return redirect()->route('admin.doctor.index');
        }
        else{
            return back();
        }
    }
}
