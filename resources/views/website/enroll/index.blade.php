@extends('website.master')

@section('Title','Manage Enrolment')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h6>Manage Enrolment</h6>
                        <hr/>
                        <a href="{{route('enroll.create')}}" class="btn btn-success">Add Enrolment</a>
                        <table class="table table-bordered table-striped table-hover mt-3">
                            <thead>
                            <tr>

                                <th>Enroll_No</th>
                                <th>Name</th>
                                <th>Batch</th>
                                <th>Course Name</th>
                                <th>Start Date</th>
                                <th>Fee</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($enrolls as $enroll)
                                <tr>
                                    <td>{{$enroll->enroll_no}}</td>
                                    <td>{{isset($enroll->students->name ) ? $enroll->students->name : ''}}</td>
                                    <td>{{isset($enroll->batchs->name ) ? $enroll->batchs->name : ''}}</td>
                                    <td>{{isset($enroll->batchs->courses->name) ? $enroll->batchs->courses->name : ''}}</td>
                                    <td>{{$enroll->join_date}}</td>
                                    <td>{{$enroll->fee}}</td>

                                    <td class="d-flex">
                                        <a href="{{route('enroll.show',$enroll->id)}}" class="btn btn-success m-1">Show</a>
                                        <a href="{{route('enroll.edit',$enroll->id)}}" class="btn btn-primary m-1">Edit</a>
                                        <form action="{{route('enroll.destroy',$enroll->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <button href="" type="submit" class="btn btn-danger m-1" onclick="return confirm('Are you want to delete this!!')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
