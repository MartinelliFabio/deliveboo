@extends('layouts.admin')

@section('content')

    <div id="table-list">
        
        <div class="table-container">
            <h1 class="mb-5">Ristoranti</h1>
            @if(session()->has('message'))
            <div class="alert alert-success mb-3 mt-3 w-75 m-auto">
                {{ session()->get('message') }}
            </div>
            @endif
            {{-- @if(!Auth::user()->isAdmin())
                <a href="{{route('admin.shopkeepers.create')}}" class="text-white"><button class="btn btn-primary mb-2"><i class="fa-solid fa-plus"></i></button></a>
            @endif --}}
            <table class="mb-2">
                <thead>
                    <tr>
                        <th class="bl-hidden" scope="col">#</th>
                        <th scope="col">Name</th>
                        <th class="bl-hidden" scope="col">P.IVA</th>
                        <th scope="col">Address</th>
                        @if(!Auth::user()->isAdmin())
                            <th scope="col">Edit</th>
                        @endif
                        {{-- @if(!Auth::user()->isAdmin())
                            <th scope="col">Delete</th>
                        @endif --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shopkeepers as $shopkeeper)
                        <tr>
                            <th class="bl-hidden" scope="row">{{$shopkeeper->id}}</th>
                            <td class="text-capitalize"><a href="{{route('admin.shopkeepers.show', $shopkeeper->slug)}}" title="View shopkeeper">{{$shopkeeper->name}}</a></td>
                            <td class="bl-hidden">IT {{$shopkeeper->p_iva}}</td>
                            <td class="">{{$shopkeeper->address}}</td>
                            @if(!Auth::user()->isAdmin())
                                <td><a class="link-secondary" href="{{route('admin.shopkeepers.edit', $shopkeeper->slug)}}" title="Edit shopkeeper"><i class="fa-solid fa-pen"></i></a></td>
                            @endif
                            {{-- @if(!Auth::user()->isAdmin())
                                <td>
                                    <form action="{{route('admin.shopkeepers.destroy', $shopkeeper->slug)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-button btn btn-danger" data-item-title="{{$shopkeeper->name}}"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </td>
                            @endif --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $shopkeepers->links('vendor.pagination.bootstrap-5') }}
            @include('partials.admin.modal')
        </div>
    </div>
@endsection