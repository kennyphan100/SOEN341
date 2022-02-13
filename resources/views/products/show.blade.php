@extends('layouts.base')

@section('title', 'Products - ...')

@section('content')

<link rel="stylesheet" href="/css/product.css">

<section class="container sproduct mb-5 pb-5">
    
    <div class="row mt-5">
        <div class="col-lg-5 col-md-12 col-12">
            <img class="img-fluid" src="{{ asset('images/twilight.jpg') }}" alt="">
        </div>

        <div class="col-lg-6 col-md-12 col-12">
            <h5 class="category">Book</h5>

            <h3 class="py-2">Twilight</h3>

            <h2 class="mt-4 mb-4">$9.99</h2>

            <span id="quantity_text">Quantity: </span>
            <select name="quantity" id="quantity">
                @for ($i = 1; $i <= 10; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>

            <button type="submit" class="btn btn-warning">Add to Cart</button>

            <h4 class="mt-5 mb-3">Product Details</h4>
            <span>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </span>
        </div>
    </div>

    
</section>


@endsection