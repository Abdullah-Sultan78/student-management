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
                                <p><b>Student Name:</b> {{$student->name}}</p>
                                <p><b>Address:</b> {{$student->address}}</p>
                                <p><b>Mobile:</b> {{$student->mobile}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
