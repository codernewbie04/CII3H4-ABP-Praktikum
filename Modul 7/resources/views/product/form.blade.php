@extends('template')
@section('title',' Edit / Create Product')

@section('content')
<div class="col-md-12">
    <form method="POST" action="/{{$action}}">
        @csrf
        @method($method)
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{isset($data)?$data->name:old('name') }}">
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Product Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                value="{{isset($data)?$data->description:old('description') }}">
                @error('description')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{isset($data)?$data->price:old('price') }}">
            @error('price')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{isset($data)?$data->stock:old('stock') }}">
            @error('stock')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">{{ $title }} </button>
        <a class="btn btn-secondary" href="/products"> Cancel </a>
    </form>
</div>
@endsection