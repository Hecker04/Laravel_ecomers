<div class="navbar-bg"></div>

<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto"></form>

    <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>

    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-Link dropdown-toggle nav-Link-lg nav-Link-user">
            <img alt="image" src="{{ asset('assets/templates/admin/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1" style="width: 30px; height: 30px;">
            <div class="d-sm-none d-lg-inline-block">Hi, Admin</div>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('admin.logout') }}" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>