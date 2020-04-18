@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('includes/order_details', ['products' => $order->products])
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('includes/order_form')
            </div>
        </div>
    </div>
@endsection
