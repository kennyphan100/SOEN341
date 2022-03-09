@extends('layouts.base')

@section('title', $user)

@section('content')

<link rel="stylesheet" href="/css/userProfile.css">

<h1 class="title">{{ $user->name }}'s Profile</h1><br>

<div class="grid-container-outer">

    @include('userProfile.userProfileSidebar')

    <div class="container">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Full Name</label>
            <div class="col-sm-10">
                <label id="name" class="col-sm-2 col-form-label">{{$user->name}}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-sm-10">
                <label id="email" class="col-sm-2 col-form-label">{{$user->email}}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="account_type" class="col-sm-2 col-form-label">Account Type</label>
            <div class="col-sm-10">
                <label id="account_type" class="col-sm-2 col-form-label">{{$user->account_type}}</label>
            </div>
        </div>

        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <label id="Address" class="col-sm-2 col-form-label">WIP FIX NEEDED IN DB FOR Address</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="state" class="col-sm-2 col-form-label">State / Province</label>
            <div class="col-sm-10">
                <label id="state" class="col-sm-2 col-form-label">WIP FIX NEEDED IN DB FOR State</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="country" class="col-sm-2 col-form-label">Country</label>
            <div class="col-sm-10">
                <label id="country" class="col-sm-2 col-form-label">WIP FIX NEEDED IN DB FOR Country</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="zipcode" class="col-sm-2 col-form-label">Zipcode</label>
            <div class="col-sm-10">
                <label id="zipcode" class="col-sm-2 col-form-label">WIP FIX NEEDED IN DB FOR Zipcode</label>
            </div>
        </div>
    </div>
</div>

@endsection