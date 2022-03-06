@extends('layouts.base')

<!-- @section('title', $user_orders) -->

@section('content')

<link rel="stylesheet" href="/css/userProfile.css">

<h1 class="title">{{ $user_orders }}</h1><br>

<div class="grid-container">

    @include('userProfile.userProfileSidebar')
    
    <div class="container">

    </div>
</div>

@endsection