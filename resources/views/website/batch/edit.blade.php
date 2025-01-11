@extends('website.master')

@section('Title','Edit Batch')

@section('body')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        Edit A Batch <br/>
                        {{session('message')}}
                    </div>
                    <div class="card-body">

                        <form action="{{route('batch.update',$batch->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Name</label>
                                <div class="col-9">
                                    <input type="text" name="name" value="{{$batch->name}}" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Course</label>
                                <div class="col-9">
                                    <select class="form-control" name="course_id"  required>
                                        <option value="" disabled selected>-- Select Course --</option>
                                        @foreach($courses as $course)
                                            <option value="{{$course->id}}">{{$course->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Duration</label>
                                <div class="col-9">
                                    <input type="text" name="start_date" value="{{$batch->start_date}}" class="form-control">
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="col-md-12 btn btn-primary">Update Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
