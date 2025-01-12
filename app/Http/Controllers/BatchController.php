<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $a = Batch::all();
//        return  $a[0]->courses->name;
        return view('website.batch.index',[
            'batchs' => Batch::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //return
        return view('website.batch.add',[
            'courses'=>Course::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ->validate([
            'name' =>'required',
            'course_id' =>'required',
            'start_date' =>'required'
        ]);
        Batch::newBatch($request);
        return back()->with('message','Batch info created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Batch $batch)
    {
        return view('website.batch.show',[
            'batch' => $batch
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batch $batch)
    {
        return view('website.batch.edit',[
            'batch' => $batch,
            'courses' => Course::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Batch $batch)
    {
        Batch::updateBatch($request,$batch);
        return redirect('/batch')->with('message','Student info updated successfully!! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batch $batch)
    {
        $batch->delete();
        return redirect('/batch')->with('message','Batch delete successfully');
    }
}
