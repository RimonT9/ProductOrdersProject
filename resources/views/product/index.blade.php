@extends('layouts.main')

@section('title')
Index
@endsection

@section('content')
<div>
    <div>
        <a href="{{ route('product.create') }}">Add one</a>
    </div>
    <hr>
    @foreach($products as $product)
    <div>
        ID - {{ $product->id }}<br>  
        title - {{ $product->title }}<br> 
        price - {{ $product->price }}<br>
        category - {{ $product->category->title }}<br>
        <a href="{{ route('product.show', $product->id) }}">Show</a><br>
        <a href="{{ route('product.edit', $product->id) }}">Edit</a><br>
        <form action="{{ route('product.destroy', $product->id) }}" method="post">
            @csrf
            @method('delete')
        <button type="submit" value="Delete">Delete</button>
        </form>
    </div>
    <hr>
    @endforeach
</div>
@endsection