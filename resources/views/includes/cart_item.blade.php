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
    <td class="border-0 align-middle"><strong>{{ $product->price }}</strong></td>
    <td class="border-0 align-middle d-flex">
        <input
            type="number"
            min="1"
            class="form-control w-25 text-center"
            value="{{ $product->pivot->product_amount }}"
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
