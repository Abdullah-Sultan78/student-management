@extends('website.master')

@section('Title','Add Courses')

@section('body')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        Create A Course <br/>
                        {{session('message')}}
                    </div>
                    <div class="card-body">

                        <form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label"> Course Name</label>
                                <div class="col-9">
                                    <input type="text" name="name" class="form-control">
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Course Syllabus</label>
                                <div class="col-9">
                                    <input type="text" name="syllabus" class="form-control">
                                    @error('syllabus')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Duration</label>
                                <div class="col-9">
                                    <input type="text" name="duration" class="form-control">
                                    @error('duration')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="col-md-12 btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
