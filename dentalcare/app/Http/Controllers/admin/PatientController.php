<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();
        $users = User::where('status', '1')->get();
        return view('admin.patient.patient-list', compact('patients', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // benh nhan role 2
        $users = User::where('role', 2)->get();
        return view('admin.patient.add', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Illuminate\Support\Facades\Hash::make($request->password),
            'role' => 2,
            'status' => 1,
        ]);
        if ($user) {
            Patient::create([
                'idUser' => $user->id,
                'name' => $request->name,
                'age' => $request->age,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);
            return redirect()->route('admin.patient.index')->with('success', 'Thêm thành công!');
        }

        return back()->with('error', 'Có lỗi xảy ra!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        $users = User::where('role', 2)->get();
        return view('admin.patient.edit', compact('patient', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $patientUpdate = Patient::find($id);

        $user = User::find($patientUpdate->idUser);
        $user->email = $request->email;
        $user->name = $request->name;

        // co nhap mk moi moi doi
        if ($request->password != null) {
            $user->password = Hash::make($request->password);
        }
        // luu vao bang us
        $user->save();

        $patientUpdate->update([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('admin.patient.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        if ($patient) {
            //luu id truoc khi xoa
            $idcu = $patient->idUser;
            $patient->delete();
            $user = User::find($idcu);
            $user->delete();
            return redirect()->route('admin.patient.index');
        } else {
            return back();
        }
    }
}
