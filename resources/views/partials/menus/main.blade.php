

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
                <img src="https://oudak.localhost/storage/main-sliders/August2019/x93Hg44sK5OC5gQrg3bW.jpg" alt="" uk-cover>
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
                <img src="https://oudak.localhost/storage/main-sliders/August2019/x93Hg44sK5OC5gQrg3bW.jpg" alt="" uk-cover>
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
                <img src="https://oudak.localhost/storage/main-sliders/August2019/x93Hg44sK5OC5gQrg3bW.jpg" alt="" uk-cover>
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
