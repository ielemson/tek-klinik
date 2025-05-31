  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route("home") }}" class="brand-link">
        <img src="{{ asset('img/logo.png') }}" alt="Tek-Klinik Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Tek-Klinik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/avatar.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route("home") }}" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route("home")}}" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    {{-- <ul class="nav nav-treeview">
                        @can('create role')
                            <li class="nav-item">
                                <a href="{{ route('role.index') }}" class="nav-link">
                                    <i class="fas fa-bomb nav-icon"></i>
                                    <p>Roles</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('permission.index') }}" class="nav-link">
                                    <i class="fas fa-bomb nav-icon"></i>
                                    <p>Permissions</p>
                                </a>
                            </li>
                        @endcan
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link">
                                <i class="fas fa-users-cog nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </ul> --}}
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.profile') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="fas fa-bell nav-icon"></i>
                    <p>Notifications</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="fas fa-image nav-icon"></i>
                    <p>Change Profile Photo</p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="{{ route('userGetPassword') }}" class="nav-link">
                    <i class="fas fa-lock nav-icon"></i>
                    <p>Change Password</p>
                    </a>
                </li> --}}

                 <li class="nav-item">
                    <a href="{{ route("sliders.index") }}" class="nav-link">
                    <i class="fas fa-lock nav-icon"></i>
                    <p>Sliders</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("services.index") }}" class="nav-link">
                    <i class="fas fa-lock nav-icon"></i>
                    <p>Services</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("website-setting.edit") }}" class="nav-link">
                    <i class="fas fa-lock nav-icon"></i>
                    <p>Website Settings</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            Logout
                        </p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>