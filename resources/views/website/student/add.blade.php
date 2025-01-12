@extends('website.master')

@section('Title','Add Student')

@section('body')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        Create A Student <br/>
                        {{session('message')}}
                    </div>
                    <div class="card-body">

                        <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Name</label>
                                <div class="col-9">
                                    <input type="text" name="name" class="form-control">
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Address</label>
                                <div class="col-9">
                                    <input type="text" name="address" class="form-control">
                                    @error('address')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Mobile</label>
                                <div class="col-9">
                                    <input type="text" name="mobile" class="form-control">
                                    @error('mobile')
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
