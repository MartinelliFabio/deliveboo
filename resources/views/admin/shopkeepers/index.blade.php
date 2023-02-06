@extends('layouts.admin')
@section('content')
<h1>Ristoranti</h1>
<ul>
    @foreach ($shopkeepers as $shopkeeper)
        <li>{{$shopkeeper->name}}</li>
    @endforeach
</ul>
@endsection