@extends('website.master')

@section('Title','Student Details')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1 mt-3">
                <div class="card">
                    <div class="card-header">Student Details</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>Student Name:</b> {{$batch->name}}</p>
                                <p><b>Course Name:</b> {{$batch->courses->name}}</p>
                                <p><b>Duration:</b> {{$batch->start_date}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
