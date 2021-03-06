@extends('layouts.base')

@section('title', "Payments")

@section('content')

<link rel="stylesheet" href="/css/userProfile.css">

<h1 class="title">Your Payments</h1><br>

<div class="grid-container-outer">

    @include('userProfile.userProfileSidebar')

    <div class="container">

        You don't have any payment methods saved.

        {{-- @foreach ($user_payments as $payment)
        <div class="payment_form">
            <form>
                <div class="form-group row">
                    <label for="name_on_card" class="col-sm-2 col-form-label">Name on Card</label>
                    <div class="col-sm-10">
                        <label id="name_on_card" class="col-sm-2 col-form-label">{{$payment->name_on_card}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="credit_card" class="col-sm-2 col-form-label">Credit Card</label>
                    <div class="col-sm-10">
                        <label id="credit_card" class="col-sm-2 col-form-label">{{$payment->credit_card_number}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="credit_card_expiry" class="col-sm-2 col-form-label">Expiration</label>
                    <div class="col-sm-10">
                        <label id="credit_card_expiry" class="col-sm-2 col-form-label">{{$payment->credit_card_expiration}}</label>
                    </div>
                </div>
            </form>
        </div>
        @endforeach --}}
    </div>
</div>

@endsection