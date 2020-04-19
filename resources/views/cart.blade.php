@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 py-3 bg-white rounded shadow-sm my-3">

                <div class="table-responsive">
                    <table class="table table-striped border-bottom" style="min-width: 870px;">
                        <thead>
                        <tr>
                            <th scope="col" class="border-0 bg-light">
                                <div class="p-2 px-3 text-uppercase">Product</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="p-2 px-3 text-uppercase">Product</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Price</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Quantity</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Total</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Remove</div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($order->products as $product)
                                @include('includes.cart.item', ['product' => $product])
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-start mb-3">
                    <span class="font-weight-bold d-inline-block mr-2">Total: </span>{{ $order->total }}
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
