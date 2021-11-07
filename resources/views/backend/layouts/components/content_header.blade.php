<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $key }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            Trang tổng quan
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="{{ $link }}">
                            {{ $name }}
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
