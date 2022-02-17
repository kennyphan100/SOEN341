@extends('layouts.base')

@section('title', $category)

@section('content')

<link rel="stylesheet" href="/css/products.css">

<style>
  /* https://www.w3schools.com/css/css_grid_item.asp */

  .container,
  .container-lg,
  .container-md,
  .container-sm {
    max-width: 95%;
  }

  .grid-container {
    display: grid;
    grid-template-columns: 15% auto;
    /* grid-template-columns: auto auto; */
    /* gap: 0.5px; */
    background-color: #ffffff;
    padding: 0px;
  }

  .grid-container>div {
    background-color: rgba(255, 255, 255, 1);
    text-align: center;
    padding: 5px 0;
    font-size: 30px;
  }

  .s341-filter-option-sidebar {
    grid-row: 1 / 10;
  }

  .s341-filter-items {
    font-size: small;
    text-align: center;
  }

  .s341-filter-item-header {
    font-size: large;
    text-align: left;
    -webkit-text-stroke: thin;
    border-bottom-style: inset;
  }
</style>


<h1 class="title">{{ $category }}</h1><br>

<div class="grid-container">
  <div class="list-group" class="s341-filter-option-sidebar">
    <ul>
      <li class="s341-filter-item-header"><button type="button" class="btn btn-link disabled">Price Filters</button></li>
      <ul>
        <li class="s341-filter-items"><a href="{{ route('categories.show_sort_by_price', [$category, 'asc']) }}"><button type="button" class="btn btn-link">Price Low-High</button></a></li>
        <li class="s341-filter-items"><a href="{{ route('categories.show_sort_by_price', [$category, 'desc']) }}"><button type="button" class="btn btn-link">Price High-Low</button></a></li>
      </ul>
      <li class="s341-filter-item-header"><button type="button" class="btn btn-link disabled">Rating Filters</button></li>
      <ul>
        <li class="s341-filter-items"><a href="{{ route('categories.show_sort_by_price', [$category, 'asc']) }}"><button type="button" class="btn btn-link">Rating Low-High</button></a></li>
        <li class="s341-filter-items"><a href="{{ route('categories.show_sort_by_price', [$category, 'desc']) }}"><button type="button" class="btn btn-link">Rating High-Low</button></a></li>
      </ul>
    </ul>
  </div>
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