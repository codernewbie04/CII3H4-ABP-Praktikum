@extends('template')
@section('title','List Produk')

@section('content')
<div class="col-md-12">
    <table class="table" id="users-tbl">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Variant</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{$product['id']}}</th>
                <td>{{$product['name']}}</td>
                <td>{{$product['description']}}</td>
                <td>{{$product['price']}}</td>
                <td>{{$product['stock']}}</td>
                <td>
                    @foreach($product->variants()->get() as $variant)
                        <li> Processor: {{$variant->processor}}</li>
                        <li> Memory: {{$variant->memory}}</li>
                        <li> Storage: {{$variant->storage}}</li>
                    @endforeach
                </td>
                <td><a href="/products/{{ $product->id }}/edit" class="btn btn-primary">Edit</a>
                    <form method="post" action="/products/{{ $product->id }}" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection