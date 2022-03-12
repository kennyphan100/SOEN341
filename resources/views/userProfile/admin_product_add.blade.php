@extends('layouts.base')

@section('title', "Add Product")

@section('content')

<link rel="stylesheet" href="/css/adminProductsManagement.css">
<link rel="stylesheet" href="/css/products.css">

<h1 class="title">Add Product</h1><br>


<div class="grid-container-outer">

    @include('userProfile.userProfileSidebar')

    <div class="container">
        <div class="product_add_form">
            <form>
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input type="text" class="form-control" id="productName">
                </div>
                <div class="form-group">
                    <label for="description">Description </label>
                    <input type="text" class="form-control" id="description">
                </div>
                <div class="form-group">
                    <label for="category">Category </label>
                    <input type="text" class="form-control" id="category">
                </div>
                <div class="form-group">
                    <label for="price">Price </label>
                    <input type="text" class="form-control" id="price">
                </div>
                <div class="form-group">
                    <label for="Image">Image </label>
                    <input type="text" class="form-control" id="Image" placeholder="airpods.jpg">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection