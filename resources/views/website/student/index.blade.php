@extends('website.master')

@section('Title','Manage Student')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1 mt-3">
                <div class="card">

                    <div class="card-body">
                        <h6>Student List</h6>
                        {{session('message')}}
                        <hr/>
                        <a href="{{route('student.create')}}" class="btn btn-success">Add Student</a>
                        <table class="table table-bordered table-striped table-hover mt-3">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->address}}</td>
                                    <td>{{$student->mobile}}</td>

                                    <td class="d-flex">
                                        <a href="{{route('student.show',$student->id)}}" class="btn btn-success m-1">Show</a>
                                        <a href="{{route('student.edit',$student->id)}}" class="btn btn-primary m-1">Edit</a>

                                        <form action="{{route('student.destroy',$student->id)}}" method="post" enctype="multipart/form-data">
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
