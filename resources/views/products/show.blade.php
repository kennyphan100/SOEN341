@extends('layouts.base')

@section('title', $product->name)

@section('content')

<link rel="stylesheet" href="/css/product.css">

<section class="container sproduct mb-5 pb-5">
    
    <div class="row mt-5">
        <div class="col-lg-5 col-md-12 col-12">
            <img class="img-fluid" src="{{ asset('images/' . $product->image) }}" alt="">
        </div>

        <div class="col-lg-6 col-md-12 col-12">
            <h5 class="category">{{ $product->category }}</h5>

            <h3 class="py-2">{{ $product->name }}</h3>

            <h2 class="mt-4 mb-4">${{ $product->price }}</h2>


            @if ($cart->where('id', $product->id)->count())
            <h4 style="color: rgb(255, 153, 0);">In Cart.</h4>
            @else
                <form action="{{ route('cart.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <label for="quantity">Quantity: </label>
                    <select name="quantity" id="quantity">
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    <br> <br>
                    <button type="submit" class="btn btn-warning">Add to Cart</button>
                </form>
            @endif

            <h4 class="mt-5 mb-3">Product Details</h4>
            <span>
                {{ $product->description }}
            </span>
        </div>
    </div>
    
</section>


@endsection