@include('layout.header')


<!-- START section -->
<section class="uk-section">

    <!-- START .uk-container -->
    <div class="uk-container uk-container-large">

      @include('partials.product.desktop')
      @include('partials.product.mobile')


    </div><!-- END .uk-container -->
</section><!-- END section -->

<style media="screen">
    /* HIDE RADIO */
    [type=radio] {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* IMAGE STYLES */
    [type=radio]+div {
        cursor: pointer;
        outline: 1px solid #d7d7d7;

    }

    /* CHECKED STYLES */
    [type=radio]:checked+div {
        outline: 3px solid #8b8989;
    }

    /* CHECKED STYLES */
    [type=radio]:checked+div .checkicon {
        opacity: 1;
        position: absolute;
        right: 7px;
        top: 7px;
    }

    .checkicon {
        opacity: 0;
        position: absolute;
        right: 7px;
        top: 7px;
    }
</style>


<!-- START .section_theme_gray -->
<section class="uk-section section_theme_gray">
    <!-- START .uk-text-center -->
    <div class="uk-text-center uk-margin">
        <h3 class="uk-margin-remove">Similar Products</h3>
        <img src="https://3.top4top.net/p_1328rhb851.png.png" alt="">
    </div><!-- END .uk-text-center -->

    <!-- START .uk-container -->
    <div class="uk-container uk-container-large">

        <!-- START uk-grid -->
        <div class="uk-child-width-1-4@m uk-child-width-1-2@s uk-child-width-1-1" uk-grid>

            @foreach ($products as $sproduct)
            @if ($product->category == $sproduct->category)
            @if ($product->slug != $sproduct->slug)
            <!-- START div -->
            <div class="">
                <!-- START .card -->
                <div class="card card_theme_white uk-text-center">
                    <a href="{{ route('shop.show', $sproduct->slug) }}">
                        <img src="{{ asset('storage/'.$sproduct->thumbnail) }}" alt="" style="max-height:250px;">
                        <h3 class="">{{ $sproduct->title }}</h3>
                    </a>
                    <button class="uk-button uk-button-secondary">${{ $sproduct->price }}</button>
                </div><!-- END .card -->
            </div><!-- END div -->

            @endif
          {{-- @elseif ($product->category != $sproduct->category)

                <div class="uk-width-1-1 uk-text-center">
                  there is no similar products

                </div> --}}

            @endif
            @endforeach









        </div><!-- END uk-grid -->
    </div><!-- END uk-container -->
</section><!-- END section -->

@include('layout.footer')
