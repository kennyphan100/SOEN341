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
                    <input type="text" class="form-control" id="productName" required>
                </div>
                <div class="form-group">
                    <label for="description">Description </label>
                    <textarea name="description" id="description" cols="50" rows="5" class="form-control" id="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="category">Category </label> <br>
                    <select name="category" id="category">
                        @foreach ($categories as $category)
                            <option class="form-control" value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price </label>
                    <input type="number" class="form-control" id="price" placeholder="99.99" required>
                </div>
                <div class="form-group">
                    <label for="image">Image </label>
                    <input type="text" class="form-control" id="image" placeholder="airpods.jpg" required>
                </div>

                <button type="submit" class="btn btn-primary" style="margin-bottom: 50px;">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection