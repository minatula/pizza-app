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
            <strong>{{ $product->price }} {{ $product->currency_symbol }}</strong>
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
            <strong>{{ $product->total_price }} {{ $product->currency_symbol }}</strong>
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
