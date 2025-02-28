@include('web_site.component.nav_bar')

<div class="relative overflow-x-auto mx-auto max-w-screen-lg p-5">
    <table class="w-full text-sm text-left rtl:text-right text-gray-700">
        <thead class="text-xs text-gray-700 uppercase bg-gray-300">
            <tr>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Qty
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3 rounded-e-lg">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartitems as $cartitem)
            <tr class="bg-white">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $cartitem->post->topic ?? 'No topic available' }}
                </th>
                <td class="px-6 py-4 flex items-center">
                    <!-- QTY Label and Input Box on Same Line -->
                   
                    <input type="number" min="1" value="{{ $cartitem->prod_qty }}" class="qty-input w-14 h-6 text-center border rounded-md" data-id="{{ $cartitem->prod_id }}">
                </td>
                <td class="px-6 py-4">
                    ${{ $cartitem->post->price ?? }}
                </td>
                <td class="px-6 py-4">
                    <button class="update-btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded mr-2 text-sm" data-id="{{ $cartitem->prod_id }}">Update</button>
                    <button class="delete-btn bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-sm" data-id="{{ $cartitem->prod_id }}">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
        
        
        
        <tfoot>
            <tr class="font-semibold text-gray-900 bg-gray-300">
                <th scope="row" class="px-7 py-3 text-base">Total</th>
                <td class="px-6 py-3">{{ $cartitems->sum(fn($cartitem) => $cartitem->prod_qty) }}</td>
                <td class="px-6 py-3">${{ $cartitems->sum(fn($cartitem) => $cartitem->post->price * $cartitem->prod_qty) }}</td>
                <td class="px-6 py-3">
                    <a href="" class="checkout-btn bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transform transition duration-300 hover:scale-105">Checkout</a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

@include('web_site.component.footer')
