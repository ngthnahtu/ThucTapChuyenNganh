<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Khoa;
use Illuminate\Http\Request;

class KhoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $khoas=Khoa::all();
        return view('admin.khoa.khoa-list',compact('khoas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.khoa.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $khoa= Khoa::create([
            'id'=>$request->id,
            'name'=>$request->name,
        ]);
        if($khoa){
            return redirect()->route('admin.khoa.index');
        }
        else{
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $khoa=Khoa::find($id);
        return view('admin.khoa.edit',compact('khoa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $khoaUpdate=Khoa::find($id);
        $khoaUpdate->update([
            'id'=>$request->id,
            'name'=>$request->name,
        ]);
        if($khoaUpdate){
            return redirect()->route('admin.khoa.index');
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
        $khoa=Khoa::find($id);
        $khoa->delete();
        if($khoa){
            return redirect()->route('admin.khoa.index');
        }
        else{
            return back();
        }
    }
    public function show(Khoa $khoa)
    {
        //
    }
}
