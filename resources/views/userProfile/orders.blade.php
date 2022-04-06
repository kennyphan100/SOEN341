@extends('layouts.base')

@section('title', "Orders")

@section('content')

<link rel="stylesheet" href="/css/userProfile_order.css">


<h1 class="title">Your Orders</h1><br>

<div class="grid-container-outer">
    @include('userProfile.userProfileSidebar')

    @if(count($currentOrder) > 0)
        <div class="container">
            @php
                $temp = $currentOrder[0]->id;
                $index = 0;
            @endphp

            @while($index <= sizeof($currentOrder)-1 && $temp == $currentOrder[$index]->id)
                <div class="card space">
                    <div class="card-header">
                        <div class="items-center justify-between">
                            <div class="">Order #{{$currentOrder[$index]->id}}</div>
                            <div class="">Total Cost: ${{$currentOrder[$index]->order_total}}</div>
                            <div>Order Placed: {{$currentOrder[$index]->created_at}}</div>
                        </div>
                    </div>
                    <div class="card-body">
                        @for($index; $index <= sizeof($currentOrder)-1; $index++)
                            @if($currentOrder[$index]->id != $temp)
                                @php
                                    $temp = $currentOrder[$index]->id;
                                    break;
                                @endphp
                            @endif
                            <!-- A single product -->
                            <div class="item">
                                <!-- Product Image -->
                                <div class="item-image">
                                    <img src="{{ URL::asset('images/'. $currentOrder[$index]->image);}}" alt="..." />
                                </div>

                                <!-- Product Description -->
                                <div class="item-description">
                                    <span>{{ $currentOrder[$index]->name }}</span>
                                </div>

                                <!-- Product Quantity -->
                                <div class="item-quantity">
                                    Quantity: {{$currentOrder[$index]->product_quantity}}
                                </div>

                            </div>
                            <!-- End of a product -->
                        @endfor
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('userProfile.order_update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="order_id" value="{{ $currentOrder[$index-1]->id }}">
                            <button class="btn btn-danger" type="submit" id="cancel_order">Cancel Order</button>
                        </form>
                    </div>
                </div>
            @endWhile
        @else
            <h4>
                You have no pending orders.
                <img src="/images/pepe_crying.png" alt="" width="50px" height="50px">
            </h4>
        </div>
    @endif
</div>
</div>

@endsection