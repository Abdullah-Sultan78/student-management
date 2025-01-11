<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.enroll.index',[
            'enrolls' => Enrollment::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.enroll.add',[
            'batchs'=>Batch::all(),
            'students'=>Student::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Enrollment::newEnroll($request);
        return back()->with('message','Enrollment info created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Enrollment $enroll)
    {
        return view('website.enroll.show',[
            'enroll' => $enroll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enrollment $enroll)
    {
        return view('website.enroll.edit',[
            'enroll' => $enroll
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enrollment $enroll)
    {
        Enrollment::updateEnroll($request,$enroll);
        return redirect('/enroll')->with('message','Enrollment info updated successfully!! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enroll)
    {
        $enroll->delete();
        return redirect('/enroll')->with('message','Enrollment delete successfully');
    }
}
