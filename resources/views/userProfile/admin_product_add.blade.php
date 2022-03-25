@extends('layouts.base')

@section('title', "Add Product")

@section('content')

<link rel="stylesheet" href="/css/adminProductsManagement.css">
<link rel="stylesheet" href="/css/products.css">

<h1 class="title">Add Product</h1><br>

@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-block">
        <strong>{{ $error }}</strong>
    </div>
    @endforeach
@endif

<div class="grid-container-outer body-data">

    @include('userProfile.userProfileSidebar')

    <div class="container">
        <div class="product_add_form">
            <form action="{{ route('userProfile.add_product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input type="text" name="product_name" class="form-control" id="productName" required value="{{ old('product_name') }}">
                </div>
                <div class="form-group">
                    <label for="description">Description </label>
                    <textarea name="description" id="description" cols="50" rows="5" class="form-control" id="description" required >{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="category">Category </label> <br>
                    <select name="category" id="category">
                        @foreach ($categories as $category)
                            <option class="form-control" value="{{ $category->category_name }}" {{ old('category') == $category->category_name ? 'selected' : '' }}> {{ $category->category_name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price </label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="99.99" required value="{{ old('price') }}">
                </div>
                <div class="form-group">
                    <label for="image">Image </label>
                    <input type="file" name="image" class="form-control" id="image" placeholder="airpods.jpg">
                </div>

                <button type="submit" class="btn btn-primary" style="margin-bottom: 50px;">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection