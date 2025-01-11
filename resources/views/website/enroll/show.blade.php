@extends('website.master')

@section('Title','Enrollment Details')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1 mt-3">
                <div class="card">
                    <div class="card-header">Student Details</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>Student Name:</b> {{$enroll->enroll_no}}</p>
                                <p><b>Course:</b> {{$enroll->batch_id}}</p>
                                <p><b>Duration:</b> {{$enroll->student_id}}</p>
                                <p><b>Duration:</b> {{$enroll->join_date}}</p>
                                <p><b>Duration:</b> {{$enroll->fee}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
