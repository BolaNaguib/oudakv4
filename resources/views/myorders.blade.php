@include('layout.header')
<section class="uk-section">
    <div class="uk-container uk-container-large">
        <div class="uk-grid">
            <div class="uk-width-1-4">
                <a href="{{ route('account') }}" class="uk-button uk-button-default uk-width-expand" type="button" name="button"> Profile </a>
            </div>
            <div class="uk-width-1-4">
                <button class="uk-button uk-button-default uk-width-expand" type="button" name="button"> Track My Order </button>
            </div>
            <div class="uk-width-1-4">
                <button class="uk-button uk-button-default uk-width-expand" type="button" name="button"> Redeem / Refund </button>
            </div>
            <div class="uk-width-1-4">
                <a href="{{ route('orders') }}" class="uk-button uk-button-default uk-width-expand" type="button" name="button"> My Order </a>
            </div>

        </div>
        <hr>



                <table class="uk-table uk-table-striped">
                    <thead>
                        <tr>
                            <th>Orders</th>
                            <th>Billing Name</th>
                            <th>Products</th>
                            <th>Price </th>
                            <th>Tax</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        @if ($order->user_id == $id )

                        <tr>
                            <td style="font-size:14px;">{{ $order->id }}</td>
                            <td style="font-size:14px;">{{ $order->billing_name }}</td>
                            <td style="font-size:14px;">
                                @foreach ($orderproducts as $orderproduct)
                                @if ($order->id == $orderproduct->order_id )
                                @foreach ($products as $product)
                                @if ($orderproduct->product_id == $product->id )
                                <a href="{{ url('shop/'.$product->slug) }}">{{ $product->title}}</a> ,
                                @endif
                                @endforeach

                                @endif
                                @endforeach
                            </td>
                            <td style="font-size:14px;">${{ $order->billing_subtotal }}</td>
                            <td style="font-size:14px;">${{ $order->billing_tax }}</td>
                            <td style="font-size:14px;">${{ $order->billing_total }}</td>

                            {{-- <td>
                                @foreach ($orderproducts as $orderproduct)
                                @if ($order->id == $orderproduct->order_id )
                                {{ $orderproduct->quantity }}

                                @endif
                                @endforeach
                            </td> --}}
                            {{-- @if ($order->shipped)
                  shipped
                @endif --}}
                            {{-- <td>{{ $order->billing_name }}</td>
                            <td>{{ $order->billing_name }}</td> --}}
                        </tr>

                        @endif
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>


    </div>

</section>
@include('layout.footer')
