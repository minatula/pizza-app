<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
    <div class="card">
        <img
            class="card-img-top"
            src="{{ $product->image }}"
            alt="{{ $product->name }}"
        />
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
        </div>
    </div>
</div>
