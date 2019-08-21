<!DOCTYPE html>
<!-- <base href="../dist/" target="_blank"> -->
<html lang="{{ app()->getLocale() }}" dir="@if(app()->getLocale() =='ar') rtl @else ltr @endif">
  <div class="preloader"></div>
<head>
  <meta charset="utf-8">
  <meta name="robots" content="nofollow" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title></title>

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
 background-image: url('https://5.top4top.net/p_13284bw5v1.gif');
 background-repeat: no-repeat;
 background-color: #FFF;
 background-position: center;
}
.detail {
    height: 100%;
}
</style>
</head>

<body>
  <!-- START header -->
  <header>
    <!-- START .navbar_type_top -->
    <div class="navbar_type_top">
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
    <div class="navbar_type_main uk-visible@s">
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
                <a href="{{ route('cart.index') }}">
                  <span uk-icon="cart"></span>
                   <span uk-icon="triangle-down"></span>
                   @if (Cart::instance('default')->count() > 0)
                   <span class="uk-badge notificationicon">
                     {{ Cart::instance('default')->count() }}
                   </span>
                        @endif</a></li>

                        @if(Auth::user())
                        <li><a href="{{ route('account') }}">My Account <span uk-icon="triangle-down"></span> </a>
                          <div class="uk-navbar-dropdown">
                              <ul class="uk-nav uk-navbar-dropdown-nav">
                                  <li><a href="#" onclick="document.querySelector('#logoutForm').submit(); return false;">Logout</a></li>
                                  <form action="{{ route('logout') }}" method="POST" id="logoutForm">@csrf</form>
                              </ul>
                          </div>
                        </li>
                        @else
                        <li><a href="#">login/Register <span uk-icon="triangle-down"></span> </a>
                          <div class="uk-navbar-dropdown">
                              <ul class="uk-nav uk-navbar-dropdown-nav">
                                  <li><a href="{{ route('login') }}">Login</a></li>
                                  <li><a href="{{ route('register') }}">Register</a></li>
                              </ul>
                          </div>
                        </li>
                        @endif
            </ul><!-- END .uk-navbar-nav -->
          </div><!-- END .uk-navbar-right -->
        </nav><!-- END uk-navbar -->
      </div><!-- END .uk-container -->
      <hr class="uk-margin-remove">
    </div><!-- END navbar_type_main -->

    <!-- START .navbar_type_main -->
    <div class="navbar_type_main uk-hidden@s">
      <!-- START .uk-container -->
      <div class="uk-container uk-container-large">
        <!-- START uk-navbar -->
        <nav uk-navbar>
          <div class="uk-navbar-left">
            <a class=" uk-navbar-toggle uk-padding-remove-horizontal uk-background-transparent" href="#x3" uk-toggle>
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
                <a href="{{ route('cart.index') }}">
                  <span uk-icon="cart"></span>
                   <span uk-icon="triangle-down"></span>
                   @if (Cart::instance('default')->count() > 0)
                   <span class="uk-badge notificationicon">
                     {{ Cart::instance('default')->count() }}
                   </span>
                        @endif</a></li>

                        @if(Auth::user())
                        <li><a href="{{ route('account') }}"><i class="fas fa-user"></i> </a>
                          <div class="uk-navbar-dropdown">
                              <ul class="uk-nav uk-navbar-dropdown-nav">
                                  <li><a href="{{ route('login') }}" onclick="document.querySelector('#logoutForm').submit(); return false;">Logout</a></li>
                                  <form action="{{ route('logout') }}" method="POST" id="logoutForm">@csrf</form>
                              </ul>
                          </div>
                        </li>
                        @else
                        <li><a href="{{ route('login') }}"><i class="fas fa-user"></i></span> </a>
                        </li>
                        @endif
            </ul><!-- END .uk-navbar-nav -->
          </div><!-- END .uk-navbar-right -->
        </nav><!-- END uk-navbar -->
      </div><!-- END .uk-container -->
      <hr class="uk-margin-remove">
    </div><!-- END navbar_type_main -->


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
  {{-- {{ $products }} --}}
{{-- {{ $main_menu }} --}}
{{-- {{ $productcategory }} --}}

{{-- {{ $auth }} --}}

{{-- <hr> --}}
{{-- @foreach ($main_menu as $item)
{{ $item->menu_Item }}
<hr>
@endforeach --}}
