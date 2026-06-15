<nav class="filora-breadcrumb">
    <ol class="breadcrumb-list">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">
                Inicio
            </a>
        </li>
        @foreach($breadcrumbs as $breadcrumb)
            <li class="breadcrumb-separator">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"/>
                </svg>
            </li>
            <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}">
                @if($loop->last)
                    {{ $breadcrumb['name'] }}
                @else
                    <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                @endif
            </li>
        @endforeach
    </ol>
</nav>