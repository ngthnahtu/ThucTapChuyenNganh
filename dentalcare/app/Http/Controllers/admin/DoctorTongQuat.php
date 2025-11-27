<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\doctorPH;
use App\Models\doctorTQ;
use App\Models\Khoa;
use Illuminate\Http\Request;

class DoctorTongQuat extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctorTQ=doctorTQ::all();
        return view('admin.doctor.doctorTQ-list',compact('doctorTQ'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.doctor.addTQ');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tq=doctorTQ::create([
            'id'=>$request->id,
            'name'=>$request->name,
        ]);
        if($tq){
            return redirect()->route('admin.bsTQ.index');
        }
        else{
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(doctorTQ $doctorTQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bsTQ=doctorTQ::find($id);
        return view('admin.doctor.editTQ',compact('bsTQ'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bsTQUpdate=doctorTQ::find($id);
        $bsTQUpdate->update([
            'id'=>$request->id,
            'name'=>$request->name,
        ]);
        if($bsTQUpdate){
            return redirect()->route('admin.bsTQ.index');
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
        $bsTQ=doctorTQ::find($id);
        $bsTQ->delete();
        if($bsTQ){
            return redirect()->route('admin.bsTQ.index');
        }
        else{
            return back();
        }
    }
}
