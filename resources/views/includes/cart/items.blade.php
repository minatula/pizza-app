<div class="table-responsive">
    <table class="table table-striped border-bottom" style="min-width: 870px;">
        <thead>
        <tr>
            <th scope="col" class="border-0 bg-light">
                <div class="p-2 px-3 text-uppercase"></div>
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
        @foreach($products as $product)
            <tr>
                <th scope="row" class="border-0">
                    <div class="p-2">
                        <img
                            src="{{ $product->image }}"
                            alt="{{ $product->name }}"
                            width="70"
                            class="img-fluid rounded shadow-sm"
                        />
                    </div>
                </th>
                <td class="border-0 align-middle">
                    <div class="p-2">
                        <h5 class="mb-0">
                            {{ $product->name }}
                        </h5>
                    </div>
                </td>
                <td class="border-0 align-middle">
                    <div class="p-2">
                        <strong>{{ $product->price }} {{$currentCurrency->symbol }}</strong>
                    </div>
                </td>
                <td class="border-0 align-middle d-flex">
                    <form
                        action="{{ route('cart.changeProductAmount', $product->id) }}"
                        class="d-flex p-2"
                        method="POST"
                    >
                        @csrf
                        <input
                            name="productAmount"
                            type="number"
                            min="1"
                            class="form-control text-center"
                            style="max-width: 75px"
                            value="{{ $product->pivot->product_amount }}"
                        />
                        <button type="submit" class="btn">
                            <i class="fas fa-sync"></i>
                        </button>
                    </form>
                </td>
                <td class="border-0 align-middle">
                    <div>
                        <strong>{{ $product->total_price }} {{$currentCurrency->symbol }}</strong>
                    </div>
                </td>
                <td class="border-0 align-middle">
                    <form
                        action="{{ route('cart.removeProduct', $product->id) }}"
                        class="d-flex p-2"
                        method="POST"
                    >
                        @csrf
                        <button type="submit" class="btn">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
