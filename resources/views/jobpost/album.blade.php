@if (count($jobPosts))
    <div class="container">
        <div class="row">
            @foreach($jobPosts as $jobPost)
                <div class="col-md-4 mb-5">
                    <div class="card m-100">
                        <div class="card-body">
                            <h4 class="card-title">{{$jobPost->title}}</h4>
                            <div class="list-group">
                                <div class="list-group-item border-0">{{$jobPost->city}}</div>
                                <div class="list-group-item border-0">{{$jobPost->link}}</div>
                                <div class="list-group-item border-0">{{$jobPost->type}}</div>
                                <div class="list-group-item border-0">{{$jobPost->skills}}</div>
                                <div class="list-group-item border-0">{{$jobPost->degree}}</div>
                                <div class="list-group-item border-0">{{$jobPost->company}}</div>
                                <div class="list-group-item border-0">{{$jobPost->industry}}</div>
                                <div class="list-group-item border-0">{{$jobPost->salary}}</div>
                                <div class="list-group-item border-0">{{$jobPost->rating}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@else
    <h1>Empty</h1>
@endif

