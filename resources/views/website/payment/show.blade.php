@extends('website.master')

@section('Title','Payments Details')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1 mt-3">
                <div class="card">
                    <div class="card-header">Payments Details</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>Enrollment No:</b> {{$payment->enrollment_id}}</p>
                                <p><b>Payment Date:</b> {{$payment->paid_date}}</p>
                                <p><b>Amount:</b> {{$payment->amount}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
