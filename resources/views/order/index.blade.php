@extends('layouts.main')

@section('title')
Index
@endsection

@section('content')
<div>
    <div>
        <a href="{{ route('order.create') }}">Add one</a>
    </div>
    <hr>
    @foreach($orders as $order)
    <div>
        ID - {{ $order->id }}<br>  
        date of creation - {{ $order->created_at }}<br>
        name - {{ $order->name }}<br> 
        status - {{ $order->status }}<br>
        Final price - {{ $order->total_price }}<br>
        <a href="{{ route('order.show', $order->id) }}">Show</a><br>
    </div>
    <hr>
    @endforeach
</div>
@endsection