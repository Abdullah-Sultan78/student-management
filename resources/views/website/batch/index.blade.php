@extends('website.master')

@section('Title','Manage Batch')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-10 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h6>Manage Batch</h6>
                        <hr/>
                        <a href="{{route('batch.create')}}" class="btn btn-success">Add Batch</a>
                        <table class="table table-bordered table-striped table-hover mt-3">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Start Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($batchs as $batch)
                                <tr>
                                    <td>{{$batch->name}}</td>
                                    <td>{{isset($batch->courses->name ) ? $batch->courses->name : ''}}</td>
{{--                                    {{$sub_category->status == 1 ? 'Published' : 'Unpublished'}}--}}
{{--                                    <td>{{date('Y-m-d', $batch->start_date)}}</td>--}}
                                    <td>{{ date('Y-m-d', strtotime($batch->start_date)) }}</td>

{{--                                    <td>{{$batch->start_date}}</td>--}}

                                    <td class="d-flex">
                                        <a href="{{route('batch.show',$batch->id)}}" class="btn btn-success m-1">Show</a>
                                        <a href="{{route('batch.edit',$batch->id)}}" class="btn btn-primary m-1">Edit</a>
                                        <form action="{{route('batch.destroy',$batch->id)}}" method="post" enctype="multipart/form-data">
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
