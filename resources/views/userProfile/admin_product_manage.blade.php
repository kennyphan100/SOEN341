@extends('layouts.base')

@section('title', $user)

@section('content')

<link rel="stylesheet" href="/css/adminProductsManagement.css">
<link rel="stylesheet" href="/css/products.css">

<h1 class="title">{{ $user->name }}'s Admin Page</h1><br>


<div class="grid-container-outer">

    @include('userProfile.userProfileSidebar')

    <div class="container">
        <!-- <h1 class="debug_value">{{ $products ?? "" }}</h1><br> -->
        <div class="row 1 row-2-cols-3">
            @foreach ($products as $product)
            <div class="col-4 product-row">
                <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset('images/' . $product->image) }}"></a> <br>
                {{-- <div class="product_description"></div> --}}
                <h2 class="product_name"><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></h2>
                <div class="product_price">${{ $product->price }}</div>
                <button type="button" class="btn btn-danger remove_product_button">Remove</button>
            </div>
            @endforeach
        </div>

        <!--    <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Full Name</label>
            <div class="col-sm-10">
                <label id="name" class="col-sm-2 col-form-label">{{$user->name}}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-sm-10">
                <label id="email" class="col-sm-2 col-form-label">{{$user->email}}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="account_type" class="col-sm-2 col-form-label">Account Type</label>
            <div class="col-sm-10">
                <label id="account_type" class="col-sm-2 col-form-label">{{$user->account_type}}</label>
            </div>
        </div>

        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <label id="Address" class="col-sm-2 col-form-label">WIP FIX NEEDED IN DB FOR Address</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="state" class="col-sm-2 col-form-label">State / Province</label>
            <div class="col-sm-10">
                <label id="state" class="col-sm-2 col-form-label">WIP FIX NEEDED IN DB FOR State</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="country" class="col-sm-2 col-form-label">Country</label>
            <div class="col-sm-10">
                <label id="country" class="col-sm-2 col-form-label">WIP FIX NEEDED IN DB FOR Country</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="zipcode" class="col-sm-2 col-form-label">Zipcode</label>
            <div class="col-sm-10">
                <label id="zipcode" class="col-sm-2 col-form-label">WIP FIX NEEDED IN DB FOR Zipcode</label>
            </div>
        </div>
     -->
    </div>
</div>

@endsection