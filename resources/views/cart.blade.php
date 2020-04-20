@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 py-3 bg-white rounded shadow-sm my-3">

                @include('includes.cart.items', ['products' => $order->products])

                <div class="d-flex justify-content-start mb-3">
                    <span class="font-weight-bold d-inline-block mr-2">Total: </span>{{ $order->total }} {{$currentCurrency->symbol }}
                </div>
                <div class="d-flex justify-content-start">
                    <a href="{{ route('order.index') }}" class="btn btn-dark rounded-pill btn-block w-25 d-flex align-items-center justify-content-center m-0">
                        Checkout
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
