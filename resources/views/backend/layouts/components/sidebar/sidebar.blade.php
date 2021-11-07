@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp
<div class="sidebar ">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Admin</a>
        </div>
    </div>
    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>
    <style>
    </style>
    <!-- Sidebar Menu -->
    @php
        $sidebar = config('sidebar');
        // dd($sidebar)
    @endphp
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent nav-child-indent text-sm1"
            data-widget="treeview" role="menu" data-accordion="false">
            @foreach ($sidebar as $item)
                <li class="nav-item {{ $item['open'] == 1 ? 'menu-open' : '' }}">
                    <a href="{{ route($item['route']) }}"
                        class="nav-link {{ $item['route'] == $route ? 'active' : '' }}">
                        <i class="nav-icon {{ $item['icon'] }}"></i>
                        <p>
                            {{ $item['name'] }}
                        </p>
                        @if (isset($item['items']))
                            <i class="fas fa-angle-left right"></i>
                        @endif
                    </a>
                    @if (isset($item['items']))
                        <ul class="nav nav-treeview">
                            @foreach ($item['items'] as $sub)
                                <li class="nav-item {{ $sub['open'] == 1 ? 'menu-open' : '' }}">
                                    <a href="{{ route($sub['route']) }}"
                                        class="nav-link {{ $item['route'] == $route ? 'active' : '' }}">
                                        <i class="fa ti-more nav-icon"></i>
                                        <p>{{ $sub['name'] }}</p>
                                        @if (isset($sub['items']))
                                            <i class="fas fa-angle-left right"></i>
                                        @endif
                                    </a>
                                    {{--  --}}
                                    @if (isset($sub['items']))
                                        <ul class="nav nav-treeview">
                                            @foreach ($sub['items'] as $s2)
                                                <li class="nav-item">
                                                    <a href="{{ route($s2['route']) }}" class="nav-link">
                                                        <i class="fa ti-more nav-icon"></i>
                                                        <p>{{ $s2['name'] }}</p>
                                                        @if (isset($s2['items']))
                                                            <i class="fas fa-angle-left right"></i>
                                                        @endif
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    {{--  --}}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
