@if($user->account_type == "admin")

    @extends('layouts.base')

    @section('title',"All Products")

    @section('content')

    <link rel="stylesheet" href="/css/products.css">

    <h1 class="title">All Products</h1><br>

    
    <h2 class="add_prod"><button class="new_prod_btn"><a href="{{ route('userProfile.show_user_admin_add_product', []) }}">Add Product</a></button><br><br></h2>

    

    <div class="sidenav">
        <h1 class="filter_by_cat">Filter By Category</h1>
        <h2 class = "cat_text"><a href="">Books</a></h2>
        <h2 class = "cat_text"><a href="">Electronics</a></h2>
        <h2 class = "cat_text"><a href="">Jewellery & Watches</a></h2>
        <h2 class = "cat_text"><a href="">Health & Beauty</a></h2>
        <h2 class = "cat_text"><a href="">Sporting Goods</a></h2>
        <h2 class = "cat_text"><a href="">Clothing</a></h2>
        <h2 class = "cat_text"><a href="">Grocery</a></h2>
    </div>

    <div class="container body-data">

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
            <h3 class="a_v_product"><a href="">View Product Details</a><br></h3>
            <h3 class="a_m_product"><a href="">Manage Product</a><br><br><br></h3>

            
        </div>
        @endforeach
        </div>

    
    </div>

    @endsection

@endif