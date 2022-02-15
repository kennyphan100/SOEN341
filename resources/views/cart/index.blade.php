@extends('layouts.base')

@section('title', 'Shopping Cart')

@section('content')

<link rel="stylesheet" href="{{ URL::asset('css/cart/cart.css'); }}"/>

<div class="shopping-cart-body">
    <div class="shopping-cart">
        
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if (count($products) > 0)
            <div class="title">Shopping Cart</div>

            @foreach($products as $product)
                <!-- A single product -->
                <div class="item">
                    <!-- Delete Button -->
                    <div class="btn-container">
                        <form action="{{ route('cart.delete') }}" method="POST">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="row_id" value="{{ $product->rowId }}">
                            <button id="submit-button" type="submit">
                                <span class="delete-button">X</span>
                            </button>
                        </form>
                    </div>

                    <!-- Product Image -->
                    <div class="item-image">
                        <img src="{{ URL::asset('images/' . $product->options->image); }}" alt="..." />
                    </div>

                    <!-- Product Description -->
                    <div class="item-description">
                        <span>{{ $product->name }}</span>
                        {{-- <span>DESCRIPTION</span>
                        <span>HERE</span> --}}
                    </div>

                    <!-- Product Quantity -->
                    <div class="item-quantity">
                        <form action="{{ route('cart.update') }}" method="POST" class="change-quantity" >
                            @method('patch')
                            @csrf
                            <input type="hidden" name="row_id" value="{{ $product->rowId }}">
                            <input type="hidden" name="quantity" value="{{ $product->qty + 1 }}">
                            
                            <button class="increase-button" type="submit" name="increaseButton">
                                <img src="{{ URL::asset('images/plus.svg'); }}" alt="..."/>
                            </button>
                        </form>

                        <input type="text" value="{{ $product->qty }}" min=1 name="quantity">

                        <form action="{{ route('cart.update', ['id'=>1, 'something'=>6]) }}" method="POST" class="change-quantity" >
                            @method('patch')
                            @csrf
                            <input type="hidden" name="row_id" value="{{ $product->rowId }}">
                            <input type="hidden" name="quantity" value="{{ $product->qty - 1 }}">

                            <button class="decrease-button" type="submit" name="decreaseButton">
                                <img src="{{ URL::asset('images/minus.svg'); }}" atl="..."/>
                            </button>
                        </form>

                    </div>

                    <!-- Product Price -->
                    <div class="item-price">${{ $product->price }}</div>

                </div>
                <!-- End of a product -->
            @endforeach
            
            @php
                // Calculate subtotal
                $subtotal = 0;
                $nb_of_items = 0;
            
                foreach($products as $product) {
                    $subtotal += ($product->price*$product->qty);
                    $nb_of_items += $product->qty;
                }

            @endphp
        
            <!-- Product Checkout Information -->
            <div class="items-checkout">
                <div class="items-subtotal">Sub-Total ({{$nb_of_items}} items):</div>
                <div class="items-total-amount">${{ $subtotal }}</div>
                <a href="/checkout">
                <button class="checkout-click" >Proceed to Checkout</button>
                </a>
            </div>

        @else
            <h1 class="title">
                Your Shopping Cart is Empty.
                <img src="/images/pepe_crying.png" alt="" width="50px" height="50px">
            </h1>
            
        @endif

    </div>

</div>

@endsection