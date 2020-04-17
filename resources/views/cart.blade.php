@extends('layouts.main')
@section('content')
    @include('includes.header')
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
                        <tr>
                            <th scope="row" class="border-0">
                                <div class="p-2">
                                    <img
                                        src="https://img.pizzahut.ru/actions/BO_3e/JPG/pizza_americana_fresh.jpg"
                                        alt="" width="70" class="img-fluid rounded shadow-sm"
                                    />
                                    <div class="ml-3 d-inline-block align-middle">
                                        <h5 class="mb-0">
                                            <a href="#" class="text-dark d-inline-block align-middle">
                                                {product.name}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </th>
                            <td class="border-0 align-middle"><strong>{product.price}</strong></td>
                            <td class="border-0 align-middle d-flex">
                                <input
                                    type="number"
                                    min="1"
                                    class="form-control w-25 text-center"
                                />
                                <button class="btn">
                                    <i class="fas fa-sync"></i>
                                </button>
                            </td>
                            <td class="border-0 align-middle">
                                <button class="btn">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
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
