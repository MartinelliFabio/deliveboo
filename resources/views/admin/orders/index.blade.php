@extends('layouts.admin')
@section('content')
<h1>Ordini</h1>
<ul>
    @foreach ($orders as $order)
        <li>{{$order->name}}</li>
    @endforeach
</ul>

@endsection