<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function home()
    {
        return view('website.student.index',[
            'students' => Student::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.student.index',[
            'students' => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.student.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ->validate([
            'name' =>'required',
            'address' =>'required',
            'mobile' =>'required|unique:students,mobile'
        ]);


        Student::newStudent($request);
        return back()->with('message','Student info created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('website.student.show',[
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('website.student.edit',[
            'student'=>$student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        Student::updateStudent($request, $student);
        return redirect('/student')->with('message','Student info updated successfully!! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/student')->with('message','Delete successfully');
    }
}
