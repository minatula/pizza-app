@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row py-3">
            @foreach($products as $product)
                @include('includes.product_card', ['product' => $product])
            @endforeach
        </div>
    </div>
@endsection
