@include('layout.header')
<section class="uk-section-xsmall">
  <div class="uk-container uk-container-large">
    <div class="uk-text-center uk-margin">
      <h3 class="uk-margin-remove">Perfume For Her</h3>

      <img src="https://3.top4top.net/p_1328rhb851.png.png" alt="">
    </div>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade;ratio: 7:3;">

      <!-- <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 7:3; animation: push"> -->

      <!-- <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider> -->

      <!-- <ul class="uk-slider-items uk-grid" > -->
      <ul class="uk-slideshow-items">

        <li class="">
          <img class="slider__image" src="images/slider.jpg" alt="">
          <div class="uk-position-center uk-text-center">
            <h2 uk-slider-parallax="x: 100,-100">Heading</h2>
            <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
          </div>
        </li>
        <li class="">
          <img class="slider__image" src="images/slider.jpg" alt="">
          <div class="uk-position-center uk-text-center">
            <h2 uk-slider-parallax="x: 100,-100">Heading</h2>
            <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
          </div>
        </li>
        <li class="">
          <img class="slider__image" src="images/slider.jpg" alt="">
          <div class="uk-position-center uk-text-center">
            <h2 uk-slider-parallax="x: 100,-100">Heading</h2>
            <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
          </div>
        </li>
        <li class="">
          <img class="slider__image" src="images/slider.jpg" alt="">
          <div class="uk-position-center uk-text-center">
            <h2 uk-slider-parallax="x: 100,-100">Heading</h2>
            <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
          </div>
        </li>
        <li class="">
          <img class="slider__image" src="images/slider.jpg" alt="">
          <div class="uk-position-center uk-text-center">
            <h2 uk-slider-parallax="x: 100,-100">Heading</h2>
            <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
          </div>
        </li>
      </ul>
      <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
      <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

      <!-- <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
      <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a> -->




    </div>
  </div>
</section>
@foreach ($products as $product)

@if ( $product->layout == '0' )

<section class="uk-section-xsmall section_theme_gray">
  <!-- START .uk-container  -->
  <div class="uk-container uk-container-large">
    <!-- START uk-grid -->
    <div class="uk-grid-match" uk-grid>
      <!-- START  uk-width-1-3 -->
      <div class="uk-width-1-3">

        <!-- START .card -->
        <div class="card card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">
          <!-- START uk-position-top-left -->
          <div class="uk-transition-slide-left uk-position-small uk-position-top-left ">
            <button class="uk-button uk-button-default">{{ $product->name }}</button>
          </div><!-- END uk-position-top-left -->
          <!-- START uk-position-top-right -->
          <div class="uk-transition-slide-right uk-position-small uk-position-top-right ">
            <button class="uk-button uk-button-secondary">${{ $product->price }}</button>
          </div><!-- END uk-position-top-right -->

          <a href="{{ route('shop.show', $product->slug)}}">
            <!-- START .uk-inline-clip -->
            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
              <img src="{{ asset('storage/'.$product->mainimage) }}" alt="" style="max-height:250px;">
              <img class="uk-transition-fade uk-position-cover" src="{{ asset('storage/'.$product->mainimage) }}" alt="" style="max-height:250px;">
            </div><!-- END .uk-inline-clip -->
          </a>
        </div><!-- END .card -->

      </div><!-- END uk-width-1-3 -->
      <div class=" uk-width-2-3">
        <div class="">
          <p>{{ $product->initial_description }}</p>
        </div>
        <!-- START .card -->
        <div class="card card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">
          <!-- START uk-position-top-left -->
          <div class="uk-transition-slide-left uk-position-small uk-position-top-left ">
            <button class="uk-button uk-button-default">{{ $product->name }}</button>
          </div><!-- END uk-position-top-left -->
          <!-- START uk-position-top-right -->
          <div class="uk-transition-slide-right uk-position-small uk-position-top-right ">
            <button class="uk-button uk-button-secondary">${{ $product->price }}</button>
          </div><!-- END uk-position-top-right -->

          <a href="{{ route('shop.show', $product->slug)}}">
            <!-- START .uk-inline-clip -->
            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
              <img src="{{ asset('storage/'.$product->secondimage) }}" alt="" style="max-height:250px;">
              <img class="uk-transition-fade uk-position-cover" src="{{ asset('storage/'.$product->secondimage) }}" alt="" style="max-height:250px;">
            </div><!-- END .uk-inline-clip -->
          </a>
        </div><!-- END .card -->
      </div>
    </div><!-- END uk-grid -->
  </div><!-- END .uk-container -->
</section>
@else

<!-- START .uk-section-xsmall -->
<section class="uk-section-xsmall">
  <!-- START .uk-container -->
  <div class="uk-container uk-container-large">
    <!-- START uk-grid -->
    <div class="uk-grid-match uk-child-width-1-3" uk-grid>
      <!-- START  div -->
      <div class="">
        <!-- START .card -->
        <div class="card card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">
          <!-- START uk-position-top-left -->
          <div class="uk-transition-slide-left uk-position-small uk-position-top-left ">
            <button class="uk-button uk-button-default">{{ $product->name }}</button>
          </div><!-- END uk-position-top-left -->
          <!-- START uk-position-top-right -->
          <div class="uk-transition-slide-right uk-position-small uk-position-top-right ">
            <button class="uk-button uk-button-secondary">${{ $product->price }}</button>
          </div><!-- END uk-position-top-right -->

          <a href="{{ route('shop.show', $product->slug)}}">
            <!-- START .uk-inline-clip -->
            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
              <img src="{{ asset('storage/'.$product->mainimage) }}" alt="" style="max-height:250px;">
              <img class="uk-transition-fade uk-position-cover" src="{{ asset('storage/'.$product->mainimage) }}" alt="" style="max-height:250px;">
            </div><!-- END .uk-inline-clip -->
          </a>
        </div><!-- END .card -->
      </div> <!-- END div -->
      <!-- START div -->
      <div class="">
        <p>{{ $product->initial_description }}</p>
          <!-- START .card -->
          <div class="card card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">
            <!-- START uk-position-top-left -->
            <div class="uk-transition-slide-left uk-position-small uk-position-top-left ">
              <button class="uk-button uk-button-default">{{ $product->name }}</button>
            </div><!-- END uk-position-top-left -->
            <!-- START uk-position-top-right -->
            <div class="uk-transition-slide-right uk-position-small uk-position-top-right ">
              <button class="uk-button uk-button-secondary">${{ $product->price }}</button>
            </div><!-- END uk-position-top-right -->

            <a href="#">
              <!-- START .uk-inline-clip -->
              <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                <img src="{{ asset('storage/'.$product->secondimage) }}" alt="" style="max-height:250px;">
                <img class="uk-transition-fade uk-position-cover" src="{{ asset('storage/'.$product->secondimage) }}" alt="" style="max-height:250px;">
              </div><!-- END .uk-inline-clip -->
            </a>
          </div><!-- END .card -->
      </div><!-- END div -->
      <!-- START div -->
      <div class="">
        <!-- START .card -->
        <div class="card card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">
          <!-- START uk-position-top-left -->
          <div class="uk-transition-slide-left uk-position-small uk-position-top-left ">
            <button class="uk-button uk-button-default">{{ $product->name }}</button>
          </div><!-- END uk-position-top-left -->
          <!-- START uk-position-top-right -->
          <div class="uk-transition-slide-right uk-position-small uk-position-top-right ">
            <button class="uk-button uk-button-secondary">${{ $product->price }}</button>
          </div><!-- END uk-position-top-right -->

          <a href="{{ route('shop.show', $product->slug)}}">
            <!-- START .uk-inline-clip -->
            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
              <img src="{{ asset('storage/'.$product->secondimage) }}" alt="" style="max-height:250px;">
              <img class="uk-transition-fade uk-position-cover" src="{{ asset('storage/'.$product->secondimage) }}" alt="" style="max-height:250px;">
            </div><!-- END .uk-inline-clip -->
          </a>
        </div><!-- END .card -->

      </div><!-- END div -->
    </div><!-- END uk-grid -->
  </div><!-- END uk-container -->
</section><!-- END section -->
@endif
@endforeach









<section class="uk-section-xsmall section_theme_gray">
  <div class="uk-text-center uk-margin">
    <h3 class="uk-margin-remove">Perfumes</h3>

    <img src="https://3.top4top.net/p_1328rhb851.png.png" alt="">
  </div>
  <div class="uk-container uk-container-large">
    <div class="uk-child-width-1-4" uk-grid>

      <!-- START div -->
      <div class="">
        <!-- START .card -->
        <div class="card card_theme_white uk-text-center">
          <a href="#">
            <img src="images/product1.png" alt="" style="max-height:250px;">
            <h3 class="">Product Title</h3>
          </a>
          <button class="uk-button uk-button-secondary">$100</button>
        </div><!-- END .card -->
      </div><!-- END div -->

      <!-- START div -->
      <div class="">
        <!-- START .card -->
        <div class="card card_theme_white uk-text-center">
          <a href="#">
            <img src="images/product1.png" alt="" style="max-height:250px;">
            <h3 class="">Product Title</h3>
          </a>
          <button class="uk-button uk-button-secondary">$100</button>
        </div><!-- END .card -->
      </div><!-- END div -->

      <!-- START div -->
      <div class="">
        <!-- START .card -->
        <div class="card card_theme_white uk-text-center">
          <a href="#">
            <img src="images/product1.png" alt="" style="max-height:250px;">
            <h3 class="">Product Title</h3>
          </a>
          <button class="uk-button uk-button-secondary">$100</button>
        </div><!-- END .card -->
      </div><!-- END div -->

      <!-- START div -->
      <div class="">
        <!-- START .card -->
        <div class="card card_theme_white uk-text-center">
          <a href="#">
            <img src="images/product1.png" alt="" style="max-height:250px;">
            <h3 class="">Product Title</h3>
          </a>
          <button class="uk-button uk-button-secondary">$100</button>
        </div><!-- END .card -->
      </div><!-- END div -->


    </div><!-- END uk-grid -->
  </div><!-- END uk-container -->
</section><!-- END section -->


<section class="uk-section-xsmall ">
  <div class="uk-text-center uk-margin">
    <h3 class="uk-margin-remove">Fregrances</h3>

    <img src="https://3.top4top.net/p_1328rhb851.png.png" alt="">
  </div>
  <div class="uk-container uk-container-large">
    <div class="uk-child-width-1-4" uk-grid>

      <!-- START div -->
      <div class="">
        <!-- START .card -->
        <div class="card card_theme_white uk-text-center">
          <a href="#">
            <img src="images/product1.png" alt="" style="max-height:250px;">
            <h3 class="">Product Title</h3>
          </a>
          <button class="uk-button uk-button-secondary">$100</button>
        </div><!-- END .card -->
      </div><!-- END div -->

      <!-- START div -->
      <div class="">
        <!-- START .card -->
        <div class="card card_theme_white uk-text-center">
          <a href="#">
            <img src="images/product1.png" alt="" style="max-height:250px;">
            <h3 class="">Product Title</h3>
          </a>
          <button class="uk-button uk-button-secondary">$100</button>
        </div><!-- END .card -->
      </div><!-- END div -->

      <!-- START div -->
      <div class="">
        <!-- START .card -->
        <div class="card card_theme_white uk-text-center">
          <a href="#">
            <img src="images/product1.png" alt="" style="max-height:250px;">
            <h3 class="">Product Title</h3>
          </a>
          <button class="uk-button uk-button-secondary">$100</button>
        </div><!-- END .card -->
      </div><!-- END div -->

      <!-- START div -->
      <div class="">
        <!-- START .card -->
        <div class="card card_theme_white uk-text-center">
          <a href="#">
            <img src="images/product1.png" alt="" style="max-height:250px;">
            <h3 class="">Product Title</h3>
          </a>
          <button class="uk-button uk-button-secondary">$100</button>
        </div><!-- END .card -->
      </div><!-- END div -->


    </div><!-- END uk-grid -->
  </div><!-- END uk-container -->
</section><!-- END section -->
@include('layout.footer')
