@extends('layouts.mainContent')
@section('content')
    <div class="container">
        <div class="card m-5">
            <div class="card-body">
                <h4 class="card-title">{{$company->name}}</h4>
                <div class="list-group">
                    <div class="list-group-item border-0">{{$company->industry}}</div>
                    <div class="list-group-item border-0">{{$company->city}}</div>
                    <div class="list-group-item border-0">{{$company->rating}}</div>
                </div>
            </div>
        </div>
    </div>

@endsection
