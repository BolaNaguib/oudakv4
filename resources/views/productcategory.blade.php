@include('layout.header')

<!-- START .uk-section -->
<section class="uk-section">
  <!-- START .uk-container -->
  <div class="uk-container uk-container-large">
    @if ($productcategory->Image_or_video == "image")
      <img src="{{ asset('storage/'.$productcategory->path) }}" alt="" style="width:100%">

@elseif ($productcategory->Image_or_video == "video")
  <video width="100%" controls>
    <source src="{{ asset('storage/'.$productcategory->path) }}" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
    @endif


  </div>
</div>

<!-- START .uk-section -->
<section class="uk-section">
  <!-- START .uk-container -->
  <div class="uk-container uk-container-large">
    <!-- START uk-grid -->
    <div class="uk-grid-match" uk-grid>
      <!-- START  div -->
      <div class="uk-width-1-3@m uk-width-1-1">
        <!-- START .card -->
        <div class="cards card_theme_whites uk-flex uk-flex-bottom uk-flex-center uk-position-relative uk-transition-toggle uk-text" tabindex="0">
          <img src="{{ asset('storage/'.$productcategory->first_section_image) }}" alt="" style="">


        </div><!-- END .card -->
      </div> <!-- END div -->
      <!-- START div -->
      <div class="uk-width-1-3@m uk-width-1-1">
        <p>{{ $productcategory->first_section_description }}</p>
          <!-- START .card -->
          <div class="cards card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">


            <video width="100%" controls>
              <source src="{{ asset('storage/'.$productcategory->first_section_video) }}" type="video/mp4">
              Your browser does not support HTML5 video.
            </video>

          </div><!-- END .card -->
      </div><!-- END div -->
      <!-- START div -->
      @foreach ($products as $product)
        @if ($product->id == $productcategory->first_section_product )

      <div class="uk-width-1-3@m uk-width-1-1">
        <!-- START .card -->
        <div class="card card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">
          <!-- START uk-position-top-left -->
          <div class="uk-transition-slide-left uk-position-small uk-position-top-left ">
            <button class="uk-button uk-button-default">{{ $product->title }}</button>
          </div><!-- END uk-position-top-left -->
          <!-- START uk-position-top-right -->
          <div class="uk-transition-slide-right uk-position-small uk-position-top-right ">
            <button class="uk-button uk-button-secondary">${{ $product->price }}</button>
          </div><!-- END uk-position-top-right -->

          <a href="{{ route('shop.show', $product->slug)}}">
            <!-- START .uk-inline-clip -->
            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
              <img src="{{ asset('storage/'.$product->thumbnail) }}" alt="" style="max-height:350px;">
              <img class="uk-transition-fade uk-position-cover" src="{{ asset('storage/'.$product->secondimage) }}" alt="" style="max-height:250px;">
            </div><!-- END .uk-inline-clip -->
          </a>
        </div><!-- END .card -->

      </div><!-- END div -->
    @endif
  @endforeach
    </div><!-- END uk-grid -->
  </div><!-- END uk-container -->
</section><!-- END section -->



<!-- START .uk-section -->
<section class="uk-section section_theme_gray">
  <!-- START .uk-container -->
  <div class="uk-container uk-container-large">
    <!-- START uk-grid -->
    <div class="uk-grid-match" uk-grid>
      <!-- START div -->
      @foreach ($products as $product)
        @if ($product->id == $productcategory->second_section_product )

      <div class="uk-width-1-3@m uk-width-1-1">
        <!-- START .card -->
        <div class="card card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">
          <!-- START uk-position-top-left -->
          <div class="uk-transition-slide-left uk-position-small uk-position-top-left ">
            <button class="uk-button uk-button-default">{{ $product->title }}</button>
          </div><!-- END uk-position-top-left -->
          <!-- START uk-position-top-right -->
          <div class="uk-transition-slide-right uk-position-small uk-position-top-right ">
            <button class="uk-button uk-button-secondary">${{ $product->price }}</button>
          </div><!-- END uk-position-top-right -->

          <a href="{{ route('shop.show', $product->slug)}}">
            <!-- START .uk-inline-clip -->
            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
              <img src="{{ asset('storage/'.$product->thumbnail) }}" alt="" style="max-height:350px;">
              <img class="uk-transition-fade uk-position-cover" src="{{ asset('storage/'.$product->secondimage) }}" alt="" style="max-height:250px;">
            </div><!-- END .uk-inline-clip -->
          </a>
        </div><!-- END .card -->

      </div><!-- END div -->
    @endif
    @endforeach
      <!-- START div -->
      <div class="uk-width-2-3@m uk-width-1-1">
        <p>{{ $productcategory->second_section_description }}</p>
          <!-- START .card -->
          <div class="cards card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">


            <video width="100%" controls>
              <source src="{{ asset('storage/'.$productcategory->second_section_video) }}" type="video/mp4">
              Your browser does not support HTML5 video.
            </video>

          </div><!-- END .card -->
      </div><!-- END div -->

    </div><!-- END uk-grid -->
  </div><!-- END uk-container -->
</section><!-- END section -->

<section class="uk-section ">
  <div class="uk-text-center uk-margin">
    <h3 class="uk-margin-remove">Our Products</h3>

    <img src="images/hrx.png" alt="">
  </div>
  <div class="uk-container uk-container-large">

    <div class="uk-child-width-1-4" uk-grid>
      @foreach ($products as $product)
        @if ($product->category == $productcategory->id )
          <!-- START div -->
          <div class="">
            <!-- START .card -->
            <div class="card card_theme_white uk-text-center">
              <a href="shop/{{ $product->slug }}">
                <img src="{{ asset('storage/'.$product->thumbnail) }}" alt="" style="max-height:250px;">
                <h3 class="">{{ $product->title }}</h3>
              </a>
              <button class="uk-button uk-button-secondary">${{ $product->price }}</button>
            </div><!-- END .card -->
          </div><!-- END div -->

        @endif
      @endforeach

    </div><!-- END uk-grid -->
  </div><!-- END uk-container -->
</section><!-- END section -->



@include('layout.footer')
