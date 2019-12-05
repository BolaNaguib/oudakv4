<style media="screen">
.mobileicon a {
  padding-right: 10px !important;
  padding-left: 10px !important;
  font-size: 21px;
}
</style>
    <!-- START .navbar_type_main -->
    <div class="navbar_type_main uk-hidden@s " style="">
      <!-- START .uk-container -->
      <div class="uk-container uk-container-large">
        <!-- START uk-navbar -->
        <nav uk-navbar>
          <div class="uk-navbar-left">
            <a class=" uk-navbar-toggle uk-padding-remove-horizontal uk-background-transparent" href="#x3" uk-toggle>
            <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left"></span>
        </a>
        <div class="uk-text-left uk-display-block ">
          <a class="uk-display-inline-block" href="{{ route('index') }}">
            <h1 class="uk-margin-remove" style="    margin-bottom: -12px !important;">Oudak</h1>
            <span class="uk-margin-remove uk-text-small" style="font-size:9px;" >Luxury Fragrance & Beauty</span>
          </a>


        </div>
          </div>

          <!-- START .uk-navbar-right -->
          <div class="uk-navbar-right">
            <!-- START .uk-navbar-nav -->
            <ul class="uk-navbar-nav mobileicon">
              <li class="uk-position-relative">
                @if (Cart::instance('saveForLater')->count() > 0)
                  <a href="{{ route('cart.index') }}">
                @else
                  <a>
                @endif
                    <span uk-icon="heart"></span>
                     @if (Cart::instance('saveForLater')->count() > 0)
                     <span class="uk-badge notificationicon">
                       {{ Cart::instance('saveForLater')->count() }}
                     </span>
                          @endif
                        </a>

                  <div class="main-carditems" uk-dropdown>
                    <ul class="uk-list  uk-list-divider uk-margin-remove">
                         @if (Cart::instance('saveForLater')->count() > 0)
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
                        <li class="main-carditems-list"> you Have no items in your Wish List </li>
                      @endif

                    </ul>
                    @if (Cart::instance('saveForLater')->count() > 0)

                    <div class="uk-text-center">
                      <a class="main-carditems-button" href="{{ route('cart.index') }}"> Go To Wish List</a>

                    </div>
                  @endif

                  </div>




                      </li>
              <li class="uk-position-relative">
                <a href="{{ route('cart.index') }}">
                  <span uk-icon="cart"></span>
                   @if (Cart::instance('default')->count() > 0)
                   <span class="uk-badge notificationicon">
                     {{ Cart::instance('default')->count() }}
                   </span>
                        @endif</a>
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
                          <div class="uk-text-center">
                            <a class="main-carditems-button" href="{{ route('cart.index') }}"> Go To Bag</a>

                          </div>
                        </div>
              </li>

                        @if(Auth::user())
                        <li><a href="{{ route('account') }}"><i class="far fa-user"></i></a>
                          <div class="uk-navbar-dropdown">
                              <ul class="uk-nav uk-navbar-dropdown-nav">
                                  <li><a href="{{ route('login') }}" onclick="document.querySelector('#logoutForm').submit(); return false;">Logout</a></li>
                                  <form action="{{ route('logout') }}" method="POST" id="logoutForm">@csrf</form>
                              </ul>
                          </div>
                        </li>
                        @else
                        <li><a href="{{ route('login') }}"><i class="far fa-user"></i></span> </a>
                        </li>
                        @endif
            </ul><!-- END .uk-navbar-nav -->
          </div><!-- END .uk-navbar-right -->
        </nav><!-- END uk-navbar -->
      </div><!-- END .uk-container -->
    </div><!-- END navbar_type_main -->
    <hr class="uk-margin-remove">
