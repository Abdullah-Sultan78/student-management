@extends('website.master')

@section('Title','Course Details')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-10  mt-3">
                <div class="card">
                    <div class="card-body">
                        <h6>Course List</h6>
                        <hr/>
                        <a href="{{route('course.create')}}" class="btn btn-success">Add Course</a>
                        <table class="table table-bordered table-striped table-hover mt-3">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Course Syllabus</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $course)
                                    <tr>
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->syllabus}}</td>
                                        <td>{{$course->duration}}</td>

                                        <td class="d-flex">
                                            <a href="{{route('course.show',$course->id)}}" class="btn btn-success m-1">Show</a>
                                            <a href="{{route('course.edit',$course->id)}}" class="btn btn-primary m-1">Edit</a>
                                            <form action="{{route('course.destroy',$course->id)}}" method="post" enctype="multipart/form-data">
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
