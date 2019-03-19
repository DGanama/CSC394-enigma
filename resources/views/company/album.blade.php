@if (count($companies))
    <div class="container">
        <div class="row">
            @foreach($companies as $company)
                <div class="col-md-4 mb-5">
                    <div class="card m-100">
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
            @endforeach
        </div>

    </div>

@else
    <h1>Empty listing</h1>
@endif

