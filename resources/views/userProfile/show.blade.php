@extends('layouts.base')

@section('title', $user_name)

@section('content')

<!-- <link rel="stylesheet" href="/css/products.css"> -->

<h1 class="title">{{ $user_name }}</h1><br>

<div class="grid-container">
  <div class="list-group" class="s341-filter-option-sidebar">
    <ul>
      <li class="s341-filter-item-header"><button type="button" class="btn btn-link" disabled>Price Filters</button></li>
      <ul>
        <li class="s341-filter-items"><a href="{{ route('categories.show_sort_by_price', [$user_name, 'asc']) }}"><button type="button" class="btn btn-link">Price Low-High</button></a></li>
        <li class="s341-filter-items"><a href="{{ route('categories.show_sort_by_price', [$user_name, 'desc']) }}"><button type="button" class="btn btn-link">Price High-Low</button></a></li>
      </ul>
      <li class="s341-filter-item-header"><button type="button" class="btn btn-link" disabled>Rating Filters</button></li>
      <ul>
        <li class="s341-filter-items"><a href="{{ route('categories.show_sort_by_price', [$user_name, 'asc']) }}"><button type="button" class="btn btn-link">Rating Low-High</button></a></li>
        <li class="s341-filter-items"><a href="{{ route('categories.show_sort_by_price', [$user_name, 'desc']) }}"><button type="button" class="btn btn-link">Rating High-Low</button></a></li>
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

    </div>

  </div>
</div>

  @endsection