

<div id="x2" uk-offcanvas>
  <div class="uk-offcanvas-bar sidenav">

    <button class="uk-offcanvas-close" type="button" style="    color: #000;" uk-close></button>
    <br>
    <br>
    <h3 class="sidenav__title uk-text-center">Menu</h3>

    <ul class="uk-nav-default uk-nav-center uk-nav-parent-icon" uk-nav>
      {{-- @foreach($items as $menu_item)
          <li><a class="sidenav__links" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>

            {{ $menu_item->link() }}
            {{-- {{ $productcategory }}
            @if (!$menu_item->children->isEmpty())
              <div class="" uk-drop="pos: right-top" style="    min-width: 950px;">
                <div class="">
                  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-flex uk-flex-middle" uk-grid>
                    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                      <img src="images/slider.jpg" alt="" uk-cover>
                      <canvas width="600" height="400"></canvas>
                    </div>
                    <div class="">
                      <ul class="uk-nav-default uk-nav-center uk-nav-parent-icon" uk-nav>
                        @foreach ($menu_item->children as $item)
                          <li><a class="sidenav__links" href="{{ $item->link() }}">{{ $item->title }}</a></li>
                        @endforeach
                        {{-- <li><a class="sidenav__links" href="#">Product Title</a></li>
                        <li><a class="sidenav__links" href="#">Product Title</a></li>
                        <li><a class="sidenav__links" href="#">Product Title</a></li>

                    </div>
                  </div>

                </div>

              </div>


            @endif

            </li>
      @endforeach --}}
      <li><a class="sidenav__links" href="{{ route('index' ) }}">Home</a></li>
      <li><a class="sidenav__links" href="/wood-house">wood-house</a>
        <div class="" uk-drop="pos: right-top" style="    min-width: 950px;">
          <div class="">
            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-flex uk-flex-middle" uk-grid>
              <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="https://3.top4top.net/p_13271fpri1.jpg" alt="" uk-cover>
                <canvas width="600" height="400"></canvas>
              </div>
              <div class="">
                <ul class="uk-nav-default uk-nav-center uk-nav-parent-icon" uk-nav>
                  <li><a class="sidenav__links" href="/party">party</a></li>
                  <li><a class="sidenav__links" href="/daily">daily</a></li>
              </div>
            </div>

          </div>

        </div></li>
      <li><a class="sidenav__links" href="/exclusive">exclusive</a>
        <div class="" uk-drop="pos: right-top" style="    min-width: 950px;">
          <div class="">
            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-flex uk-flex-middle" uk-grid>
              <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="https://3.top4top.net/p_13271fpri1.jpg" alt="" uk-cover>
                <canvas width="600" height="400"></canvas>
              </div>
              <div class="">
                <ul class="uk-nav-default uk-nav-center uk-nav-parent-icon" uk-nav>
                  <li><a class="sidenav__links" href="/musk">musk</a></li>
                  <li><a class="sidenav__links" href="/house-blend">house-blend</a></li>
              </div>
            </div>

          </div>

        </div></li>
      <li><a class="sidenav__links" href="/oud-house">oud-house</a>
        <div class="" uk-drop="pos: right-top" style="    min-width: 950px;">
          <div class="">
            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-flex uk-flex-middle" uk-grid>
              <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="https://3.top4top.net/p_13271fpri1.jpg" alt="" uk-cover>
                <canvas width="600" height="400"></canvas>
              </div>
              <div class="">
                <ul class="uk-nav-default uk-nav-center uk-nav-parent-icon" uk-nav>
                  <li><a class="sidenav__links" href="/sweet">sweet</a></li>
                  <li><a class="sidenav__links" href="/flores">flores</a></li>
                  <li><a class="sidenav__links" href="/incent">incent</a></li>

              </div>
            </div>

          </div>

        </div>
      </li>

      {{-- <li><a class="sidenav__links" href="#">Product grid</a>
        <div class="" uk-drop="pos: right-top" style="    min-width: 950px;">
          <div class="card uk-card-default ">
            <div class="uk-child-width-1-3" uk-grid>
              <div class="">
                <div class="uk-text-center uk-padding ">
                  <a href="#">
                    <img class=" demo-trigger" src="images/product1.png" data-zoom="images/product1.png?w=1000&ch=DPR&dpr=2" alt="">
                    <hr>
                    <h2 class="uk-card-title"> Product Title </h2>
                  </a>
                </div>
                <!-- END .uk-card -->
              </div>

              <div class="">
                <div class=" uk-text-center uk-padding ">
                  <a href="#">
                    <img class=" demo-trigger" src="images/product1.png" data-zoom="images/product1.png?w=1000&ch=DPR&dpr=2" alt="">
                    <hr>
                    <h2 class="uk-card-title"> Product Title </h2>
                  </a>
                </div>
                <!-- END .uk-card -->
              </div>

              <div class="">
                <div class=" uk-text-center uk-padding ">
                  <a href="#">
                    <img class=" demo-trigger" src="images/product1.png" data-zoom="images/product1.png?w=1000&ch=DPR&dpr=2" alt="">
                    <hr>
                    <h2 class="uk-card-title"> Product Title </h2>
                  </a>
                </div>
                <!-- END .uk-card -->
              </div>

            </div>

          </div>

        </div>
      </li> --}}
    </ul>
  </div>
</div>









<style media="screen">
  .mv{
    background-color: #f3f3f3;
    border-color: #d2cdcd;  }
</style>

<div id="x3" uk-offcanvas>
  <div class="uk-offcanvas-bar sidenav">

    <button class="uk-offcanvas-close" type="button" style="    color: #000;" uk-close></button>
    <br>
    <br>
    <h3 class="sidenav__title uk-text-center">Menu</h3>
    <ul class="uk-nav-default uk-nav-center uk-nav-parent-icon" uk-nav>
          <li class="uk-active"><a class="sidenav__links" href="{{ route('index' ) }}">Home</a></li>
          <li class="uk-parent">
              <a class="sidenav__links" href="/wood-house">wood-house</a>
              <ul class="uk-nav-sub uk-padding-remove">
                <li><a class="sidenav__links mv" href="/party">party</a></li>
                <li><a class="sidenav__links mv" href="/daily">daily</a></li>
</ul>
</li>
<li class="uk-parent">
    <a class="sidenav__links" href="/exclusive">exclusive</a>
    <ul class="uk-nav-sub uk-padding-remove">
      <li><a class="sidenav__links mv" href="/musk">musk</a></li>
      <li><a class="sidenav__links mv" href="/house-blend">house-blend</a></li>
</ul>
</li>
<li class="uk-parent">
    <a class="sidenav__links" href="/oud-house">oud-house</a>
    <ul class="uk-nav-sub uk-padding-remove">
      <li><a class="sidenav__links mv" href="/sweet">sweet</a></li>
      <li><a class="sidenav__links mv" href="/flores">flores</a></li>
      <li><a class="sidenav__links mv" href="/incent">incent</a></li>
</ul>
</li>
<li><a class="sidenav__links" href="#">USA <span uk-icon="triangle-down"></span></a></li>
<li>
  <li class="uk-parent">
      <a class="sidenav__links vm" href="">{{ app()->getLocale() }}<span uk-icon="triangle-down"></span> </a>
      <ul class="uk-nav-sub uk-padding-remove">
        <?php $params = Route::current()->parameters(); ?>
        @if(app()->getLocale() =='ar')
          <li><a class="sidenav__links vm" href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'en')) }}">English</a></li>
          <li><a class="sidenav__links vm" href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'sp')) }}">Spanish</a></li>
        @elseif(app()->getLocale() =='sp')
          <li><a class="sidenav__links vm" href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'en')) }}">English</a></li>
          <li><a class="sidenav__links vm" href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'ar')) }}">Arabic</a></li>
        @else
          <li><a class="sidenav__links vm" href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'ar')) }}">Arabic</a></li>
          <li><a class="sidenav__links vm" href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'sp')) }}">Spanish</a></li>
        @endif
  </ul>
  </li>

<li>                   <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>


</li>
</ul>



    </ul>
  </div>
</div>
