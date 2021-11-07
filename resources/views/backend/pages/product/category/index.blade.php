@extends('backend.layouts.master')
@section('title')
    DANH MỤC SẢN PHẨM
@endsection
@section('css_plugins')
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('css_per_page')
    <style>
        .card .card-body ul li {
            border-bottom: 1px dotted rgb(240, 240, 240);
            margin: 10px 0;
            box-shadow: 3px 3px 2px #f5f5f5;
            padding: 8px 0px;
        }

    </style>
@endsection
@section('content')

    @include('backend.layouts.components.content_header', [
    'name' => 'Danh mục sản phẩm',
    'key' => 'Danh mục sản phẩm',
    'link' => Request::route()->getPrefix()
    ])

    <section class="content">
        <div class="container-fluid">
            {{-- <div class="row">

                <div class="col-12">
                    @if (session('message'))
                        <div class="m-1 p-2 font-medium text-sm text-green-600 bg-success text-center" style="width:300px">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div> --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.product.category.index') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-list"> Danh mục sản phẩm</i>
                        </a>
                        <a href="{{ route('admin.product.category.create') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus fa-1x"> Thêm danh mục</i>
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" id="render">
                        @forelse ($categories as $item)
                            <ul>
                                <li data-toggle="collapse" data-target="#demo{{ $item->id }}">
                                    <span>
                                        {{ $item->name }}
                                    </span>
                                    <a href=""
                                        data-url="{{ route('admin.product.category.destroy', ['id' => $item->id]) }}"
                                        class="float-right btn btn-sm bg-danger action_delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <a href="{{ route('admin.product.category.updateStatus', ['id' => $item->id]) }}"
                                        class="float-right btn btn-sm bg-warning mr-3">
                                        <i class="fa fa-copy"></i>
                                    </a>
                                    @if ($item->status == 1)
                                        <button id="{{ $item->id }}" status="{{ $item->statuss }}"
                                            class="float-right mr-3 btn btn-sm btn-success action_update_status">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    @else
                                        <button id="{{ $item->id }}" status="{{ $item->statuss }}"
                                            class="float-right mr-3 btn btn-sm btn-secondary action_update_status">
                                            <i class="fa fa-eye-slash"></i>
                                        </button>
                                    @endif

                                    <a href="{{ route('admin.product.category.edit', ['id' => $item->id]) }}"
                                        class="float-right mr-3 btn btn-sm bg-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </li>
                                @if (count($item->subcategory))
                                    @include('backend.pages.product.category.subcategories',[
                                    'subcategories' => $item->subcategory
                                    ])
                                @endif
                            </ul>
                        @empty
                            <p>Không có dữ liệu !</p>
                        @endforelse

                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>

    </section>


@endsection

{{-- @section('script_dataTables')
    <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
@endsection --}}
@section('script')
    {{-- <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"
        integrity="sha512-nnzkI2u2Dy6HMnzMIkh7CPd1KX445z38XIu4jG1jGw7x5tSL3VBjE44dY4ihMU1ijAQV930SPM12cCFrB18sVw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script type="text/javascript" src="{{ asset('backend/custom/js/deleteModel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.action_update_status', function() {
                // const thisRef = $(this);
                let status = $(this).attr('status');
                let id = $(this).attr('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/admin/product/category/updateStatus',
                    data: {
                        'status': status,
                        'id': id
                    }
                    success: function(data) {

                        console.log(data.success)

                    }
                });
            });
        });
        // $(document).ready(function() {
        //     $('.action_update_status1').click(function() {
        //         // preventDefault();
        //         let status = $(this).data('status');
        //         let id = $(this).data('id');
        //         let url = $(this).data('url');
        //         $.ajax({
        //             type: "GET",
        //             dataType: "json",
        //             url: url,
        //             data: {
        //                 'status': status,
        //                 'id': id
        //             },
        //             success: function(data) {
        //                 var Toast = Swal.mixin({
        //                     toast: true,
        //                     position: 'top-end',
        //                     showConfirmButton: false,
        //                     timer: 2000
        //                 });
        //                 var notification = data.message
        //                 Toast.fire({
        //                     icon: 'success',
        //                     title: notification
        //                 })
        //                 // toastr.success(data.message);
        //             },
        //             error: function() {
        //                 toastr.error('Cập nhật thất bại');
        //             }
        //         });
        //     });
        // });
    </script>
@endsection
