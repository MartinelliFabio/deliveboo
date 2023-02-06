@extends('layouts.admin')
@section('content')
<h1>Prodotti</h1>
<ul>
    @foreach ($products as $product)
        <li>{{$product->name}}</li>
    @endforeach
</ul>

@endsection