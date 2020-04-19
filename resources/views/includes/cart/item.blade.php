<tr>
    <th scope="row" class="border-0">
        <div class="p-2">
            <img
                src="{{ $product->image }}"
                alt="{{ $product->name }}"
                width="70"
                class="img-fluid rounded shadow-sm"
            />
            <div class="ml-3 d-inline-block align-middle">
                <h5 class="mb-0">
                    <a href="#" class="text-dark d-inline-block align-middle">
                        {{ $product->name }}
                    </a>
                </h5>
            </div>
        </div>
    </th>
    <td class="border-0 align-middle"><strong>{{ $product->price }} {{ $product->currency_symbol }}</strong></td>
    <td class="border-0 align-middle d-flex">
        <form
            action="{{ route('cart.changeProductAmount', $product->id) }}"
            class="d-flex"
            method="POST"
        >
            @csrf
            <input
                name="productAmount"
                type="number"
                min="1"
                class="form-control w-25 text-center"
                value="{{ $product->pivot->product_amount }}"
            />
            <button type="submit" class="btn">
                <i class="fas fa-sync"></i>
            </button>
        </form>
    </td>
    <td class="border-0 align-middle">
        {{ $product->total_price }} {{ $product->currency_symbol }}
    </td>
    <td class="border-0 align-middle">
        <form
            action="{{ route('cart.removeProduct', $product->id) }}"
            class="d-flex"
            method="POST"
        >
            @csrf
            <button type="submit" class="btn">
                <i class="fa fa-trash"></i>
            </button>
        </form>
    </td>
</tr>
