@extends('layouts.admin')

@section('content')
    
<div id="table-list">
    <div class="table-container">
        <h1 class="mb-5">Ordini</h1>
        @if(session()->has('message'))
        <div class="alert alert-success mb-3 mt-3 w-75 m-auto text-capitalize">
            {{ session()->get('message') }}
        </div>
        @endif
        {{-- <a href="{{route('admin.orders.create')}}" class="text-white"><button class="btn btn-primary mb-2"><i class="fa-solid fa-plus"></i></button></a> --}}
        <table class="mb-2">
            <thead>
                <tr>
                    <th class="bl-hidden" scope="col">#</th>
                    <th scope="col">Nr. Ord</th>
                    <th class="" scope="col">Prezzo Totale</th>
                    <th class="bl-hidden" scope="col">Indirizzo</th>
                    <th class="bl-hidden" scope="col">Stato</th>
                    <th scope="col">Data Ordine</th>
                    <th scope="col">Cancella</th>
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
                        <td>{{$order->datetime}}</td>
                        <td>
                            <form action="{{route('admin.orders.destroy', $order->slug)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button btn btn-danger" data-item-title="{{$order->nr_ord}}"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $orders->links('vendor.pagination.bootstrap-5') }}
        @include('partials.admin.modal')
    </div>
</div>
@endsection
