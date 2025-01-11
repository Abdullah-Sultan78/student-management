@extends('website.master')

@section('Title','Add Enrolment')

@section('body')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        Create A Enrolment <br/>
                        {{session('message')}}
                    </div>
                    <div class="card-body">

                        <form action="{{route('enroll.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Enroll No</label>
                                <div class="col-9">
                                    <input type="text" name="enroll_no" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Batch</label>
                                <div class="col-9">
                                    <input type="text" name="batch_id" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Student Id</label>
                                <div class="col-9">
                                    <input type="text" name="student_id" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Join Date</label>
                                <div class="col-9">
                                    <input type="text" name="join_date" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Fee</label>
                                <div class="col-9">
                                    <input type="text" name="fee" class="form-control">
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

