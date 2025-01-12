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
                                    @error('enroll_no')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Batch name</label>
                                <div class="col-9">
                                    {{-- <input type="text" name="batch_id" class="form-control"> --}}
                                    {{-- <label  class="form-label">Asset ID<span class="text-danger">*<span></label> --}}
                                        <select class="form-control" name="batch_id" id="assetId">
                                            <option value="" disabled selected>.......Batch name......</option>
                                               @foreach ($batchs as $batch )
                                               <option value="{{$batch->id}}">{{$batch->name}}</option>
                                               @endforeach
                                        </select>
                                    @error('batch_id')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Student Name</label>
                                <div class="col-9">
                                    {{-- <input type="text" name="student_id" class="form-control"> --}}
                                    <select class="form-control" name="student_id">
                                        <option value="" disabled selected>.......Student name...... </option>
                                        @foreach ($students as $student)
                                        <option value={{"$student->id"}}>{{$student->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('student_id')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Join Date</label>
                                <div class="col-9">
                                    <input type="text" name="join_date" class="form-control">
                                    @error('join_date')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Fee</label>
                                <div class="col-9">
                                    <input type="text" name="fee" class="form-control">
                                    @error('fee')
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

