@extends('layouts.base')

@section('title', "Manage Category")

@section('content')

<link rel="stylesheet" href="/css/adminProductsManagement.css">
<link rel="stylesheet" href="/css/products.css">

<h1 class="title">Manage Category</h1><br>


<div class="grid-container-outer">

    @include('userProfile.userProfileSidebar')

    <div class="container">
        @foreach ($categories as $category)
        <div class="col-sm-10">
            <label for="none" class="col-sm-2 col-form-label">{{$category->category_name}}</label>
            <button type="button" class="btn btn-danger remove_product_button">Remove</button>
        </div>

        @endforeach
    </div>
</div>

@endsection