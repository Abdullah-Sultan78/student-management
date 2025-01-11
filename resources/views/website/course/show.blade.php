@extends('website.master')

@section('Title','Student Details')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">Student Details</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>Student Name:</b> {{$course->name}}</p>
                                <p><b>Course:</b> {{$course->syllabus}}</p>
                                <p><b>Duration:</b> {{$course->duration}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
