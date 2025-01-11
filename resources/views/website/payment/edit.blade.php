@extends('website.master')

@section('Title','Edit Paymeny')

@section('body')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        Edit A Payment <br/>
                        {{session('message')}}
                    </div>
                    <div class="card-body">

                        <form action="{{route('payment.update',$payment->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Enrollment No</label>
                                <div class="col-9">
                                    <input type="text" name="enrollment_id" value="{{$payment->enrollment_id}}" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Payment Date</label>
                                <div class="col-9">
                                    <input type="text" name="paid_date" value="{{$payment->paid_date}}" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Amount</label>
                                <div class="col-9">
                                    <input type="text" name="amount" value="{{$payment->amount}}" class="form-control">
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="col-md-12 btn btn-primary">Update Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
