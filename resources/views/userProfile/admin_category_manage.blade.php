@extends('layouts.base')

@section('title', $user)

@section('content')

<link rel="stylesheet" href="/css/adminProductsManagement.css">
<link rel="stylesheet" href="/css/products.css">

<h1 class="title">{{ $user->name }}'s Admin Page</h1><br>


<div class="grid-container-outer">

    @include('userProfile.userProfileSidebar')

    <div class="container">
       
    </div>
</div>

@endsection