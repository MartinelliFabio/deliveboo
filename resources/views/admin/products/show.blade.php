@extends('layouts.admin')

@section('content')
    <section class="container my-5" id="show-product">
        <div class="mb-5" id="a-shopkeepers"><a href="{{route('admin.products.index')}}" class="transition"><i class="fa-solid fa-circle-arrow-left"></i> Ritorna ai Prodotti</a></div>
        <div class="product-card">
            @if(Str::contains($product->image, 'products_images/'))
                <img class="shadow" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
            @elseif($product->image)
                <img class="shadow" src="{{ $product->image }}" alt="{{ $product->name }}">
            @else
                <img class="shadow" src="https://dummyimage.com/1200x840/000/fff" alt="C/O https://dummyimage.com/">
            @endif
            <h1 class="fs-1 mb-3 text-capitalize mt-4">{{$product->name}}</h1>
            <p class="mb-2 text-capitalize"><span class="fw-bold">Prezzo:</span> &euro; {{$product->price}}</p>
            <p class="mb-2 text-capitalize"><span class="fw-bold">Disponibilità:</span> {{$product->available == 1 ? 'Si' : 'No'}}</p>
            <p class="mb-2 text-capitalize"><span class="fw-bold">Ingredienti:</span> {{$product->ingredient}}</p>
        </div>
    </section>
@endsection
