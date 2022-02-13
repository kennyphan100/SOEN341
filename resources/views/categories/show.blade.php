@extends('layouts.base')

@section('title', 'Categories - ')

@section('content')

<link rel="stylesheet" href="/css/products.css">

<h1 class="title">{{ $category }}</h1><br>

<div class="container">
  <div class="row 1 row-2-cols-3">
    @foreach ($products as $product)
        <div class="col-4">
            <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset('images/' . $product->image) }}"></a> <br>
            {{-- <div class="product_description"></div> --}}
            <h2 class="product_name"><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></h2>
            <div class="product_price">${{ $product->price }}</div> <br><br>
        </div>
    @endforeach
  </div>
</div>


@endsection