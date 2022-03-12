@extends('layouts.base')

@section('title', "Add Category")

@section('content')

<link rel="stylesheet" href="/css/adminProductsManagement.css">
<link rel="stylesheet" href="/css/products.css">

<h1 class="title">Add Category</h1><br>


<div class="grid-container-outer">

    @include('userProfile.userProfileSidebar')

    <div class="container">
    <div class="product_add_form">
            <form>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection