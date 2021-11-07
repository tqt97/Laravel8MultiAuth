@foreach ($subsidebar as $item)
    <li class="nav-item">
        <a href="{{ route($item['route']) }}" class="nav-link">
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
                    <li class="nav-item">
                        <a href="{{ route($sub['route']) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ $sub['name'] }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
            {{-- @include('backend.layouts.components.sidebar.sub_sidebar',
        ['subsidebar' => $item['items']]) --}}

        @endif
    </li>
@endforeach
