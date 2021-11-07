<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<style>
    .card .card-body ul li {
        border-bottom: 1px dotted rgb(240, 240, 240);
        margin: 10px 0;
        box-shadow: 3px 3px 2px #f5f5f5;
        padding: 8px 0px;
    }

</style>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if (session('message'))
                    <div class="m-1 p-2 font-medium text-sm text-green-600 bg-success text-center" style="width:300px">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.product.category.create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"> Thêm danh mục</i>
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @forelse ($categories as $item)
                        <ul data-toggle="collapse" data-target="#demo{{ $item->id }}">
                            <li>
                                <a>
                                    {{ $item->name }}
                                </a>
                                <a href="" class="float-right btn btn-sm bg-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <a href="{{ route('admin.product.category.edit', ['id' => $item->id]) }}"
                                    class="float-right btn btn-sm bg-warning mr-3">
                                    <i class="fa fa-copy"></i>
                                </a>
                                <a href="" class="float-right mr-3 btn btn-sm btn-success">
                                    <i class="fa fa-eye"></i>
                                </a>
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
