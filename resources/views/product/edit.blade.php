@extends("layouts.main")

@section('title')
Edit 
@endsection

@section('content')
<form action="{{ route('product.update', $product->id) }}" method="post">
  @csrf
  @method('patch')
  <div>
    <label>Title:</label><br>
    <input type="text" value="{{ $product->title }}" name="title">
  </div>
  <div>
    <label for="category">Category:</label><br>
    <select id="category" class="form-select" name="category_id">
      @foreach($categories as $category)
        <option 
          {{$category->id === $product->category->id ? 'selected': ''}}
       value='{{$category->id}}'>{{ $category->title }}</option>
      @endforeach
    </select>
  </div>
  <div>
    <label>Description:</label><br>
    <textarea name="description">{{ $product->description }}</textarea>
  </div>
  <div>
    <label>Price:</label><br>
    <input type="text" value="{{ $product->price }}" name="price">
  </div>
  <button type="submit">Update</button>
</form>
<div>
  <a href="{{ route('product.index') }}">Back</a>
</div>
@endsection