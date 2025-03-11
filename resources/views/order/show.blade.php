@extends('layouts.main')

@section('title')
Show
@endsection

@section('content')
<div>
    ID - {{ $order->id }}<br>
    product - {{ $order->product->title }}<br>  
    count - {{ $order->count }}<br>  
    date of creation - {{ $order->created_at }}<br>
    name - {{ $order->name }}<br> 
    status - {{ $order->status }}<br>
    comment - {{ $order->comment }}<br>
    final price - {{ $order->total_price }}<br>
</div>
@if($order->status == 'new')
<form action="{{ route('order.update', $order->id) }}" method="POST">
    @csrf
    @method('PUT')
    <button value="complited" name="status" type="submit">Complite</button>
</form>
@endif
<div>
    <a href="{{ route('order.index') }}">Back</a>
</div>
@endsection