<?php
use Illuminate\Support\Facades\Auth;
$user = Auth::user();


?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>



<body>

@extends('layouts.base')

@section('title', 'Order')

@section('content')


<div class="jumbotron text-center">
  <h1 class="display-3">Your order has been placed!</h1>
  <p class="lead">A confirmation email has been sent to: <strong>{{$user->email}}</strong>, your estimated delivery is 7 days.</p>
  <p class="lead"> <strong> Your order number is: {{$last_id}}</strong></p>
  <hr>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="/userProfile_order" role="button">Order details</a>
    <a class="btn btn-primary btn-sm" href="/" role="button">Continue to homepage</a>
  </p>
</div>

@endsection

</body>

</html>

