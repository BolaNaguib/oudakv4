

<div id="x2" uk-offcanvas>
  <div class="uk-offcanvas-bar sidenav">

    <button class="uk-offcanvas-close" type="button" style="    color: #000;" uk-close></button>
    <br>
    <br>
    <h3 class="sidenav__title uk-text-center">Menu</h3>

    <ul class="uk-nav-default uk-nav-center uk-nav-parent-icon" uk-nav>
      <li><a class="sidenav__links" href="/">Home</a></li>

      @foreach ($main_menu as $item)
        @if (! $item->menu_parent)
          @foreach ($products_categories as $product_category)
            {{-- {{ $product_category-}} --}}
            {{-- {{ $item}} --}}
            @if ($product_category->title == $item->menu_Item )
              <li><a class="sidenav__links" href="/category/{{ $product_category->slug }}">{{ $item->menu_Item }}</a>
                @if ($item->Menu_Image)
                  <div class="" uk-drop="pos: right-top" style="    min-width: 950px;">
                  <div class="">
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-flex uk-flex-middle" uk-grid>
                      <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                        <img src="{{ asset('storage/'.$item->Menu_Image) }}" alt="" uk-cover>
                        <canvas width="600" height="400"></canvas>
                      </div>
                      <div class="">
                        <ul class="uk-nav-default uk-nav-center uk-nav-parent-icon" uk-nav>
                @endif
                @if ($item->Menu_Image)

                @foreach ($main_menu as $subitem)
                  @if ($subitem->menu_parent == $item->menu_Item)
                    @foreach ($products_categories as $subproduct_category)
                      @if ($subproduct_category->title == $subitem->menu_Item && $item->menu_Item == $subitem->menu_parent )
                        <li><a class="sidenav__links" href="/category/{{ $subproduct_category->slug }}">{{ $subitem->menu_Item }}</a></li>
                      @endif

                    @endforeach
                  @endif

                @endforeach
              @endif

                @if ($item->Menu_Image)
                    </ul>
                </div>
              </div>

            </div>

          </div>
        </li>
                @endif
            @endif

          @endforeach
          @endif
      @if ($item->Page)
        @foreach ($page_menu as $page )
          @if ($item->Page == $page->title)
            <li><a class="sidenav__links" href="pages/{{ $page->slug }}">{{ $page->title }}</a></li>
          @endif

        @endforeach
        @endif


      @endforeach

    </ul>
  </div>
</div>





{{-- Mobile version  --}}



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

      @foreach ($main_menu as $item)
        @if (! $item->menu_parent)
          @foreach ($products_categories as $product_category)
            {{-- {{ $product_category-}} --}}
            {{-- {{ $item}} --}}
            @if ($product_category->title == $item->menu_Item )
              <li class="uk-parent"><a class="sidenav__links" href="/category/{{ $product_category->slug }}">{{ $item->menu_Item }}@if ($item->Menu_Image) <span uk-icon="triangle-down">@endif</span></a>
                @if ($item->Menu_Image)

                  <ul class="uk-nav-sub uk-padding-remove">
                @endif
                @if ($item->Menu_Image)

                @foreach ($main_menu as $subitem)
                  @if ($subitem->menu_parent == $item->menu_Item)
                    @foreach ($products_categories as $subproduct_category)
                      @if ($subproduct_category->title == $subitem->menu_Item && $item->menu_Item == $subitem->menu_parent )
                        <li><a class="sidenav__links mv" href="/category/{{ $subproduct_category->slug }}">{{ $subitem->menu_Item }}</a></li>
                      @endif

                    @endforeach
                  @endif

                @endforeach
              @endif

                @if ($item->Menu_Image)
                    </ul>

        </li>
                @endif
            @endif

          @endforeach
          @endif
      @if ($item->Page)
        @foreach ($page_menu as $page )
          @if ($item->Page == $page->title)
            <li><a class="sidenav__links" href="pages/{{ $page->slug }}">{{ $page->title }}</a></li>
          @endif

        @endforeach
        @endif


      @endforeach


          {{-- <li class="uk-active"><a class="sidenav__links" href="{{ route('index' ) }}">Home</a></li>
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
<li><a class="sidenav__links" href="#">USA <span uk-icon="triangle-down"></span></a></li> --}}
<li>
  <li class="uk-parent">
      <a class="sidenav__links vm" href="">{{ app()->getLocale() }}<span uk-icon="triangle-down"></span> </a>
      <ul class="uk-nav-sub uk-padding-remove">
        <?php $params = Route::current()->parameters(); ?>
        @if(app()->getLocale() =='ar')
          <li><a class="sidenav__links mv" href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'en')) }}">English</a></li>
          <li><a class="sidenav__links mv" href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'sp')) }}">Spanish</a></li>
        @elseif(app()->getLocale() =='sp')
          <li><a class="sidenav__links mv" href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'en')) }}">English</a></li>
          <li><a class="sidenav__links mv" href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'ar')) }}">Arabic</a></li>
        @else
          <li><a class="sidenav__links mv" href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'ar')) }}">Arabic</a></li>
          <li><a class="sidenav__links mv" href="{{ route(Route::currentRouteName(), Arr::set($params, 'language', 'sp')) }}">Spanish</a></li>
        @endif
  </ul>
  </li>

<li>                   <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>


</li>
</ul>



    </ul>
  </div>
</div>
