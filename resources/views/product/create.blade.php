@extends("layouts.main")

@section('title')
Create
@endsection

@section('content')
<form action="{{ route('product.store') }}" method="post">
  @csrf
  <div>
    <label>Title:</label><br>
    <input value="{{old('title')}}" type="text" name="title">
    @error('title')
    <p class='text-danger'>{{ $message }}</p>
    @enderror
  </div>
  <div>
    <label for="category">Category:</label><br>
    <select id="category" name="category_id">
      @foreach($categories as $category)
      <option {{old('category_id') == $category->id ? 'selected' : ''}}
        value='{{$category->id}}'>{{ $category->title }}</option>
      @endforeach
    </select>
  </div>
  <div>
    <label>Description:</label><br>
    <textarea name="description">{{old('description')}}</textarea>
    @error('description')
    <p class='text-danger'>{{ $message }}</p>
    @enderror
  </div>
  <div>
    <label>Price:</label><br>
    <input value="{{old('price')}}" type="text" name="price">
    @error('price')
    <p class='text-danger'>{{ $message }}</p>
    @enderror
  </div>
  <button type="submit">Create</button>
</form>
<div>
  <a href="{{ route('product.index') }}">Back</a> 
</div>
@endsection