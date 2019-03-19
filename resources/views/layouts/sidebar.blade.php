<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ config('app.name', 'Enigma') }}</div>
    </a>
    <!-- Divider for personal data-->
    <hr class="sidebar-divider my-0">

    @if (Auth::user()->isEmployee)

            <!-- Nav Item - Employee details -->
            <li class="nav-item">
                <a class="nav-link" href="/profile">
                    <i class="fas fa-user"></i>
                    <span>My Profile</span></a>
            </li>
    @else
        <!-- Nav Item - Employer details -->
            <li class="nav-item">
                <a class="nav-link" href="/jobposts/hr">
                    <i class="fas fa-align-left"></i>
                    <span>My Job Posts</span></a>
            </li>

    @endif

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Top Matches
    </div>

    <!-- find something -->
    <li class="nav-item">
        <a class="nav-link" href="/companies/matches">
            <i class="fas fa-fw fa-building"></i>
            <span>Companies</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Stats
    </div>

    <!-- Companies -->
    <li class="nav-item">
        <a class="nav-link" href="/companies">
            <i class="fas fa-fw fa-building"></i>
            <span>Companies</span></a>
    </li>

    <!-- Cities -->
    <li class="nav-item">
        <a class="nav-link" href="/cities">
            <i class="fas fa-fw fa-map-marked-alt"></i>
            <span>Cities</span></a>
    </li>

    <!-- JobPosts -->
    <li class="nav-item">
        <a class="nav-link" href="/jobposts">
            <i class="fas fa-fw fa-map-marked-alt"></i>
            <span>Job Posts</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-chart-pie"></i>
            <span>Quick Stats</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Texas Stats:</h6>
                <a class="collapse-item" href="/quick1">AI MachineLearning Linux</a>
                <a class="collapse-item" href="/quick2">AI MachineLearning Java</a>
                <h6 class="collapse-header">New York Stats:</h6>
                <a class="collapse-item" href="/quick3">AI MachineLearning Linux</a>
                <a class="collapse-item" href="/quick4">AI MachineLearning Java</a>
                <h6 class="collapse-header">California Stats:</h6>
                <a class="collapse-item" href="/quick5">AI MachineLearning Linux</a>
                <a class="collapse-item" href="/quick6">AI MachineLearning Java</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>