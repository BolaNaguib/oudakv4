@include('layout.header')
<!-- START section -->
<section>
  <!-- START .uk-container -->
  <div class="uk-container uk-container-large">
    <ul class="uk-breadcrumb breadcrumb">
      <li><a class="breadcrumb__link" href="{{ route('index', app()->getLocale() ) }}">Home</a></li>
      <li><span class="breadcrumb__link-active" href="#">Shoping Bag</span></li>
    </ul>
    <hr class="uk-margin-remove">
  </div>
  <!-- END .uk-container -->
</section>
<!-- END section -->

<!-- START section -->
<section class="uk-section">
  <!-- START .uk-container -->
  <div class="uk-container uk-container-large">
    @if (session()->has('success_message'))
    <div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a>
<p>{{ session()->get('success_message') }}</p>
</div>

    @endif
    @if(count($errors) > 0)
    @foreach($errors->all() as $error)
    {{ $error }}
    @endforeach
    @endif

@if(Cart::count()>0)
{{ Cart::count() }} item(s) in the card
@else
<h3>no items in cart</h3>
<hr>
<a class="uk-button uk-button-default" href="{{ route('shop.index', app()->getLocale() ) }}"> Continue Shoping</a>
@endif

    <!-- START uk-grid -->
    <div class="" uk-grid>
      <!-- START .uk-width-1-3@m -->
      <div class="uk-width-1-3@m uk-width-1-1">
        <!-- START .section_theme_gray -->
        <div class="section_theme_gray card" style="z-index: 980;" uk-sticky="offset: 20; bottom: #container-2">
          <!-- START card  -->
          <div class="card card_theme_white">
            <h3>Order Summary</h3>
            <hr>

            <div class="uk-grid-small " uk-grid>
    <div class="uk-width-expand" uk-leader>Price</div>
    <div>${{ Cart::subtotal() }} </div>
</div>
<!-- <div class="uk-grid-small " uk-grid>
<div class="uk-width-expand" uk-leader>Discount({{ session()->get('coupon')['name'] }})</div>

<div>${{ session()->get('coupon')['discount'] }} </div>
</div> -->
<div class="uk-grid-small" uk-grid>
<div class="uk-width-expand" uk-leader>Tax(14%)</div>
<div>${{ Cart::tax() }} </div>
</div>
<div class="uk-grid-small" uk-grid>
<div class="uk-width-expand" uk-leader>Total Price</div>
<div>${{ Cart::total()  }} </div>
</div>

            <!-- START .uk-button
            <div class="uk-button uk-button-secondary uk-width-expand">
              <span>Price : </span>
              <b class=""> $ {{ Cart::subtotal() }} </b>
            </div>
            <div class="uk-button uk-button-secondary uk-width-expand">
              <span>Tax Price : </span>
              <b class=""> $ {{ Cart::tax() }} </b>
            </div>
            <div class="uk-button uk-button-secondary uk-width-expand">
              <span>Total Price : </span>
              <b class=""> $ {{ Cart::total() }} </b>
            </div>
             END .uk-button -->
            <hr>
            <button class="uk-button uk-button-default" type="button" uk-toggle="target: #promo; animation:  uk-animation-slide-bottom, uk-animation-slide-bottom">
              Have A Coupon ?</button>
            <!-- START #promo -->
            <div id="promo" class="" hidden>
              <form class="" action="{{ route('coupon.store', app()->getLocale() ) }}" method="post">
                {{ csrf_field() }}
                <div class="uk-inline uk-display-block">
                  <button class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="arrow-right" style="    bottom: -20px;"></button>
                  <input name="coupon_code" class="input uk-width-expand uk-margin-top" id="coupon_code" type="text" placeholder="Enter Promo Code">
                </div>
              </form>


              <hr>
              <!-- START .uk-button -->
              <div class="uk-button uk-button-secondary uk-width-expand">
                <span>Total Price : </span>
                <b class=""> $ 80 </b>
              </div>
              <!-- END .uk-button -->
            </div>
            <!-- END #promo -->

            <hr>
            <!-- START div  -->
            <div class="" style="font-size:14px;">
              <input class=" uk-checkbox" type="checkbox" name="" value=""> <label for=""><small class="">I have been able to read and understant <a href="#">Privacy policy</a> . </small></label>
              <br>
              <input class=" uk-checkbox" type="checkbox" name="" value=""> <label for=""><small>I want to subscribe to the news letter .</small></label>

            </div>
            <!-- END div -->
            <hr>
            <button class="uk-button uk-button-secondary uk-width-expand" type="button" name="button"> Checkout </button>

          </div>
          <!-- END .card  -->

        </div>
        <!-- END .section_theme_gray -->

      </div>
      <!-- END .uk-width-1-3@m -->
      <!-- START .uk-width-2-3@m -->
      <div class="uk-width-2-3@m uk-width-1-1 uk-flex-first">
        @foreach (Cart::content() as $item )

        <!-- START .card -->
        <div class="card card_theme_white card_type_shopingbag uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">
          <!-- START uk-position-top-right -->
          <div class="uk-transition-fade uk-position-small uk-position-top-left ">
            <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart" uk-tooltip="title: Give a Heart; pos: left"><span uk-icon="heart"></span></button>
            <form class="" action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="post">
              {{ csrf_field() }}
              <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_star" uk-tooltip="title: Add To Favorite; pos: left"><span uk-icon="star"></span></button>

            </form>

            <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_mail" uk-tooltip="title: Send to Email; pos: left"><span uk-icon="mail"></span></button>
            <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social" uk-tooltip="title: Share on social Media; pos: left"><span uk-icon="social"></span></button>
          </div><!-- END uk-position-top-right -->

          <div class=" uk-flex uk-flex-bottom" uk-grid>
            <!-- START .uk-width-1-3@m -->
            <div class="uk-width-1-4@m uk-width-1-1">
              <a href="{{ route('shop.show', $item->model->slug) }}">
              <img src="{{ asset('storage/'.$item->model->mainimage) }}" alt="" style="max-height:250px;">
</a>
            </div>
            <!-- END .uk-width-1-3@m -->
            <!-- START .uk-width-1-3@m -->
            <div class="uk-width-1-2@m uk-width-1-1">
              <!-- START .uk-text-left@m -->
              <div class="uk-text-left@m uk-text-center">
                <h3>{{ $item->model->name }}</h3>
                <hr>
                <span>Size : </span><b>3 ML</b>
                <hr>
                <span>Price : </span><b>{{ $item->model->price }}</b>
                <hr>
                <!-- START uk-grid -->
                <div class="" uk-grid>
                  <!-- START uk-width-auto -->
                  <div class="uk-width-auto">
                    <span>Quantity :</span>
                  </div>
                  <!-- END .uk-width-auto -->
                  <!-- START .uk-width-expand -->
                  <div class="uk-width-expand">
                    <b><input data-id="{{ $item->rowId }}" class="input uk-width-expand quantity" type="number"
                     value="{{ $item->qty }}" name="" step="1" style="text-align: center;   border: 1px solid #eee; "></b>

                  </div>
                  <!-- END .uk-width-expand -->
                </div>
                <!-- END uk-grid -->
              </div>
              <!-- END .uk-text-left@m -->
            </div>
            <!-- END .uk-width-1-3@m -->

            <div class="uk-width-1-4@m uk-width-1-1 ">
              <div class="uk-button uk-button-secondary uk-width-expand">
                <span>Total Price : </span>
                <b class=""> ${{ $item->subtotal }} </b>
              </div>



            </div>
          </div>
          <div class="  uk-position-medium   uk-position-top-right">
            <form class="" action="{{ route('cart.destroy', $item->rowId) }}" method="post">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" class="uk-button uk-button-danger"
                 uk-tooltip="title: Remove From Cart; pos: left" uk-icon="trash"></button>
            </form>


          </div>
        </div>
        <!-- END .card -->
@endforeach
<br>
<hr>
<h3> Favorite Items </h3>
<hr>


@if(Cart::instance('saveForLater')->count()>0)
{{ Cart::instance('saveForLater')->count() }} item(s) in Favorites
@foreach (Cart::instance('saveForLater')->content() as $item )
<!-- START .card -->
<div class="card card_theme_white card_type_shopingbag uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">


  <div class=" uk-flex uk-flex-bottom" uk-grid>
    <!-- START .uk-width-1-3@m -->
    <div class="uk-width-1-2@m uk-width-1-1">
      <a href="{{ route('shop.show', $item->model->slug) }}">
      <img src="{{ asset('storage/'.$item->model->mainimage) }}" alt="" style="max-height:250px;">
</a>
    </div>
    <!-- END .uk-width-1-3@m -->
    <!-- START .uk-width-1-3@m -->
    <div class="uk-width-1-2@m uk-width-1-1">
      <!-- START .uk-text-left@m -->
      <div class="uk-text-left@m uk-text-center">
        <h3>{{ $item->model->name }}</h3>
        <hr>
        <span>Size : </span><b>3 ML</b>
        <hr>
        <span>Price : </span><b>{{ $item->model->price }}</b>
        <hr>
        <form class="" action="{{ route('saveForLater.switchToCart', $item->rowId) }}" method="post">
          {{ csrf_field() }}
          <button type="submit" class="uk-button uk-button-default uk-width-expand">
            <span>Move To Cart </span>
          </button>
        </form>

        <hr>
        <div class="uk-button uk-button-secondary uk-width-expand">
          <span>Price : </span>
          <b class=""> $ </b>
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
      <button type="submit" class="uk-button uk-button-danger"
         uk-tooltip="title: Remove From Cart; pos: left" uk-icon="trash"></button>
    </form>


  </div>
</div>
<!-- END .card -->
@endforeach
@else
<h3> You have no items saved for later</h3>
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




@include('layout.footer')
