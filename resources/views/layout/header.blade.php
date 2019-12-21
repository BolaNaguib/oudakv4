<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="@if(app()->getLocale() =='ar') rtl @else ltr @endif">
  {{-- <div class="preloader"></div> --}}
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="nofollow" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <title> Oudak </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- Main Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700,900|Playfair+Display:400,700,900" rel="stylesheet">
  <!-- UIkit CSS -->
@if( app()->getLocale() =='ar' )
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/css/uikit-rtl.min.css" integrity="sha256-Ic5U3FedsJiK/DgX82eF245xOS/bopTbQ1ev1j2GeOY=" crossorigin="anonymous" />
@else
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />
@endif
<!--
/**
 * @license
 * MyFonts Webfont Build ID 3804158, 2019-09-04T18:34:38-0400
 *
 * The fonts listed in this notice are subject to the End User License
 * Agreement(s) entered into by the website owner. All other parties are
 * explicitly restricted from using the Licensed Webfonts(s).
 *
 * You may obtain a valid license at the URLs below.
 *
 * Webfont: NicolasCoc-Reg by URW
 * URL: https://www.myfonts.com/fonts/urw/nicolas-cochin/t-regular/
 * Copyright: Copyright 2010 URW++ Design &amp; Development Hamburg
 * Licensed pageviews: 1,010,000
 *
 *
 * License: https://www.myfonts.com/viewlicense?type=web&buildid=3804158
 *
 * © 2019 MyFonts Inc
*/

-->
{{-- <link rel="stylesheet" type="text/css" href="fonts/MyFontsWebfontsKit.css"> --}}
  <!-- Style -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="https://js.stripe.com/v3/"></script>
<style media="screen">
.preloader {
 position: fixed;
 top: 0;
 left: 0;
 width: 100%;
 height: 100vh;
 z-index: 9999;
 background-image: url('https://3.top4top.net/p_1363qbs2x1.gif');
 /* background-image: url('https://5.top4top.net/p_13284bw5v1.gif'); */
 background-repeat: no-repeat;
 background-color: #FFF;
 background-position: center;
}
.detail {
    height: 100%;
}
.top-promo {
    background-color: #000;
    color: #fff;
    padding: 10px 0px;
    text-align: center;
}
.top-promo a {
  color: #fff !important;
  text-decoration: none;

}
.top-promo a:hover {
  text-decoration: none;
  color: #ffc600 !important;

}
ul li:last-of-type{
  border-bottom: none;
}
.main-carditems{
  border-radius: 10px;
padding: 10px;
    font-size: 12px;
}
.main-carditems-thumb{
  width: 25px;
  height: 25px;
}
.main-carditems-list{
  margin: 0px !important;
padding: 10px 0px;
}
.main-carditems-button{
  background-color: #000;
display: block;
padding: 5px 0px;
margin-top: 10px;
color: #fff !important;
}
.main-carditems-button:hover{
  color:#fff;
}
</style>
@laravelPWA
</head>

<body>
  {{ $session_id }}

  <!-- START header -->
  <header class="" uk-sticky style="background-color: #fcfcfc;">

@if ( setting('top-navbar.active') )
  <div id="toggle-animation"
  class="top-promo top_promo uk-position-relative uk-background-center-center uk-background-cover "
  style="background-image: url('{{ asset('storage/'.setting('top-navbar.top_navbar_bg')) }}');">
    <div class="uk-container uk-container-large">
      {!! setting('top-navbar.top_navbar_offer') !!}
    </div>
    <button id="PromoAccepted" href="#toggle-animation" style="    position: absolute;
  right: 20px;
  top: 0px;
  background-color: transparent;
  border: none;
  CURSOR: pointer;"
    type="button" uk-toggle="target: #toggle-animation; animation: uk-animation-fade">x</button> </div>
@endif


    <!-- START .navbar_type_top -->
    <div class="navbar_type_top uk-visible@s">
      <!-- START .uk-container -->
      <div class="uk-container uk-container-large">
        <!-- START uk-navbar -->
        <nav uk-navbar>
          <!-- START .uk-navbar-right -->
          <div class="uk-navbar-right">
            <!-- START .uk-navbar-nav -->
            <ul class="uk-navbar-nav">
              <li><a href="#">USA <span uk-icon="triangle-down"></span></a></li>
              <li><a href="">{{ app()->getLocale() }}<span uk-icon="triangle-down"></span> </a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                      {{-- Check for WEbsite LAnuage --}}
                      <?php $params = Route::current()->parameters(); ?>
                      @if(app()->getLocale() =='ar')
                        <li><a href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'en')) }}">English</a></li>
                        <li><a href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'sp')) }}">Spanish</a></li>
                      @elseif(app()->getLocale() =='sp')
                        <li><a href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'en')) }}">English</a></li>
                        <li><a href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'ar')) }}">Arabic</a></li>
                      @else
                        <li><a href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'ar')) }}">Arabic</a></li>
                        <li><a href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'sp')) }}">Spanish</a></li>
                      @endif
                    </ul>
                </div>
              </li>
              <li>                   <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>


        </li>
            </ul><!-- END .uk-navbar-nav -->
          </div><!-- END .uk-navbar-right -->






        </nav><!-- END uk-navbar -->
      </div><!-- END .uk-container -->
      <hr class="uk-margin-remove">
    </div><!-- END .navbar_type_top -->

    <!-- START .navbar_type_main -->
    <div class="navbar_type_main uk-visible@l">
      <!-- START .uk-container -->
      <div class="uk-container uk-container-large">
        <!-- START uk-navbar -->
        <nav uk-navbar>
          <div class="uk-navbar-left">
            <a class=" uk-navbar-toggle uk-padding-remove-horizontal uk-background-transparent" href="#x2" uk-toggle>
            <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
        </a>
          </div>
          <div class="uk-navbar-center">
            <div class="uk-text-center uk-display-block ">
              <a href="{{ route('index') }}">
                <h3 class="uk-margin-remove" style="    margin-bottom: -12px !important;">Oudak</h3>
                <span class="uk-margin-remove uk-text-small" style="font-size:9px;" >Luxury Fragrance & Beauty</span>
              </a>
            </div>
          </div>
          <!-- START .uk-navbar-right -->
          <div class="uk-navbar-right">
            <!-- START .uk-navbar-nav -->
            <ul class="uk-navbar-nav">
              <li class="uk-position-relative">
                @if (Auth::user() != null)
                  @if (Auth::user()->wishlist->count() )
                    <a class="" href="{{ route('wishlist.index') }}">
                      <span style="color:#ff6000"><i class="fas fa-heart"></i></span>
                  @else
                    <a>
                      <span><i class="far fa-heart"></i></span>
                  @endif
                @else
                  <a>
                    <span><i class="far fa-heart"></i></span>
                @endif

                    {{-- <span uk-icon="heart"></span> --}}
                     {{-- <span uk-icon="triangle-down"></span> --}}

                        </a>

                  <div class="main-carditems" uk-dropdown>
                    <ul class="uk-list  uk-list-divider uk-margin-remove">
                      @if (Auth::user() != null)
                      @if (Auth::user()->wishlist->count() )
                      @foreach ($wishlists as $wishlist)
                        <li class="main-carditems-list">
                              <a href="{{ route('shop.show', $wishlist->product->slug) }}">
                          <div class="uk-grid uk-grid-collapse uk-flex uk-flex-middle">
                            <div class="uk-width-expand uk-text-left">
                              <span>{{ $wishlist->product->title }}</span>
                            </div>
                            <div class="uk-width-auto uk-text-right">
                              <span>{{ $wishlist->product->subtotal }} </span>
                            </div>
                          </div>
                        </a>	</li>
                        @endforeach
                      @else
                        <li class="main-carditems-list"> you Have no items in your Wish List </li>
                      @endif
                    @else
                      <li class="main-carditems-list"> you Have no items in your Wish List </li>

                    @endif

                    </ul>
                    @if (Auth::user() != null)

                    @if (Auth::user()->wishlist->count() )

                    <div class="uk-text-center">
                      <a class="main-carditems-button" href="{{ route('cart.index') }}"> Go To Wish List</a>

                    </div>
                  @endif
                @endif

                  </div>




                      </li>


              <li class="uk-position-relative">
                @if (Cart::instance('default')->count() > 0)
                  <a href="{{ route('cart.index') }}">
                  @else
                    <a>
                  @endif
                    <span uk-icon="cart"></span>
                     @if (Cart::instance('default')->count() > 0)
                     <span class="uk-badge notificationicon">
                       {{ Cart::instance('default')->count() }}
                     </span>
                          @endif
                        </a>

                  <div class="main-carditems" uk-dropdown>
                    <ul class="uk-list  uk-list-divider uk-margin-remove">
                         @if (Cart::instance('default')->count() > 0)
                      @foreach (Cart::content() as $item )

                        <li class="main-carditems-list">
                              <a href="{{ route('shop.show', $item->model->slug) }}">
                          <div class="uk-grid uk-grid-collapse uk-flex uk-flex-middle">
                            <div class="uk-width-expand uk-text-left">
                              <span>{{ $item->model->title }}</span>
                            </div>
                            <div class="uk-width-auto uk-text-right">
                              <span>{{ $item->subtotal }} </span>
                            </div>
                          </div>
                        </a>	</li>
                        @endforeach
                      @else
                        <li class="main-carditems-list"> you Have no items in your bag </li>
                      @endif

                    </ul>
                    @if (Cart::instance('default')->count() > 0)

                    <div class="uk-text-center">
                      <a class="main-carditems-button" href="{{ route('cart.index') }}"> Go To bag</a>

                    </div>
                  @endif

                  </div>




                      </li>

                        @if(Auth::user())
                        <li><a href="{{ route('account') }}">My Account  </a>
                          <div class="uk-navbar-dropdown">
                              <ul class="uk-nav uk-navbar-dropdown-nav">
                                  <li><a href="#" onclick="document.querySelector('#logoutForm').submit(); return false;">Logout</a></li>
                                  <form action="{{ route('logout') }}" method="POST" id="logoutForm">@csrf</form>
                              </ul>
                          </div>
                        </li>
                        @else
                        <li><a href="{{ route('login') }}">login  </a>
                          {{-- <div class="uk-navbar-dropdown">
                              <ul class="uk-nav uk-navbar-dropdown-nav">
                                  <li><a href="{{ route('login') }}">Login</a></li>
                                  <li><a href="{{ route('register') }}">Register</a></li>
                              </ul>
                          </div> --}}
                        </li>
                        @endif
            </ul><!-- END .uk-navbar-nav -->
          </div><!-- END .uk-navbar-right -->
        </nav><!-- END uk-navbar -->
      </div><!-- END .uk-container -->
      <hr class="uk-margin-remove">
    </div><!-- END navbar_type_main -->

@include('partials.menus.mobile')

<section class="section_theme_gray">
  <div class="uk-container uk-container-large">
    <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

         <div class="uk-navbar-item uk-width-expand">
             <form action="{{ route('search') }}" method="get" class="uk-search uk-search-navbar uk-width-1-1" role="search">
               {{-- {{ csrf_field() }} --}}
                 <input id="query" name="query" value="{{ request()->input('query') }}" class="uk-search-input" type="text" placeholder="Search..." autofocus>
             </form>

         </div>

         <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

     </div>
  </div>

</section>

  </header> <!-- END header -->
