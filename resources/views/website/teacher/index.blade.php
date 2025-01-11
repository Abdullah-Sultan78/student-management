@extends('website.master')

@section('Title','Manage Teacher')

@section('body')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-body">
                        <h6> Teacher List </h6>
                        <hr/>
                        <a href="{{route('teacher.create')}}" class="btn btn-success">Add Teacher</a>

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
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{$teacher->name}}</td>
                                    <td>{{$teacher->address}}</td>
                                    <td>{{$teacher->mobile}}</td>

                                    <td class="d-flex">
                                        <a href="{{route('teacher.show',$teacher->id)}}" class="btn btn-success m-1">Show</a>
                                        <a href="{{route('teacher.edit',$teacher->id)}}" class="btn btn-primary m-1">Edit</a>

                                        <form action="{{route('teacher.destroy',$teacher->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger m-1" onclick="return confirm('Are you want to delete this!! ')">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
