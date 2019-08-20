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
                <a  href="{{ route('orders') }}" class="uk-button uk-button-default uk-width-expand" type="button" name="button"> My Order </a>
            </div>

        </div>
        <hr>
      @if(isset($data))
        <form class="uk-form-horizontal" action="" method="post">
          @csrf

            <div class="uk-grid">
                <div class="uk-width-1-2">
                    <div class="uk-text-center">
                        <h3> Your Oudak Detailes</h3>
                    </div>
                    <hr>
                    {{-- START uk-grid --}}
                    <div class="" uk-grid>
                        <!-- START .uk-width-1-1 -->
                        <div class="uk-width-1-1">
                            <!-- START .uk-margin -->
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Email Address : </label>
                                <!-- START .uk-form-controls -->
                                <div class="uk-form-controls">
                                    <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" value="{{$data->email}}" required="" placeholder="Oudak@oudak.com" disabled="">

                                </div><!-- END .uk-form-controls -->
                            </div><!-- END .uk-margin -->
                        </div><!-- END uk-width-1-1 -->
                        <!-- START .uk-width-1-1 -->
                        <div class="uk-width-1-1">
                            <!-- START .uk-margin -->

                        </div><!-- END uk-width-1-1 -->
                      <!--   <div class="uk-width-1-1" >   Your mail is not verified yet plz <a href="#here the link of verification sent to mail"> Verify it </a></div> -->


                    </div>{{-- END uk-grid --}}


                </div>
                <div class="uk-width-1-2">
                    <div class="uk-text-center">
                        <h3> Billing / Shipping Address</h3>
                        <hr>
                        {{-- START uk-grid --}}
                        <div class="" uk-grid>
                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-1">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">First Name : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" value="{{$data->firstname}}"  type="text" required="" placeholder="Jhon" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->
                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-1">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">Last Name : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="lastname" value="{{$data->lastname}}"  type="text" required="" placeholder="Doe" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->
                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-1">
                              <!-- START .uk-margin -->
                              <div class="uk-margin " id="locationField">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">Address : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="autocomplete" onFocus="geolocate()" name="address" type="text" required="" value="{{$data->address}}"  placeholder="243 naser st" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->

                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-2">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">Zip Code : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" value="{{$data->zipcode}}"  type="text" required="" placeholder="Jhon" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->

                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-2">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">City : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" value="{{$data->city}}"  type="text" required="" placeholder="Jhon" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->

                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-2">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">State : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" value="{{$data->state}}"  type="text" required="" placeholder="Jhon" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->

                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-2">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">Country : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" value="{{$data->country}}"  type="text" required="" placeholder="Jhon" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->

                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-1">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">Near Location : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" value="{{$data->nearlocation}}"  type="text" required="" placeholder="Jhon" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->
                        </div>
                        {{-- END uk-grid --}}







                    </div>
                </div>

            </div>

            <div class="uk-grid">
                <!-- <div class="uk-width-1-2">
                    <hr>
                    <button class="uk-button uk-button-default uk-width-expand" type="submit" name="button"> Save </button>
                </div> -->
                <div class="uk-width-1">
                    <hr>
                    <a href="{{route('edituserpage',['id'=>$data->id])}}"><button class="uk-button uk-button-default uk-width-expand" type="button" name="button"> Edit </button></a>





                </div>

            </div>

        </form>


@elseif(!isset($data))


                <form class="uk-form-horizontal" action="" method="post">
          @csrf

            <div class="uk-grid">
                <div class="uk-width-1-2">
                    <div class="uk-text-center">
                        <h3> Your Oudak Detailes</h3>
                    </div>
                    <hr>
                    {{-- START uk-grid --}}
                    <div class="" uk-grid>
                        <!-- START .uk-width-1-1 -->
                        <div class="uk-width-1-1">
                            <!-- START .uk-margin -->
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Email Address : </label>
                                <!-- START .uk-form-controls -->
                                <div class="uk-form-controls">
                                    <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" required="" placeholder="Oudak@oudak.com" disabled="">

                                </div><!-- END .uk-form-controls -->
                            </div><!-- END .uk-margin -->
                        </div><!-- END uk-width-1-1 -->
                        <!-- START .uk-width-1-1 -->
                        <div class="uk-width-1-1">
                            <!-- START .uk-margin -->

                        </div><!-- END uk-width-1-1 -->
                      <!--   <div class="uk-width-1-1" >   Your mail is not verified yet plz <a href="#here the link of verification sent to mail"> Verify it </a></div> -->


                    </div>{{-- END uk-grid --}}


                </div>
                <div class="uk-width-1-2">
                    <div class="uk-text-center">
                        <h3> Billing / Shipping Address</h3>
                        <hr>
                        {{-- START uk-grid --}}
                        <div class="" uk-grid>
                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-1">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">First Name : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" required="" placeholder="Jhon" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->
                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-1">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">Last Name : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="lastname" type="text" required="" placeholder="Doe" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->
                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-1">
                              <!-- START .uk-margin -->
                              <div class="uk-margin " id="locationField">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">Address : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="autocomplete" onFocus="geolocate()" name="address" type="text" required="" placeholder="243 naser st" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->

                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-2">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">Zip Code : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" required="" placeholder="Jhon" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->

                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-2">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">City : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" required="" placeholder="Jhon" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->

                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-2">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">State : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" required="" placeholder="Jhon" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->

                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-2">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">Country : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" required="" placeholder="Jhon" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->

                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-1">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">Near Location : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" required="" placeholder="Jhon" disabled>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->
                        </div>
                        {{-- END uk-grid --}}







                    </div>
                </div>

            </div>

            <div class="uk-grid">
                <!-- <div class="uk-width-1-2">
                    <hr>
                    <button class="uk-button uk-button-default uk-width-expand" type="submit" name="button"> Save </button>
                </div> -->
                <div class="uk-width-1">
                    <hr>
                    <a href="{{route('adduser')}}"><button class="uk-button uk-button-default uk-width-expand" type="button" name="button"> Edit </button></a>





                </div>

            </div>

        </form>
@endif
{{ $id }}
{{-- {{ $orderproducts }} --}}

{{ $orderproducts }}

<hr>


<table class="uk-table uk-table-striped">
    <thead>
        <tr>
          <th>Orders</th>
          <th>Billing Name</th>
          <th>Price </th>
          <th>Tax</th>
          <th>Total</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
        @if ($order->user_id == $id )

          <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->billing_name }}</td>
            <td>${{ $order->billing_subtotal }}</td>
            <td>${{ $order->billing_tax }}</td>
            <td>${{ $order->billing_total }}</td>
            <td> @foreach ($orderproducts as $orderproduct)
              @if ($order->id == $orderproduct->order_id )
                @foreach ($products as $product)
                  @if ($orderproduct->product_id == $product->id )
                    <a style="font-size:14px;" href="{{ url('shop/'.$product->slug) }}">{{ $product->title}}</a> ,
                  @endif
                @endforeach

              @endif
            @endforeach </td>
            <td> @foreach ($orderproducts as $orderproduct)
              @if ($order->id == $orderproduct->order_id )
                {{ $orderproduct->quantity }}

              @endif
            @endforeach </td>
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
    {{ $orders }}

</section>
@include('layout.footer')
