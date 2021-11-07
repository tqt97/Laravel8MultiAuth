@extends('backend.layouts.master')
@section('title')
    THÊM DANH MỤC SẢN PHẨM
@endsection
@section('css_plugins')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
@endsection

@section('content')
    @include('backend.layouts.components.content_header', [
    'name' => 'Sản phẩm',
    'key' => 'Thêm danh mục sản phẩm',
    'link' => Request::route()->getPrefix()
    ])
    <section class="content">
        <div class="container-fluid">

            <!-- left column -->
            <form action="{{ route('admin.product.category.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <h5 class="card-title">Thông tin cơ bản</h5>
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tên danh mục :</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Danh mục :</label>
                                            <select class="form-control select2" style="width: 100%;" name="parent_id">
                                                <option value="0"> ---- Danh mục gốc ----</option>
                                                {!! $options !!}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Chọn hình đại diện</label>
                                            <div class="input-group">
                                                <input type="text" id="image_label" class="form-control" name="image"
                                                    aria-label="Image" aria-describedby="button-image">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button" id="button-image">
                                                        Chọn ảnh từ thư viện
                                                    </button>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <img src="" alt="" id="previewImage">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Thuộc tính :</label>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input
                                                        class="custom-control-input custom-control-input-success custom-control-input-outline"
                                                        type="checkbox" id="status" checked="" name="status">
                                                    <label for="status" class="custom-control-label">
                                                        Hiển thị
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-outline card-primary collapsed-card">
                            <div class="card-header">
                                <h5 class="card-title">Thông tin SEO</h5>
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Tiêu đề SEO :</label>
                                            <input class="form-control" name="title_seo">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Từ khóa SEO :</label>
                                            <textarea class="form-control" name="keyword_seo" id="" rows="1"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Mô tả SEO :</label>
                                            <textarea class="form-control" name="description_seo" id=""
                                                rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card-footer">
                            <button type="submit" class="btn btn-outline-primary mr-3">
                                <i class="fa fa-save"></i>
                                Thêm mới
                            </button>
                            <button type="reset" class="btn btn-outline-secondary">
                                <i class="fa fa-redo"></i>
                                Làm mới
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('script_center')
    <script src="{{ asset('backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();
                window.open('/file-manager/fm-button', 'fm', 'width=2000,height=800,margin=50');
            });
        });
        // set file link
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
            document.getElementById('previewImage').src = $url;
        }
    </script>
@endsection
