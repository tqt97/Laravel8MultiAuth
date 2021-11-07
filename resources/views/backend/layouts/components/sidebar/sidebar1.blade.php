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
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent nav-child-indent text-sm1"
            data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('admin.dashboard')}}" class="nav-link {{ $route == 'admin.dashboard' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Tổng quan
                    </p>
                </a>
            </li>
            <li class="nav-item menu-open">
                <a href="#" class="nav-link {{ request()->is('admin/product/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-cubes "></i>
                    <p>
                        Quản lý sản phẩm
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.product.category.index')}}" class="nav-link {{ $route == 'admin.product.category.index' ? 'active' : '' }}">
                            <i class="fa fa-list-alt nav-icon"></i>
                            <p>Danh mục sản phẩm</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/boxed.html" class="nav-link">
                            <i class="fas fa-building nav-icon"></i>
                            <p>Nhà sản xuất</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                            <i class="fas fa-umbrella nav-icon"></i>
                            <p>Nhãn hiệu</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                            <i class="fa fa-gift  nav-icon"></i>
                            <p>Sản phẩm</p>
                            <i class="fas fa-angle-left right"></i>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">
                                    <i class="fa ti-more nav-icon"></i>
                                    <p>Thêm sản phẩm</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">
                                    <i class="fa ti-more nav-icon"></i>
                                    <p>Danh mục sản phẩm</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Quản lý đơn hàng
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/charts/chartjs.html" class="nav-link">
                            <i class="fa ti-more nav-icon"></i>
                            <p>Đơn hàng chờ duyệt</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/charts/flot.html" class="nav-link">
                            <i class="fa ti-more nav-icon"></i>
                            <p>Đơn hàng chờ duyệt</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/charts/inline.html" class="nav-link">
                            <i class="fa ti-more nav-icon"></i>
                            <p>Đơn hàng chờ duyệt</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/charts/uplot.html" class="nav-link">
                            <i class="fa ti-more nav-icon"></i>
                            <p>Đơn hàng chờ duyệt</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/charts/uplot.html" class="nav-link">
                            <i class="fa ti-more nav-icon"></i>
                            <p>Đơn hàng chờ duyệt</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/charts/uplot.html" class="nav-link">
                            <i class="fa ti-more nav-icon"></i>
                            <p>Đơn hàng chờ duyệt</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                        Quản lý bài viết
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/UI/general.html" class="nav-link">
                            <i class="fa ti-more nav-icon"></i>
                            <p>Danh mục bài viết</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/UI/icons.html" class="nav-link">
                            <i class="fa ti-more nav-icon"></i>
                            <p>Danh sách bài viết</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Quản lý bình luận
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/forms/general.html" class="nav-link">
                            <i class="fa ti-more nav-icon"></i>
                            <p>Bình luận chờ duyệt</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/forms/advanced.html" class="nav-link">
                            <i class="fa ti-more nav-icon"></i>
                            <p>Danh sách bình luận</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/forms/editors.html" class="nav-link">
                            <i class="fa ti-more nav-icon"></i>
                            <p>Editors</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/forms/validation.html" class="nav-link">
                            <i class="fa ti-more nav-icon"></i>
                            <p>Validation</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Quản lý người dùng
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/tables/simple.html" class="nav-link">
                            <i class="fa ti-more nav-icon"></i>
                            <p>Danh sách người dùng</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="pages/calendar.html" class="nav-link">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>
                        Quản lý báo cáo
                        <span class="badge badge-info right">2</span>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/examples/invoice.html" class="nav-link">
                            <i class="fa ti-more nav-icon"></i>
                            <p>Invoice</p>
                        </a>
                    </li>
            </li>
        </ul>
        </li>
        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                    Quản lý số lượng
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/examples/invoice.html" class="nav-link">
                        <i class="fa ti-more nav-icon"></i>
                        <p>Invoice</p>
                    </a>
                </li>
        </li>
        </ul>
        </li>
        <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                    Quản lý slider
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/examples/invoice.html" class="nav-link">
                        <i class="fa ti-more nav-icon"></i>
                        <p>Invoice</p>
                    </a>
                </li>
        </li>
        </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Quản lý SEO
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/examples/invoice.html" class="nav-link">
                        <i class="fa ti-more nav-icon"></i>
                        <p>Invoice</p>
                    </a>
                </li>
        </li>
        </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                    Thiết lập website
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/mailbox/mailbox.html" class="nav-link">
                        <i class="fa ti-more nav-icon"></i>
                        <p>Inbox</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/mailbox/compose.html" class="nav-link">
                        <i class="fa ti-more nav-icon"></i>
                        <p>Compose</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/mailbox/read-mail.html" class="nav-link">
                        <i class="fa ti-more nav-icon"></i>
                        <p>Read</p>
                    </a>
                </li>
            </ul>
        </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
