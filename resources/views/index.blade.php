@extends('layouts.main')

@section('content')
    @include('includes.header')
    <div class="container">
        <div class="row py-3">
            @include('includes.product_card')
            @include('includes.product_card')
            @include('includes.product_card')
            @include('includes.product_card')
            @include('includes.product_card')
        </div>
    </div>
@endsection
