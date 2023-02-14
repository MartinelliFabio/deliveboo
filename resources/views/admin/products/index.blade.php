@extends('layouts.admin')

@section('content')
    
<div id="table-list">
    <div class="table-container">
        <h1 class="mb-5">Prodotti</h1>
        @if(session()->has('message'))
        <div class="alert alert-success mb-3 mt-3 w-75 m-auto text-capitalize">
            {{ session()->get('message') }}
        </div>
        @endif
        @if(!Auth::user()->isAdmin())
            <a href="{{route('admin.products.create')}}" class="text-white"><button class="btn btn-primary mb-2 my-btn"><i class="fa-solid fa-plus"></i></button></a>
        @endif
        <table class="mb-2">
            <thead>
                <tr>
                    <th class="bl-hidden" scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th class="" scope="col">Prezzo</th>
                    <th class="bl-hidden" scope="col">Disponibilità</th>
                    <th class="bl-hidden" scope="col">Ingredienti</th>
                    @if(!Auth::user()->isAdmin())
                        <th scope="col">Modifica</th>
                    @endif
                    @if(!Auth::user()->isAdmin())
                        <th scope="col">Cancella</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th class="bl-hidden" scope="row">{{$product->id}}</th>
                        <td class="text-capitalize"><a href="{{route('admin.products.show', $product->slug)}}" title="View product">{{$product->name}}</a></td>
                        <td class="">{{$product->price}}&nbsp;&euro;</td>
                        <td class="bl-hidden">{{$product->available == 1 ? 'Si' : 'No'}}</td>
                        <td class="bl-hidden">{{$product->ingredient}}</td>
                        @if(!Auth::user()->isAdmin())
                            <td><a class="link-secondary" href="{{route('admin.products.edit', $product->slug)}}" title="Edit product"><i class="fa-solid fa-pen"></i></a></td>
                        @endif
                        @if(!Auth::user()->isAdmin())
                            <td>
                                <form action="{{route('admin.products.destroy', $product->slug)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button btn btn-danger" data-item-title="{{$product->name}}"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links('vendor.pagination.bootstrap-5') }}
        @include('partials.admin.modal')
    </div>
</div>
@endsection
