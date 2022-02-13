@extends('layouts.base')

@section('title', 'Cart')

@section('content')

<link rel="stylesheet" href="{{ URL::asset('css/cart/cart.css'); }}"/>

<div class="shopping-cart-body">
    <div class="shopping-cart">
        <div class="title">
            Shopping Cart
        </div>

        <!-- A single product -->
        <div class="item">
            <!-- Delete Button -->
            <div class="btn-container">
                <span class="delete-button"></span>
            </div>

            <!-- Product Image -->
            <div class="item-image">
                <img src="{{ URL::asset('images/airpods.jpg'); }}" alt="..." />
            </div>

            <!-- Product Description -->
            <div class="item-description">
                <span>ITEM</span>
                <span>DESCRIPTION</span>
                <span>HERE</span>
            </div>

            <!-- Product Quantity -->
            <div class="item-quantity">
                <button class="increase-button" type="button" name="increaseButton">
                    <img src="{{ URL::asset('images/plus.svg'); }}" alt="..."/>
                </button>
                <input type="text" name="quantity" value="1">
                <button class="decrease-button" type="button" name="decreaseButton">
                    <img src="{{ URL::asset('images/minus.svg'); }}" atl="..."/>
                </button>
            </div>

            <!-- Product Price -->
            <div class="item-price">$$$$</div>

        </div>
        <!-- End of a product -->

        <!-- A single product -->
        <div class="item">
            <!-- Delete Button -->
            <div class="btn-container">
                <span class="delete-button"></span>
            </div>

            <!-- Product Image -->
            <div class="item-image">
                <img src="{{ URL::asset('images/airpods.jpg'); }}" alt="..." />
            </div>

            <!-- Product Description -->
            <div class="item-description">
                <span>ITEM</span>
                <span>DESCRIPTION</span>
                <span>HERE</span>
            </div>

            <!-- Product Quantity -->
            <div class="item-quantity">
                <button class="increase-button" type="button" name="increaseButton">
                    <img src="{{ URL::asset('images/plus.svg'); }}" alt="..."/>
                </button>
                <input type="text" name="quantity" value="1">
                <button class="decrease-button" type="button" name="decreaseButton">
                    <img src="{{ URL::asset('images/minus.svg'); }}" atl="..."/>
                </button>
            </div>

            <!-- Product Price -->
            <div class="item-price">$$$$</div>

        </div>
        <!-- End of a product -->

        <!-- A single product -->
        <div class="item">
            <!-- Delete Button -->
            <div class="btn-container">
                <span class="delete-button"></span>
            </div>

            <!-- Product Image -->
            <div class="item-image">
                <img src="{{ URL::asset('images/airpods.jpg'); }}" alt="..." />
            </div>

            <!-- Product Description -->
            <div class="item-description">
                <span>ITEM</span>
                <span>DESCRIPTION</span>
                <span>HERE</span>
            </div>

            <!-- Product Quantity -->
            <div class="item-quantity">
                <button class="increase-button" type="button" name="increaseButton">
                    <img src="{{ URL::asset('images/plus.svg'); }}" alt="..."/>
                </button>
                <input type="text" name="quantity" value="1">
                <button class="decrease-button" type="button" name="decreaseButton">
                    <img src="{{ URL::asset('images/minus.svg'); }}" atl="..."/>
                </button>
            </div>

            <!-- Product Price -->
            <div class="item-price">$$$$</div>

        </div>
        <!-- End of a product -->

        <!-- A single product -->
        <div class="item">
            <!-- Delete Button -->
            <div class="btn-container">
                <span class="delete-button"></span>
            </div>

            <!-- Product Image -->
            <div class="item-image">
                <img src="{{ URL::asset('images/airpods.jpg'); }}" alt="..." />
            </div>

            <!-- Product Description -->
            <div class="item-description">
                <span>ITEM</span>
                <span>DESCRIPTION</span>
                <span>HERE</span>
            </div>

            <!-- Product Quantity -->
            <div class="item-quantity">
                <button class="increase-button" type="button" name="increaseButton">
                    <img src="{{ URL::asset('images/plus.svg'); }}" alt="..."/>
                </button>
                <input type="text" name="quantity" value="1">
                <button class="decrease-button" type="button" name="decreaseButton">
                    <img src="{{ URL::asset('images/minus.svg'); }}" atl="..."/>
                </button>
            </div>

            <!-- Product Price -->
            <div class="item-price">$$$$</div>

        </div>
        <!-- End of a product -->

        <!-- A single product -->
        <div class="item">
            <!-- Delete Button -->
            <div class="btn-container">
                <span class="delete-button"></span>
            </div>

            <!-- Product Image -->
            <div class="item-image">
                <img src="{{ URL::asset('images/ps5.jpg'); }}" alt="..."/>
            </div>

            <!-- Product Description -->
            <div class="item-description">
                <span>ITEM</span>
                <span>DESCRIPTION</span>
                <span>HERE</span>
            </div>

            <!-- Product Quantity -->
            <div class="item-quantity">
                <button class="increase-button" type="button" name="increaseButton">
                    <img src="{{ URL::asset('images/plus.svg'); }}" alt="..."/>
                </button>
                <input type="text" name="quantity" value="1">
                <button class="decrease-button" type="button" name="decreaseButton">
                    <img src="{{ URL::asset('images/minus.svg'); }}" atl="..."/>
                </button>
            </div>

            <!-- Product Price -->
            <div class="item-price">$$$$</div>

        </div>
        <!-- End of a product -->

    </div>
    <!-- Product Checkout Information -->
    <div class="items-checkout">
        <div class="items-subtotal">Sub-Total:</div>
        <div class="items-total-amount">$$$$$</div>
        <button class="checkout-click">Checkout</button>
    </div>
</div>

@endsection