@extends('website.master')

@section('Title','Add Payment')

@section('body')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        Create A Payment <br/>
                        {{session('message')}}
                    </div>
                    <div class="card-body">

                        <form action="{{route('payment.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Enrollment No</label>
                                <div class="col-9">
                                    <input type="text" name="enrollment_id" class="form-control">
                                    @error('enrollment_id')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Paid Date</label>
                                <div class="col-9">
                                    <input type="text" name="paid_date" class="form-control">
                                    @error('paid_date')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="col-md-3 form-control-label">Amount</label>
                                <div class="col-9">
                                    <input type="text" name="amount" class="form-control">
                                    @error('amount')
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

