@extends('layouts.base')

@section('content')

<link rel="stylesheet" href="/css/userProfile.css">

<h1 class="debug_value">{{ $debug_user_payments ?? "" }}</h1><br>

<h1 class="title">{{ $user->name }}</h1><br>

<div class="grid-container">

    @include('userProfile.userProfileSidebar')

    <div class="container">

    </div>
</div>

@endsection