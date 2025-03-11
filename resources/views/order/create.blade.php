@extends("layouts.main")

@section('title')
Create
@endsection

@section('content')
<form action="{{ route('order.store') }}" method="post">
  @csrf
  <div>
    <label>Name:</label><br>
    <input value="{{old('name')}}" type="text" name="name">
    @error('name')
    <p class='text-danger'>{{ $message }}</p>
    @enderror
  </div>
  <div>
    <label for="product">Product:</label><br>
    <select id="product" name="product_id">
      @foreach($products as $product)
      <option 
      {{old('product_id') == $product->id ? 'selected' : ''}}
      value='{{ $product->id }}'>
      {{ $product->title }}
      </option>
      @endforeach
    </select>
  </div>
  <div>
    <label>Count:</label><br>
    <input value="{{old('count')}}" type="text" name="count">
    @error('count')
    <p class='text-danger'>{{ $message }}</p>
    @enderror
  </div>
  <div>
    <label>Comment:</label><br>
    <textarea name="comment">{{old('comment')}}</textarea>
    @error('comment')
    <p class='text-danger'>{{ $message }}</p>
    @enderror
  </div>
  <button type="submit">Create</button>
</form>
<div>
  <a href="{{ route('order.index') }}">Back</a> 
</div>
@endsection