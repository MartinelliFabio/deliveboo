<div class="side-bar">
    <ul>
        <li class="title"><a href="{{ url('admin') }}"><i class="fa-solid fa-chart-line"></i><div>Dashboard</div></a></li>
        {{-- @if(Auth::user()->shopkeeper) --}}
            <li><a href="{{route('admin.shopkeepers.index')}}"><i class="fa-solid fa-store"></i><div>Ristorante</div></a></li>
            <li><a href="{{route('admin.products.index')}}"><i class="fa-solid fa-utensils"></i><div>Prodotti</div></a></li>
            <li><a href="{{route('admin.orders.index')}}"><i class="fa-solid fa-folder-open"></i><div>Ordini</div></a></li>
        {{-- @endif --}}
        @if(Auth::check() && Auth::user()->isAdmin())
            <li><a href="{{route('admin.types.index')}}"><i class="fa-solid fa-store"></i><div>Tipi di ristorante</div></a></li>
        @endif
    </ul>
</div>
