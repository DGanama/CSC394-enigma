<div class="container">
    @if (count($jobPosts))
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Title</th>
                            <th>Company City</th>
                            <th>Link</th>
                            <th>Job Type</th>
                            <th>Skills</th>
                            <th>Required Degree</th>
                            <th>Company Name</th>
                            <th>Company Industry</th>
                            <th>Salary</th>
                            <th>Company Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($jobPosts as $jobPost)
                        <tr>
                            <td>{{$jobPost->title}}</td>
                            <td>{{$jobPost->city}}</td>
                            <td>{{$jobPost->link}}</td>
                            <td>{{$jobPost->type}}</td>
                            <td>{{$jobPost->skills}}</td>
                            <td>{{$jobPost->degree}}</td>
                            <td>{{$jobPost->company}}</td>
                            <td>{{$jobPost->industry}}</td>
                            <td>{{$jobPost->salary}}</td>
                            <td>{{$jobPost->rating}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <script type='text/javascript' src='https://us-east-1.online.tableau.com/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 1440px; height: 576px;'><object class='tableauViz' width='1440' height='576' style='display:none;'><param name='host_url' value='https%3A%2F%2Fus-east-1.online.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='&#47;t&#47;enigma' /><param name='name' value='JobsbyCompany&#47;Sheet3' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='showAppBanner' value='false' /><param name='filter' value='iframeSizedToWindow=true' /></object></div>
        </div>
    @else
        <div class="row">
            <div class="jumbotron text-center bg-light">
                <div class="jumbotron-heading h1">
                    No item listed
                </div>
            </div>
        </div>
    @endif
</div>