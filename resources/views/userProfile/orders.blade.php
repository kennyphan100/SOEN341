@extends('layouts.base')

@section('title', "Orders")

@section('content')

<link rel="stylesheet" href="/css/userProfile_order.css">

<h1 class="title">Your Orders</h1><br>

<div class="grid-container-outer">

    @include('userProfile.userProfileSidebar')

    <div class="container">

        {{-- @foreach ($user_orders as $order)

        <div class="order_form">
            <form>
                <div class="grid-container-inner">
                    <div class="order_section_1">
                        <div class="form-group row">
                            <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
                            <div class="col-sm-10">
                                <label id="product_name" class="col-sm-2 col-form-label">{{$product_info[0]->name}}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="total_price" class="col-sm-2 col-form-label">Total Price</label>
                            <div class="col-sm-10">
                                <label id="total_price" class="col-sm-2 col-form-label">{{$order->totalprice}}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <label id="status" class="col-sm-2 col-form-label">{{$order->status}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="order_section_2_1">
                        <div class="form-group row">
                            <label for="firstname" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                                <label id="firstname" class="col-sm-2 col-form-label">{{$order->firstname}}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                                <label id="lastname" class="col-sm-2 col-form-label">{{$order->lastname}}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <label id="Address" class="col-sm-2 col-form-label">{{$order->address}} {{$order->address2}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="order_section_2_2">
                        <div class="form-group row">
                            <label for="state" class="col-sm-2 col-form-label">State / Province</label>
                            <div class="col-sm-10">
                                <label id="state" class="col-sm-2 col-form-label">{{$order->state_province}}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-sm-2 col-form-label">Country</label>
                            <div class="col-sm-10">
                                <label id="country" class="col-sm-2 col-form-label">{{$order->country}}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="zipcode" class="col-sm-2 col-form-label">Zipcode</label>
                            <div class="col-sm-10">
                                <label id="zipcode" class="col-sm-2 col-form-label">{{$order->zipcode}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="order_section_3">
                        <div class="form-group row">
                            <label for="payment_method" class="col-sm-2 col-form-label">Payment Method</label>
                            <div class="col-sm-10">
                                <label id="payment_method" class="col-sm-2 col-form-label">{{$order->payment_method}}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="credit_card_num" class="col-sm-2 col-form-label">Credit Card</label>
                            <div class="col-sm-10">
                                <label id="credit_card_num" class="col-sm-2 col-form-label">{{$order->credit_card_number}}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @endforeach --}}
    </div>
</div>

@endsection