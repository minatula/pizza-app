@foreach($products as $product)
    <div class="row ml-0 mr-0 mb-3 border">
        <div class="col-3 text-center py-3">
            <img
                src="{{ $product->image }}"
                alt="{{ $product->name }}"
                width="70"
                class="img-fluid rounded shadow-sm"
            />
        </div>
        <div class="col-3 text-center py-3">
            <h5 class="mb-0">
                {{ $product->name }}
            </h5>
        </div>
        <div class="col-3 text-center py-3">
            <h5>
                {{ $product->pivot->product_amount }}
            </h5>
        </div>
        <div class="col-3 text-center py-3">
            <h5>
                {{ $product->price }} {{ $product->currency_symbol }}
            </h5>
        </div>
    </div>
@endforeach
