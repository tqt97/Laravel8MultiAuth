<li>{{ $sub_items->name }}</li>
@if ($sub_items->items)
    <ul>
        @if(count($sub_items->items) > 0)
            @foreach ($sub_items->items as $childItems)
                @include('backend.pages.product.category.sub_items', ['sub_items' => $childItems])
            @endforeach
        @endif
    </ul>
@endif
