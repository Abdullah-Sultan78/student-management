@extends('website.master')

@section('Title','Add Batch')

@section('body')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        Create A Batch <br/>
                        {{session('message')}}
                    </div>
                    <div class="card-body">

                        <form action="{{route('batch.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Batch Name</label>
                                <div class="col-9">
                                    <input type="text" name="name" class="form-control">
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Course Name</label>
                                <div class="col-9">
                                    <select class="form-control" name="course_id"  >
                                        <option value="" disabled selected>-- Select Course --</option>
                                        @foreach($courses as $course)
                                            <option value="{{$course->id}}">{{$course->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('course_id')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Start Date</label>
                                <div class="col-9">
                                    <input type="text" name="start_date" class="form-control">
                                    @error('start_date')
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

