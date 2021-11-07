@extends('backend.layouts.master')

@section('title')
    TRANG TỔNG QUAN
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        TRANG TỔNG QUAN
                    </h1>
                </div>
                <div class="col-sm-6">
                    {{-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">
                                Trang chủ
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            Starter Page
                        </li>
                    </ol> --}}
                </div>
            </div><!-- /.row -->
        </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Danh mục</span>
                            <span class="info-box-number">760</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Sản phẩm</span>
                            <span class="info-box-number">
                                10
                                <small>%</small>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Đơn hàng</span>
                            <span class="info-box-number">41,410</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Bài viết</span>
                            <span class="info-box-number">760</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Bình luận</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Coupon</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Đơn hàng gần đây</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Item</th>
                                            <th>Status</th>
                                            <th>Popularity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                            <td>iPhone 6 Plus</td>
                                            <td><span class="badge badge-danger">Delivered</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f56954" data-height="20">
                                                    90,-80,90,70,-61,83,63</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Call of Duty IV</td>
                                            <td><span class="badge badge-success">Shipped</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                    90,80,90,-70,61,-83,63</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <a href="javascript:void(0)" class="btn btn-sm btn-danger float-left">Xem tất cả</a>
                            {{-- <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> --}}
                        </div>
                        <!-- /.card-footer -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
