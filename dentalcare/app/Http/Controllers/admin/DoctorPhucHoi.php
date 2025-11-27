<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\doctorPH;
use Illuminate\Http\Request;

class DoctorPhucHoi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctorPH=doctorPH::all();
        return view('admin.doctor.doctorPH-list',compact('doctorPH'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.doctor.addPH');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ph=doctorPH::create([
            'id'=>$request->id,
            'name'=>$request->name,
        ]);
        if($ph){
            return redirect()->route('admin.bsPH.index');
        }
        else{
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(doctorPh $doctorPh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bsPH=doctorPH::find($id);
        return view('admin.doctor.editPH',compact('bsPH'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bsPHUpdate=doctorPH::find($id);
        $bsPHUpdate->update([
            'id'=>$request->id,
            'name'=>$request->name,
        ]);
        if($bsPHUpdate){
            return redirect()->route('admin.bsPH.index');
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
        $bsPH=doctorPH::find($id);
        $bsPH->delete();
        if($bsPH){
            return redirect()->route('admin.bsPH.index');
        }
        else{
            return back();
        }
    }
}
