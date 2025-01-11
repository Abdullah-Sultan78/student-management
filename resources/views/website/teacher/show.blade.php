@extends('website.master')

@section('Title','Teacher details Show')

@section('body')

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Teacher Details
                </div>
                <div class="card-body">
                    <p><b>Name: </b> {{$teacher->name}}</p>
                    <p><b>Name: </b> {{$teacher->address}}</p>
                    <p><b>Name: </b> {{$teacher->mobile}}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
