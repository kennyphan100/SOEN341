@extends('layouts.base')

@section('title', $user_name)

@section('content')

<link rel="stylesheet" href="/css/userProfile.css">

<h1 class="title">{{ $user_name }}'s Profile</h1><br>

<div class="grid-container">

    @include('userProfile.userProfileSidebar')
    
    <div class="container">

    </div>
</div>

@endsection