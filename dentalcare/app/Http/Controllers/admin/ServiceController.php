<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Ramsey\Collection\Set;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services=Service::all();
        return view('admin.service.service-list',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service=Service::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$request->image,
            'status'=>$request->status,
        ]);
        if($service){
            return redirect()->route('admin.service.index');
        }
        else{
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service=Service::find($id);
        return view('admin.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $serviceUpdate=Service::find($id);
        $serviceUpdate->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$request->image,
            'status'=>$request->status,
        ]);
        if($serviceUpdate){
            return redirect()->route('admin.service.index');
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
        $service=Service::find($id);
        $service->delete();
        if($service){
            return redirect()->route('admin.service.index');
        }
        else{
            return back();
        }
    }
}
