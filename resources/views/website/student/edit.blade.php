@extends('website.master')

@section('Title','Edit Student')

@section('body')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        Edit A Student <br/>
                        {{session('message')}}
                    </div>
                    <div class="card-body">

                        <form action="{{route('student.update',$student->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Name</label>
                                <div class="col-9">
                                    <input type="text" name="name" value="{{$student->name}}" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Address</label>
                                <div class="col-9">
                                    <input type="text" name="address" value="{{$student->address}}" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Mobile</label>
                                <div class="col-9">
                                    <input type="text" name="mobile" value="{{$student->mobile}}" class="form-control">
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
