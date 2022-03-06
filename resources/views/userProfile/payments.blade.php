@extends('layouts.base')

@section('content')

<link rel="stylesheet" href="/css/userProfile.css">

<h1 class="debug_value">{{ $debug_user_payments ?? "" }}</h1><br>

<h1 class="title">{{ $user->name }}</h1><br>

<div class="grid-container">

    @include('userProfile.userProfileSidebar')

    <div class="container">

        @foreach ($user_payments as $payment)
        <div class="payment_form">
            <form>
                <div class="form-group row">
                    <label for="name_on_card" class="col-sm-2 col-form-label">Name on Card</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="name_on_card" value={{$payment->name_on_card}}>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="credit_card" class="col-sm-2 col-form-label">Credit Card</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="credit_card" value={{$payment->credit_card_number}}>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="credit_card_expiry" class="col-sm-2 col-form-label">Expiration</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="credit_card_expiry" value= {{ $payment->credit_card_expiration}}>
                    </div>
                </div>
            </form>
        </div>
        @endforeach
    </div>
</div>

@endsection