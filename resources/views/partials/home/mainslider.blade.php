<!-- partials/home/mainslider -->

<!-- START section -->
<section class="uk-section-xsmall">

    <!-- STARt .uk-container -->
    <div class="uk-container uk-container-large">

        <!-- START .uk-position-relative -->
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push;ratio: 7:3;autoplay:true;autoplay-interval: 4000">

            <!-- START .uk-slideshow-items -->
            <ul class="uk-slideshow-items">

                @foreach($main_slider as $image)
                <li>
                    <img style="width:100%;" class="slider__image" src="{{ asset('storage/'.$image->thumbnail) }}" alt="">

                    <!-- START .uk-position-center -->
                    <div class="uk-position-center uk-text-center">

                        @if ($image->title)
                          <h2 style=" display: initial; padding: 5px;" uk-slider-parallax="x: 100,-100">
                             {{$image->title}}
                          </h2>
                          <hr style="border:none;">
                        @endif

                        @if ($image->caption)
                          <p style=" display: initial; padding: 5px; line-height: 2;" uk-slider-parallax="x: 200,-200">
                             {{$image->caption}}
                          </p>
                        @endif

                    </div><!-- END .uk-position-center -->

                    @if ($image->button_title || $image->button_link)
                      <!-- START .uk-overlay -->
                      <div class="uk-overlay  uk-position-bottom uk-text-left@m uk-text-center uk-transition-slide-bottom">
                        <a href="{{ $image->button_link }}" class="orderbutton">
                           <i class="fas fa-shopping-cart"></i> {{ $image->button_title }}
                        </a>
                      </div>
                      <!-- END .uk-overlay -->
                    @endif

                </li>
                @endforeach

            </ul>

            <!-- END .uk-slideshow-items -->
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        </div>
        <!-- END .uk-position-relative -->

    </div>
    <!-- END .uk-container -->

</section>
<!-- END section -->
