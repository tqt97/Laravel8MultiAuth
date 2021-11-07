@foreach ($subcategories as $item)
    {{-- <div > --}}
    <ul id="demo{{ $item->parent_id }}" class="collapse in show">
        <li>
            <span>
                {{ $item->name }}
            </span>
            <a href="" data-url="{{ route('admin.product.category.destroy', ['id' => $item->id]) }}"
                class="float-right btn btn-sm bg-danger action_delete">
                <i class="fa fa-trash"></i>
            </a>
            <a href="{{ route('admin.product.category.edit', ['id' => $item->id]) }}"
                class="float-right btn btn-sm bg-warning mr-3">
                <i class="fa fa-copy"></i>
            </a>
            @if ($item->status == 1)
                <button class="float-right mr-3 btn btn-sm btn-success action_update_status" status="{{ $item->statuss }}" id="{{ $item->id }}">
                    <i class="fa fa-eye"></i>
                </button>
            @else
                <button class="float-right mr-3 btn btn-sm btn-secondary action_update_status"
                status="{{ $item->statuss }}"
                id="{{ $item->id }}">
                    <i class="fa fa-eye-slash"></i>
                </button>
            @endif
            <a href="{{ route('admin.product.category.edit', ['id' => $item->id]) }}"
                class="float-right mr-3 btn btn-sm bg-primary">
                <i class="fa fa-edit"></i>
            </a>

        </li>
        @if (count($item->subcategory))
            @include('backend.pages.product.category.subcategories',['subcategories' => $item->subcategory])
        @endif
    </ul>
    {{-- </div> --}}
@endforeach
