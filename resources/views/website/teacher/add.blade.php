@extends('website.master')

@section('Title','Teachers Add')

@section('body')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <p> Create A Teachers </p>
                        {{session('message')}}
                    </div>

                    <div class="card-body">
                        <form action="{{route('teacher.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control">
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="form-control-label col-md-3">Address</label>
                                <div class="col-md-9">
                                    <input type="text" name="address" class="form-control">
                                    @error('address')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="form-control-label col-md-3">Mobile</label>
                                <div class="col-md-9">
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
