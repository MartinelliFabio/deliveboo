@extends('layouts.admin')

@section('content')
    <section class="container my-5" id="index-shopkeeper">
        <div class="shopkeeper-card">
            @if(Str::contains($shopkeeper->image, 'shopkeeper_images/'))
                <img class="shadow" src="{{ asset('storage/' . $shopkeeper->image) }}" alt="{{ $shopkeeper->name }}">
            @elseif($shopkeeper->image)
                <img class="shadow" src="{{ $shopkeeper->image }}" alt="{{ $shopkeeper->name }}">
            @else
                <img class="shadow" src="https://dummyimage.com/1200x840/000/fff" alt="C/O https://dummyimage.com/">
            @endif
            <div class="text-center my-3 d-flex justify-content-center align-items-center">
                <h1 class="fs-1 text-capitalize me-3">{{$shopkeeper->name}}</h1>
                <a class="link-secondary" href="{{route('admin.shopkeepers.edit', $shopkeeper->slug)}}" title="Edit shopkeeper"><i class="fa-solid fa-pen fs-4"></i></a>
            </div>
            <p class="mb-2 text-capitalize"><span class="fw-bold">Indirizzo:</span> {{$shopkeeper->address}}</p>
            <p class="mb-2 text-capitalize"><span class="fw-bold">Partita IVA: </span> IT {{$shopkeeper->p_iva}}</p>
            <p class="mb-2 text-capitalize">
                <span class="fw-bold">Tipi:</span>
                @foreach($shopkeeper->types as $type)
                    {{$type->name}}
                @endforeach
            </p>
            <p class="mb-2 text-capitalize"><span class="fw-bold">Orario di apertura:</span> {{$shopkeeper->hour_open}}</p>
            <p class="mb-2 text-capitalize"><span class="fw-bold">Orario di chiusura:</span> {{$shopkeeper->hour_close}}</p>
        </div>
    </section>
@endsection
