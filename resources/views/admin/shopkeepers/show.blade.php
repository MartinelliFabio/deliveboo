@extends('layouts.admin')

@section('content')
    <section class="container my-5" id="show">
        <div class="mb-5" id="a-shopkeepers"><a href="{{route('admin.shopkeepers.index')}}" class="transition"><i class="fa-solid fa-circle-arrow-left"></i> Ritorna ai Ristoranti</a></div>
        <h1 class="mb-5 text-capitalize">{{$shopkeeper->name}}</h1>
        <div class="row">
            <div class="img-box col-12 col-lg-4 col-md-6 me-5">
                @if(Str::contains($shopkeeper->image, 'shopkeeper_images/'))
                    <img class="shadow" src="{{ asset('storage/' . $shopkeeper->image) }}" alt="{{ $shopkeeper->name }}">
                @elseif($shopkeeper->image)
                    <img class="shadow" src="{{ $shopkeeper->image }}" alt="{{ $shopkeeper->name }}">
                @else
                    <img class="shadow" src="https://dummyimage.com/1200x840/000/fff" alt="C/O https://dummyimage.com/">
                @endif
            </div>
            <div class="col-12 col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-6 col-md-12">
                                <div class="mb-2">
                                    <span class="fw-bold">Nome:</span> {{$shopkeeper->name}}
                                </div>
                                <div class="mb-2">
                                    <span class="fw-bold">Partita IVA: </span> IT {{$shopkeeper->p_iva}}
                                </div>
                                <div class="mb-2">
                                    <span class="fw-bold">Indirizzo:</span> {{$shopkeeper->address}}
                                </div>
                                <div class="mb-2 text-capitalize">
                                    <span class="fw-bold">Orario:</span> {{$shopkeeper->hour}}
                                </div>
                                <div class="mb-2 text-capitalize">
                                    {{-- <span class="fw-bold">E-mail:</span> {{$shopkeeper->user->email}} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
