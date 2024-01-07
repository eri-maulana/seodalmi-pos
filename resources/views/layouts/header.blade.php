<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light bg-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        {{-- <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li> --}}


        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('img/sdm.jpg') }}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ auth()->user()->name }}</span>
            </a>
            <ul class="dropdown-menu">

                <li class="user-header">
                    <img src="{{ asset('img/sdm.jpg') }}" class="img-circle" alt="User Image">
                    <p>
                        {{ auth()->user()->name }}
                        <small class="text-xs">{{ auth()->user()->email }}</small>
                    </p>
                </li>

                <li class="user-footer d-flex justify-content-around">
                    <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat ml-3 ">Profil</a>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="btn btn-default btn-flat ml-3" onclick="$('#logout-form').submit()">Keluar</a>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
@csrf
</form>
