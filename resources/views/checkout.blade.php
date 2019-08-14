@include('layout.header')
<section>
  <div class="uk-container uk-container-large">
    <ul class="uk-breadcrumb breadcrumb">
      <li><a class="breadcrumb__link" href="#">Home</a></li>
      <li><a class="breadcrumb__link" href="#">Shoping Bag</a></li>
      <li><span class="breadcrumb__link-active">Checkout</span></li>
    </ul>
    <hr class="uk-margin-remove">
  </div>
</section>
<!-- START section -->
<section class="uk-section">
  <div class="uk-container uk-container-large">
    <div class="uk-child-width-1-2" uk-grid>
      <div class="">
        <form class="uk-form-horizontal" action="index.html" method="post">

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Email / Username</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="text" placeholder="Enter Your Email Or Username">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Password </label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="password" placeholder="ENter Your Password">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->
          <div class="uk-text-right">
            <button class="uk-button uk-button-secondary" type="button" name="button"> Login </button>
            <button class="uk-button uk-button-default" type="button" name="button"> Forgot Your Password ? </button>

          </div>

        </form>
      </div>

      <div class="">
        <form class="uk-form-horizontal" action="index.html" method="post">

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">First Name</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="text" placeholder="First Name">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Last Name</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="text" placeholder="Last Name">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Address</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="text" placeholder="Address">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Phone Number</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand " id="form-stacked-text" type="number" placeholder="+1 01023 45687 330">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Email Address</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="email" placeholder="bola@naguib.com">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Password</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="password" placeholder="Enter A password ">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Repeat Password </label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input error uk-width-expand" id="form-stacked-text" type="password" placeholder="Re-enter your password ">
              <small class="uk-text-danger uk-text-small"> This Password Doesnt match </small>

            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->
          <div class="uk-text-right">
            <button class="uk-button uk-button-secondary" type="button" name="button"> Register </button>

          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- END section -->



<!-- START section -->
<section class="uk-section section_theme_gray">
  <!-- START .uk-container -->
  <div class="uk-container uk-container-large">
    <!-- START uk-grid -->
    <div class="uk-child-width-1-2" uk-grid>
      <!-- START div -->
      <div class="">
        @if (session()->has('success_message'))
        <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
    <p>{{ session()->get('success_message') }}</p>
    </div>

        @endif
        @if (count($errors) > 0)
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>

        @endif
        <form id="payment-form" action="{{ route('checkout.store') }}" method="post">
          {{ csrf_field() }}
          {{-- START uk-grid --}}
          <div class="" uk-grid>
            <!-- START .uk-width-1-1 -->
            <div class="uk-width-1-1">
                <!-- START .uk-margin -->
                <div class="uk-margin">
                    <label class="uk-form-label uk-text-left" for="form-stacked-text">Name On Card : </label>
                    <!-- START .uk-form-controls -->
                    <div class="uk-form-controls">
                        <input class="input uk-width-expand" id="name_on_card" name="firstname" type="text" required="" placeholder="Jhon" disabledx>
                    </div><!-- END .uk-form-controls -->
                </div><!-- END .uk-margin -->
            </div><!-- END uk-width-1-1 -->
            <!-- START .uk-width-1-1 -->
            <div class="uk-width-1-1">
                <!-- START .uk-margin -->
                <div class="uk-margin">
                    <label class="uk-form-label uk-text-left" for="form-stacked-text">Email : </label>
                    <!-- START .uk-form-controls -->
                    <div class="uk-form-controls">
                        <input class="input uk-width-expand" id="paymentemail" name="email" type="email" required="" placeholder="Jhon" disabledx>
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
                        <input class="input uk-width-expand" id="autocomplete" onFocus="geolocate()" name="address" type="text" required="" placeholder="243 naser st" disabledx>
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
                        <input class="input uk-width-expand" id="zipcode" name="zipcode" type="number" required="" placeholder="Jhon" disabledx>
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
                        <input class="input uk-width-expand" id="city" name="city" type="text" required="" placeholder="Jhon" disabledx>
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
                        <input class="input uk-width-expand" id="state" name="state" type="text" required="" placeholder="Jhon" disabledx>
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
                        <input class="input uk-width-expand" id="form-stacked-text" name="country" type="text" required="" placeholder="Jhon" disabledx>
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
                        <input class="input uk-width-expand" id="form-stacked-text" name="nearlocation" type="text" required="" placeholder="Jhon" disabledx>
                    </div><!-- END .uk-form-controls -->
                </div><!-- END .uk-margin -->
            </div><!-- END uk-width-1-1 -->
          </div>
          {{-- END uk-grid --}}
          <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
    <button type="submit" name="button"> Comple payment </button>
        </form>
        {{-- To be refactored  --}}
        <style media="screen">
        /**
* The CSS shown here will not be introduced in the Quickstart guide, but shows
* how you can use CSS to style your Element's container.
*/
.StripeElement {
box-sizing: border-box;

height: 40px;

padding: 10px 12px;

border: 1px solid transparent;
border-radius: 4px;
background-color: white;

box-shadow: 0 1px 3px 0 #e6ebf1;
-webkit-transition: box-shadow 150ms ease;
transition: box-shadow 150ms ease;
}

.StripeElement--focus {
box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
border-color: #fa755a;
}

.StripeElement--webkit-autofill {
background-color: #fefde5 !important;
}
        </style>
      </div>
      <!-- END div -->
      <!-- START div -->
      <div class="">
        <h3>Order Summary</h3>
        <hr>

        <!-- card card_theme_white -->
        <div class="card card_theme_white uk-margin-bottom">
          <!-- START .uk-clearfix -->
          @foreach (Cart::content() as $item )


          <div class="uk-clearfix">
            <!-- START .uk-float-right -->
            <div class="uk-float-right"><b>$ {{ $item->model->price }} </b></div> <!-- END .uk-float-right -->
            <!-- START .uk-float-left -->
            <div class="uk-float-left"><b>{{ $item->model->title }}</b>
              <b style="border: 1px solid #eee;  padding: 0px 10px; margin-left: 10px;">
                {{ $item->qty }}</b></div> <!-- END .uk-float-left -->
          </div><!-- END .uk-clearfix -->
          <hr>
            @endforeach

        </div><!-- card card_theme_white -->

        <!-- card card_theme_white -->
        <div class="card card_theme_white">
          <!-- START .uk-clearfix -->
          <div class="uk-clearfix">
            <!-- START .uk-float-right -->
            <div class="uk-float-right"><b>$ {{ Cart::subtotal() }} </b></div> <!-- END .uk-float-right -->
            <!-- START .uk-float-left -->
            <div class="uk-float-left"><b>Sum</b></div> <!-- END .uk-float-left -->
          </div><!-- END .uk-clearfix -->
          <hr>
          <!-- START .uk-clearfix -->
          <div class="uk-clearfix">
            <!-- START .uk-float-right -->
            <div class="uk-float-right"><b>$ {{ Cart::tax() }} </b></div> <!-- END .uk-float-right -->
            <!-- START .uk-float-left -->
            <div class="uk-float-left"><b>Tax</b></div> <!-- END .uk-float-left -->
          </div><!-- END .uk-clearfix -->
          <hr>
          <!-- START .uk-clearfix -->
          <div class="uk-clearfix">
            <!-- START .uk-float-right -->
            <div class="uk-float-right"><b>$ {{ Cart::total() }} </b></div> <!-- END .uk-float-right -->
            <!-- START .uk-float-left -->
            <div class="uk-float-left"><b>Total Price</b></div> <!-- END .uk-float-left -->
          </div><!-- END .uk-clearfix -->
        </div><!-- card card_theme_white -->


      </div> <!-- END div -->
    </div> <!-- END uk-grid -->
  </div> <!-- END .uk-container -->
</section> <!-- END section -->
@include('layout.footer')
