@extends('layouts.base')

<!-- @section('title', $user) -->

@section('content')

<link rel="stylesheet" href="/css/userProfile.css">

<!-- <h1 class="debug_value">{{ $product_info ?? "" }}</h1><br> -->

<h1 class="title">{{ $user->name }}'s Profile</h1><br>

<div class="grid-container">

    @include('userProfile.userProfileSidebar')

    <div class="container">
        <div class="order_form">
            <form>
                <div class="form-group row">
                    <label for="name_on_card" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                        <label id="name_on_card" class="col-sm-2 col-form-label">{{$product_info[0]->name}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="firstname" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                        <label id="firstname" class="col-sm-2 col-form-label">{{$user_orders[0]->firstname}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                        <label id="lastname" class="col-sm-2 col-form-label">{{$user_orders[0]->lastname}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <label id="Address" class="col-sm-2 col-form-label">{{$user_orders[0]->address}} {{$user_orders[0]->address2}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="state" class="col-sm-2 col-form-label">State / Province</label>
                    <div class="col-sm-10">
                        <label id="state" class="col-sm-2 col-form-label">{{$user_orders[0]->state_province}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="country" class="col-sm-2 col-form-label">Country</label>
                    <div class="col-sm-10">
                        <label id="country" class="col-sm-2 col-form-label">{{$user_orders[0]->country}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="zipcode" class="col-sm-2 col-form-label">Zipcode</label>
                    <div class="col-sm-10">
                        <label id="zipcode" class="col-sm-2 col-form-label">{{$user_orders[0]->zipcode}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="total_price" class="col-sm-2 col-form-label">Total Price</label>
                    <div class="col-sm-10">
                        <label id="total_price" class="col-sm-2 col-form-label">{{$user_orders[0]->totalprice}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <label id="status" class="col-sm-2 col-form-label">{{$user_orders[0]->status}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="payment_method" class="col-sm-2 col-form-label">Payment Method</label>
                    <div class="col-sm-10">
                        <label id="payment_method" class="col-sm-2 col-form-label">{{$user_orders[0]->payment_method}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="payment_method" class="col-sm-2 col-form-label">Payment Method</label>
                    <div class="col-sm-10">
                        <label id="payment_method" class="col-sm-2 col-form-label">{{$user_orders[0]->payment_method}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="credit_card_num" class="col-sm-2 col-form-label">Credit Card</label>
                    <div class="col-sm-10">
                        <label id="credit_card_num" class="col-sm-2 col-form-label">{{$user_orders[0]->credit_card_number}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="credit_card_num" class="col-sm-2 col-form-label">Credit Card</label>
                    <div class="col-sm-10">
                        <label id="credit_card_num" class="col-sm-2 col-form-label">{{$user_orders[0]->credit_card_number}}</label>
                    </div>
                </div>
            </form>
        </div>


    </div>
</div>

@endsection