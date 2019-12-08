@extends('layouts.app')
@section('content')

<!-- START section -->
<section>
    <!-- START .uk-container -->
    <div class="uk-container uk-container-large">
        <ul class="uk-breadcrumb breadcrumb">
            <li><a class="breadcrumb__link" href="{{ route('index') }}">Home</a></li>
            <li><span class="breadcrumb__link-active" href="#">Shopping Bag</span></li>
        </ul>
        <hr class="uk-margin-remove">
    </div>
    <!-- END .uk-container -->
</section>
<!-- END section -->

<!-- START section -->
<section class="uk-section-xsmall">
    <!-- START .uk-container -->
    <div class="uk-container uk-container-large">
        <!-- Success Message -->
        @if (session()->has('success_message'))
        <div class="uk-alert-success" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>{{ session()->get('success_message') }}</p>
        </div>
        @endif
        <!-- Errors Messages -->
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
          <div class="uk-alert-error" uk-alert>
              <a class="uk-alert-close" uk-close></a>
              <p>{{ $error }}</p>
          </div>

            @endforeach
            @endif
            <!-- Check For Items in Bag -->
            @if(Cart::count()>0)
                {{ Cart::count() }} item(s) in the bag
                @else
                <h3>no items in Bag</h3>
                <hr>
                <a class="uk-button uk-button-default" href="{{ route('index') }}"> Continue Shoping</a>
                @endif

                <!-- START uk-grid -->
                <div class="" uk-grid>
                    <!-- START .uk-width-1-3@m -->
                    <div class="uk-width-1-3@m uk-width-1-1">
                        <!-- START .section_theme_gray -->
                        <div class="section_theme_gray card" style="z-index: 979;" uk-sticky="offset: 20; bottom: #container-2">
                            <!-- START card  -->
                            <div class="card card_theme_white">
                                <h3>Order Summary</h3>
                                <hr>

                                <div class="uk-grid-small " uk-grid>
                                    <div class="uk-width-expand" uk-leader>Price</div>
                                    <div>${{ $total }}</div>
                                </div>

                                @if (session()->has('coupon'))
                                <div class="uk-grid-small " uk-grid>
                                    <div class="uk-width-expand" uk-leader>Discount({{ session()->get('coupon')['name'] }})

                                    </div>

                                    <div>-${{ session()->get('coupon')['discount'] }} </div>
                                </div>
                                <form class="" action="{{ route('coupon.destroy') }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button class="uk-button uk-button-default" type="submit" name="button">Remove Coupon</button>

                                </form>
                                <hr>
                                <div class="uk-grid-small " uk-grid>
                                    <div class="uk-width-expand" uk-leader>New Price
                                    </div>

                                    <div>-${{ $newSubtotal }} </div>
                                </div>
                                @endif




                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-expand" uk-leader>Tax(14%)</div>
                                    {{-- <div>${{ Cart::tax() }}
                                </div> --}}
                                <div class="">
                                    ${{ $newTax }}
                                </div>
                            </div>
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-expand" uk-leader>Total Price</div>
                                {{-- <div>${{ Cart::total()  }}
                            </div> --}}
                            <div class="">
                                ${{ $newTotal }}
                            </div>

                        </div>

                        @if (! session()->has('coupon') )

                        <hr>
                        {{-- <button id="bx" class="uk-button uk-button-default uk-width-expand" type="button"> --}}
                        <button class="uk-button uk-button-default uk-width-expand" type="button" uk-toggle="target: #promo; animation:  uk-animation-slide-bottom, uk-animation-slide-bottom">
                            Have A Coupon ?</button>
                        {{-- $('#bx').on('click', function(){ $('#formx').show() }); --}}

                        <!-- START #promo -->
                        <div id="promo" class="" hidden>

                            <form id="formx" class="" action="{{ route('coupon.store') }}" method="post">
                                {{ csrf_field() }}
                                <div class="uk-inline uk-display-block">
                                    <button class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="arrow-right" style="    bottom: -20px;"></button>
                                    <input name="coupon_code" class="input uk-width-expand uk-margin-top" id="coupon_code" type="text" placeholder="Enter Promo Code">
                                </div>
                            </form>

                            {{-- <hr>
                                    <!-- START .uk-button -->
                                    <div class="uk-button uk-button-secondary uk-width-expand">
                                        <span>Total Price : </span>
                                        <b class=""> $ 80 </b>
                                    </div> --}}
                            <!-- END .uk-button -->
                        </div>
                        <!-- END #promo -->

                        @endif
                        <hr>

                        <!-- START div  -->
                        <div class="" style="font-size:14px;">
                            <input class=" accept-checkbox uk-checkbox" type="checkbox" name="" value=""> <label for=""><small class="">I have been able to read and understant <a href="#">Privacy policy</a> . </small></label>
                            <br>
                            <input class=" uk-checkbox" type="checkbox" name="" value=""> <label for=""><small>I want to subscribe to the news letter .</small></label>
                        </div>
                        <!-- END div -->
                        @if ( $newTotal )
                        <hr>
                        <a href="{{ route('checkout.index') }}" class=" checkoutdisabled checkout-button uk-button uk-button-secondary uk-width-expand" type="button" name="button" style="" >
                            Checkout </a>
                        <div class="uk-text-center">
                            <small class="privacyNote">Kindly Accept Privacy Policy Before Proceeding </small>
                        </div>
                        @endif

                    </div>
                    <!-- END .card  -->

                </div>
                <!-- END .section_theme_gray -->

    </div>
    <!-- END .uk-width-1-3@m -->
    <!-- START .uk-width-2-3@m -->
    <div class="uk-width-2-3@m uk-width-1-1 uk-flex-first">
        @foreach (Cart::content() as $item )
        {{-- {{ $item->gift }}
        {{ dd(session()->all()) }} --}}



        {{-- {{ dd(session()->all()) }} --}}
        {{-- {{ dd($item) }} --}}
        <!-- START .card -->
        <div class="card card_theme_white card_type_shopingbag uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">
          @if (Auth::user() != null)
            @if ($item->model->wishlist->isEmpty())
              <div class="uk-transition-fade uk-position-small uk-position-top-left">
                <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
                    {{csrf_field()}}
                    <input class="uk-hidden" name="user_id" type="text" value="{{Auth::user()->id}}" />
                    <input class="uk-hidden" name="product_id" type="text" value="{{$item->model->id}}" />
                    <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                  </form>
                  <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
              </div>
            @else
              <div class="uk-position-small uk-position-top-left">
                <form action="{{route('wishlist.destroy',([Auth::user()->id,$item->model->id]) )}}" id="contact_form" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                    <input class="uk-hidden" name="user_id" type="text" value="{{Auth::user()->id}}" />
                    <input class="uk-hidden" name="product_id" type="text" value="{{$item->model->id}}" />
                    <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart_red"><span><i class="fas fa-heart"></i></span></button>
                  </form>
                                    <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
              </div>
            @endif
          @else
            <div class="uk-transition-fade uk-position-small uk-position-top-left ">
                  <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                  <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
            </div>
          @endif

            <div class=" uk-flex uk-flex-bottom" uk-grid>
                <!-- START .uk-width-1-4@m -->
                <div class="uk-width-1-4@m uk-width-1-1 uk-text-center">
                    <a href="{{ route('shop.show', $item->model->slug) }}">
                        <img src="{{ asset('storage/'.$item->model->thumbnail) }}" alt="" style="max-height:250px;">
                    </a>
                </div>
                <!-- END .uk-width-1-3@m -->
                <!-- START .uk-width-1-3@m -->
                <div class="uk-width-3-4@m uk-width-1-1">
                    <!-- START .uk-text-left@m -->
                    <div class="uk-text-left@m uk-text-center">
                        <h3>{{ $item->model->title }}</h3>
                        <hr>
                        <span>Size : </span><b>3 ML</b>
                        <hr>
                        <span>Price : </span><b>${{ $item->subtotal }}</b>
                        <hr>
                        @if ($item->options->giftprice)
                        <span>Gift :</span> <b> {{ $item->options->giftname }} </b> <b class="uk-float-right"> ${{ $item->options->giftprice * $item->qty }}</b>
                        @php
                        $gift = $item->options->giftprice
                        @endphp
                        <hr>
                        @endif
                        <!-- START uk-grid -->
                        <div class="" uk-grid>
                            <!-- START uk-width-auto -->
                            <div class="uk-width-auto">
                                <span>Quantity :</span>
                            </div>
                            <!-- END .uk-width-auto -->
                            <!-- START .uk-width-expand -->
                            <div class="uk-width-expand">
                                <b><input data-id="{{ $item->rowId }}" class="input uk-width-expand quantity" type="number" value="{{ $item->qty }}" name="" step="1" style="text-align: center;   border: 1px solid #eee; "></b>

                            </div>
                            <!-- END .uk-width-expand -->
                        </div>
                        <!-- END uk-grid -->
                    </div>
                    <!-- END .uk-text-left@m -->
                </div>
                <!-- END .uk-width-1-3@m -->

                <div class="uk-width-1-4@m uk-width-1-1 uk-hidden">
                    <div class="uk-button uk-button-secondary uk-width-expand">
                        <span>Total Price : </span>
                        <b class=""> ${{ $item->subtotal + $item->options->giftprice * $item->qty }} </b>
                    </div>



                </div>
            </div>
            <div class="  uk-position-medium   uk-position-top-right">
                <form class="" action="{{ route('cart.destroy', $item->rowId) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="uk-button uk-button-danger" uk-tooltip="title: Remove From Bag; pos: left" uk-icon="trash"></button>
                </form>


            </div>
        </div>
        <!-- END .card -->
        @endforeach
            @if(Cart::instance('saveForLater')->count()>0)
        <br>
        <hr>
        <h3> WishList </h3>
        <hr>



            {{ Cart::instance('saveForLater')->count() }} item(s) in Wishlist
            @foreach (Cart::instance('saveForLater')->content() as $item )
            <!-- START .card -->
            <div class="card card_theme_white card_type_shopingbag uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">


                <div class=" uk-flex uk-flex-bottom" uk-grid>
                    <!-- START .uk-width-1-3@m -->
                    <div class="uk-width-1-2@m uk-width-1-1">
                        <a href="{{ route('shop.show', $item->model->slug) }}">
                            <img src="{{ asset('storage/'.$item->model->thumbnail) }}" alt="" style="max-height:250px;">
                        </a>
                    </div>
                    <!-- END .uk-width-1-3@m -->
                    <!-- START .uk-width-1-3@m -->
                    <div class="uk-width-1-2@m uk-width-1-1">
                        <!-- START .uk-text-left@m -->
                        <div class="uk-text-left@m uk-text-center">
                            <h3>{{ $item->model->title }}</h3>
                            <hr>
                            <span>Size : </span><b>3 ML</b>
                            <hr>
                            <span>Price :</span><b>${{ $item->model->price }}</b>
                            <hr>
                            <form class="" action="{{ route('saveForLater.switchToCart', $item->rowId) }}" method="post">
                                {{ csrf_field() }}
                                <button type="submit" class="uk-button uk-button-default uk-width-expand">
                                    <span><b>Move To Bag </b></span>
                                </button>
                            </form>

                            <hr>
                            <div class="uk-button uk-button-secondary uk-width-expand">
                                <span>Price : </span>
                                <b class=""> ${{ $item->model->price }} </b>
                            </div>
                        </div>
                        <!-- END .uk-text-left@m -->
                    </div>
                    <!-- END .uk-width-1-3@m -->


                </div>
                <div class="  uk-position-medium   uk-position-top-right">
                    <form class="" action="{{ route('saveForLater.destroy', $item->rowId) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="uk-button uk-button-danger" uk-tooltip="title: Remove From Bag; pos: left" uk-icon="trash"></button>
                    </form>


                </div>
            </div>
            <!-- END .card -->
            @endforeach
            @else
            {{-- <h3> You have no items saved for later</h3> --}}
            @endif





    </div>
    <!-- END .uk-width-2-3@m -->

    </div>
    <!-- END uk-grid -->
    </div>
    <!-- END .uk-container -->
</section>
<section id="container-2">

</section>
<!-- END section -->




@endsection
@section('css')
<style media="screen">
.checkout-button {
  color: #fff !important;
}
    .checkoutdisabled {
        color: #a9a9a9 !important;
        background-color: #f8f8f8;
        pointer-events: none;
        cursor: default;
    }

    .privacyNote {
        font-size: 12px;
    }
</style>
@endsection
@section('js')
<script type="text/javascript">
    (function() {
        const classname = document.querySelectorAll('.quantity');

        Array.from(classname).forEach(function(element) {
            element.addEventListener('change', function() {
                console.log("changed");
                const id = element.getAttribute('data-id');
                console.log(id);
                axios.patch(`bag/${id}`, {
                        quantity: this.value
                    })
                    .then(function(response) {
                        console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            })
        })
    })();

    // To activate checkout button after accepting terms of service
    let acceptCheckbox = $('.accept-checkbox');
    let checkoutButton = $('.checkout-button');
    let privacyNote = $('.privacyNote');
    acceptCheckbox.on('change', function() {
        if (this.checked) {
            // checkoutButton.prop("disabled", false);
            checkoutButton.removeClass('checkoutdisabled');
            privacyNote.hide();

        } else {
            // checkoutButton.prop("disabled", true);
            checkoutButton.addClass('checkoutdisabled');
            privacyNote.show();

        }
    });
</script>
@endsection
