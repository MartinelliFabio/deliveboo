@extends('layouts.admin')

@section('content')
    
<div id="table-list">
    <div class="table-container">
        <h1 class="mb-5">Archivio Ordini</h1>
        @if(session()->has('message'))
        <div class="alert alert-success mb-3 mt-3 w-75 m-auto text-capitalize">
            {{ session()->get('message') }}
        </div>
        @endif
        <table class="mb-2">
            <thead>
                <tr>
                    <th class="bl-hidden" scope="col">#</th>
                    <th scope="col">Nr. Ord</th>
                    <th class="" scope="col">Price Tot</th>
                    <th class="bl-hidden" scope="col">Address</th>
                    <th class="bl-hidden" scope="col">Status</th>
                    <th scope="col">Restore</th>
                    {{-- <th scope="col">Delete</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <th class="bl-hidden" scope="row">{{$order->id}}</th>
                        <td class="text-capitalize">{{$order->nr_ord}}</td>
                        <td class="">{{$order->price_tot}}&nbsp;&euro;</td>
                        <td class="bl-hidden">{{$order->address}}</td>
                        <td class="bl-hidden">{{$order->status}}</td>
                        @if(!Auth::user()->isAdmin())
                            <td>
                                <form action="{{route('admin.orders.archive.restore', $order->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="restore-button btn btn-primary" data-item-title="{{$order->nr_ord}}"><i class="fa-solid fa-trash-arrow-up"></i></button>
                                </form>
                            </td>
                        @endif
                        {{-- @if(!Auth::user()->isAdmin())
                            <td>
                                <form action="{{route('admin.orders.archive.destroy', $order->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button btn btn-danger" data-item-title="{{$order->name}}"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        @endif --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $products->links('vendor.pagination.bootstrap-5') }} --}}
        @include('partials.admin.modal')
    </div>
</div>
@endsection
