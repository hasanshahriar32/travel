<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('admin-assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">TRAVELIA</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="subcategory.html" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Sub Category</p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('destination.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Destination</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                            <a href="brands.html" class="nav-link">
                                <svg class="h-6 nav-icon w-6 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p>Brands</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="products.html" class="nav-link">
                                <i class="nav-icon fas fa-tag"></i>
                                <p>Products</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <!-- <i class="nav-icon fas fa-tag"></i> -->
                                <i class="fas fa-truck nav-icon"></i>
                                <p>Shipping</p>
                            </a>
                        </li> --}}
                <li class="nav-item">
                    <a href="{{ route('orders.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-shopping-bag"></i>
                        <p>Orders</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="discount.html" class="nav-link">
                        <i class="nav-icon  fa fa-percent" aria-hidden="true"></i>
                        <p>Discount</p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="nav-icon  fas fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('destination.uploadImages') }}" class="nav-link">
                        <i class="fa-solid fa-image"></i>
                        <p>Destination images upload</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="pages.html" class="nav-link">
                        <i class="nav-icon  far fa-file-alt"></i>
                        <p>Pages</p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('catagory.catagories') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Places</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Main website</p>
                    </a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Main Website</p>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('index') }}">Home</a>
                        <a class="dropdown-item" href="{{ route('about') }}">about</a>
                        <a class="dropdown-item" href="{{ route('contact') }}">contact</a>
                        <a class="dropdown-item" href="{{ route('travel_destination') }}">destination</a>
                        {{-- <a class="dropdown-item" href="{{ route('destinationDetails') }}">destinationDetails</a> --}}
                    </div>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
