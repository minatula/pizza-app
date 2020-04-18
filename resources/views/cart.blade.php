@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
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
                                <div class="py-2 text-uppercase">Remove</div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($order->products as $product)
                                @include('includes/cart_item', ['product' => $product])
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-start">
                        <a href="#" class="btn btn-dark rounded-pill btn-block w-25 d-flex align-items-center justify-content-center m-0">
                            Checkout
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
