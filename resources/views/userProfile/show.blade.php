@extends('layouts.base')

@section('title', $user_name)

@section('content')

<link rel="stylesheet" href="/css/userProfile.css">

<h1 class="title">{{ $user_name }}'s Profile</h1><br>

<div class="grid-container">
    <div class="list-group" class="s341-user-profile-option-sidebar">
        <ul>
            <li class="s341-user-profile-items"><a href="{{ route('userProfile.show_user_information') }}"><button type="button" class="btn btn-link">User Info</button></a></li>
            
            <!--             
            <li class="s341-user-profile-item-header"><button type="button" class="btn btn-link" disabled>Price Filters</button></li>
            <ul>
                <li class="s341-user-profile-items"><a href="{{ route('categories.show_sort_by_price', [$user_name, 'desc']) }}"><button type="button" class="btn btn-link">Price High-Low</button></a></li>
            </ul>
            <li class="s341-user-profile-item-header"><button type="button" class="btn btn-link" disabled>Rating Filters</button></li>
            <ul>
                <li class="s341-user-profile-items"><a href="{{ route('categories.show_sort_by_price', [$user_name, 'asc']) }}"><button type="button" class="btn btn-link">Rating Low-High</button></a></li>
                <li class="s341-user-profile-items"><a href="{{ route('categories.show_sort_by_price', [$user_name, 'desc']) }}"><button type="button" class="btn btn-link">Rating High-Low</button></a></li>
            </ul>
         -->
        </ul>
    </div>
    <div class="container">
        <div class="row 1 row-2-cols-3">
        </div>
    </div>
</div>

@endsection