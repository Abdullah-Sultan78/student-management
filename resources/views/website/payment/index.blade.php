@extends('website.master')

@section('Title','Add Payment')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-10 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h6>Manage Payment</h6>
                        <hr/>
                        <a href="{{route('payment.create')}}" class="btn btn-success">Add Payment</a>
                        <table class="table table-bordered table-striped table-hover mt-3">
                            <thead>
                            <tr>
                                <th>Enrollment No</th>
                                <th>Paid Date</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($payments as $payment)
                                <tr>
                                    <td>{{$payment->enrollment_id}}</td>
                                    <td>{{date('Y-m-d', strtotime($payment->paid_date))}}</td>
                                    <td>{{$payment->amount}}</td>

                                    <td class="d-flex">
                                        <a href="{{route('payment.show',$payment->id)}}" class="btn btn-success m-1">Show</a>
                                        <a href="{{route('payment.edit',$payment->id)}}" class="btn btn-primary m-1">Edit</a>
                                        <form action="{{route('payment.destroy',$payment->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <button href="" type="submit" class="btn btn-danger m-1" onclick="return confirm('Are you want to delete this!!')">Delete</button>
                                        </form>
                                        <a href="#" class="btn btn-success m-1">Print</a>
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
