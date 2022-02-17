@extends('layouts.base')

@section('title', $category)

@section('content')

<link rel="stylesheet" href="/css/products.css">


<a href="{{ route('categories.show_ascending', ['Books', 'asc']) }}"><button type="button" class="btn btn-primary">Sort Asc</button></a>


<h1 class="title">{{ $category }}</h1><br>

<div class="container">

  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif

  <div class="row 1 row-2-cols-3">
    @foreach ($products as $product)
        <div class="col-4">
            <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset('images/' . $product->image) }}"></a> <br>
            {{-- <div class="product_description"></div> --}}
            <h2 class="product_name"><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></h2>

            @if ($cart->where('id', $product->id)->count())
              <h4 style="color: rgb(255, 153, 0);">In Cart.</h4>
            @else
              <div class="product_price">${{ $product->price }}</div> <br><br>
            @endif
        </div>
    @endforeach
  </div>

</div>


@endsection