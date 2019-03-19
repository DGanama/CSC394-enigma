@extends('layouts.mainContent')
@section('content')
    <div class="container">
        <div class="card m-5">
            <div class="card-body">
                <h4 class="card-title">{{$city->name}}</h4>
                <div class="list-group">
                    <div class="list-group-item border-0">{{$city->industry}}</div>
                    <div class="list-group-item border-0">{{$city->zip}}</div>
                    <div class="list-group-item border-0">{{$city->job_title}}</div>
                    <div class="list-group-item border-0">{{$city->skills}}</div>
                </div>
            </div>
        </div>
    </div>

@endsection
