@extends('layouts.main')

@section('title')
Show
@endsection

@section('content')
    <div>
        ID - {{ $product->id }}<br>  
        title - {{ $product->title }}<br> 
        category - {{ $product->category->title }}<br>
        description - {{ $product->description }}<br>
        price - {{ $product->price }}<br>

    </div>
    <div>
        <a href="{{ route('product.index') }}">Back</a>
    </div>
    <div>
        <a href="{{ route('product.edit', $product->id) }}">Edit</a>
    </div>
    <div>
        <form action="{{ route('product.destroy', $product->id) }}" method="post">
            @csrf
            @method('delete')
        <button type="submit" value="Delete">Delete</button>
        </form>
    </div>
@endsection