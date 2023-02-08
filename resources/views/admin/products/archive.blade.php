@extends('layouts.admin')

@section('content')
    
<div id="table-list">
    <div class="table-container">
        <h1 class="mb-5">Soft Delete Products</h1>
        @if(session()->has('message'))
        <div class="alert alert-success mb-3 mt-3 w-75 m-auto text-capitalize">
            {{ session()->get('message') }}
        </div>
        @endif
        <table class="mb-2">
            <thead>
                <tr>
                    <th class="bl-hidden" scope="col">#</th>
                    <th scope="col">Name</th>
                    <th class="" scope="col">Price</th>
                    <th class="bl-hidden" scope="col">Disponibilità</th>
                    <th class="bl-hidden" scope="col">Ingredienti</th>
                    @if(!Auth::user()->isAdmin())
                        <th scope="col">Edit</th>
                    @endif
                    @if(!Auth::user()->isAdmin())
                        <th scope="col">Delete</th>
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
                            <td>
                                <form action="{{route('admin.products.archive.restore', $product->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="restore-button btn btn-primary" data-item-title="{{$product->name}}"><i class="fa-solid fa-trash-arrow-up"></i></button>
                                </form>
                            </td>
                        @endif
                        @if(!Auth::user()->isAdmin())
                            <td>
                                <form action="{{route('admin.products.archive.destroy', $product->id)}}" method="POST">
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
        {{-- {{ $products->links('vendor.pagination.bootstrap-5') }} --}}
        @include('partials.admin.modal')
    </div>
</div>
@endsection
