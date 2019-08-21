@include('layout.header')


<!-- START section -->
<section class="uk-section">

    <!-- START .uk-container -->
    <div class="uk-container uk-container-large">

        <!-- START uk-grid -->
        <div class="uk-grid-match" uk-grid>

            <!-- START uk-width-1-2 -->
            <div class="uk-width-1-2">

                <!-- START .card -->
                <div id="productzoom" class="card card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">
                    <button href="#toggle-animation" class="uk-button uk-button-default" type="button"
                     uk-toggle="target: #toggle-animation; animation: uk-animation-fade" style=" position: absolute;
    bottom: 5px;
    z-index: 99;">Ingredients</button>
                    <div id="toggle-animation" class="uk-card uk-card-default " style="       position: absolute;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    background-color: #fcfcfc;" hidden>
                        <div class="">
                            {!! $product->Ingredients !!}
                        </div>
                    </div>


                    <!-- START uk-position-top-right -->
                    <div class="uk-transition-fade uk-position-small uk-position-top-right ">
                        <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart" uk-tooltip="title: Give a Heart; pos: left"><span uk-icon="heart"></span></button>
                        <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_star" uk-tooltip="title: Add To Favorite; pos: left"><span uk-icon="star"></span></button>
                        <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_mail" uk-tooltip="title: Send to Email; pos: left"><span uk-icon="mail"></span></button>
                        <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social" uk-tooltip="title: Share on social Media; pos: left"><span uk-icon="social"></span></button>
                    </div><!-- END uk-position-top-right -->

                    <a href="#">
                        <!-- START .uk-inline-clip -->
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="demo-trigger" href="{{ asset('storage/'.$product->thumbnail) }}">
                                <img style="    max-height: 400px;" src="{{ asset('storage/'.$product->thumbnail) }}"></a>

                            <!-- <img src="images/product1.png" alt="" style="max-height:250px;">
              <img class="uk-transition-fade uk-position-cover" src="images/product2.png" alt="" style="max-height:250px;"> -->
                        </div><!-- END .uk-inline-clip -->
                    </a>
                </div><!-- END .card -->

                @if ($product->main_description)
                <!-- START .uk-text-center -->
                <div class="uk-text-center uk-margin-top">
                    <h5 class="uk-margin-remove">Product Description</h5>

                    <img src="" alt="">
                    <p>{{ $product->main_description }}</p>
                </div><!-- END .uk-text-center -->
                @endif


            </div><!-- END uk-width-1-2 -->



            <!-- START uk-width-1-2 -->
            <div class="uk-width-1-2 uk-position-relative">
                <div class="detail">
                    <!-- START .uk-text-center -->
                    <div class="uk-text-center">
                        <form class="" action="{{ route('cart.store') }}" method="post">
                            {{ csrf_field() }}

                            <h3 class="uk-margin-remove">{{ $product->title }}</h3>
                            <img src="" alt="">
                            <h3 class="uk-margin-small"><button id="newprice" class="uk-button uk-button-secondary">${{ $product->price }}</button> </h3>
                            @if ($product->initial_description)
                            <p>{{ $product->initial_description }}</p>

                            @endif
                            <hr>

                            <!-- START .uk-margin -->
                            <div class=" uk-margin">

                                <h5>Bottles Sizes</h5>
                                {{-- START uk-grid --}}
                                <div class="uk-grid uk-flex-center">

                                    @if ($product->size_1)
                                    {{-- START uk-width-auto --}}
                                    <div class="uk-width-auto ">
                                        {{-- START .uk-position-relative --}}
                                        <div class="uk-position-relative">
                                            <input type="radio" name="price" class="newpricebutton" value="{{ $product->price_1 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;" checked>
                                            <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-center uk-button" style="   ">
                                                <p class="uk-margin-remove " style="font-size:16px !important;">{{ $product->size_1 }}</p>
                                            </div>
                                        </div>
                                        {{-- END .uk-position-relative --}}
                                    </div>
                                    {{-- END .uk-width-auto --}}
                                    @endif
                                    @if ($product->size_2 )
                                    {{-- START uk-width-auto --}}
                                    <div class="uk-width-auto ">
                                        {{-- START .uk-position-relative --}}
                                        <div class="uk-position-relative">
                                            <input type="radio" name="price" class="newpricebutton" value="{{ $product->price_2 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                                            <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-center uk-button" style="   ">
                                                <p class="uk-margin-remove " style="font-size:16px !important;">{{ $product->size_2 }}</p>
                                            </div>
                                        </div>
                                        {{-- END .uk-position-relative --}}
                                    </div>
                                    {{-- END .uk-width-auto --}}
                                    @endif
                                    @if ($product->size_3 )
                                    {{-- START uk-width-auto --}}
                                    <div class="uk-width-auto ">
                                        {{-- START .uk-position-relative --}}
                                        <div class="uk-position-relative">
                                            <input type="radio" name="price" class="newpricebutton" value="{{ $product->price_3 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                                            <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-center uk-button" style="   ">
                                                <p class="uk-margin-remove " style="font-size:16px !important;">{{ $product->size_3 }}</p>
                                            </div>
                                        </div>
                                        {{-- END .uk-position-relative --}}
                                    </div>
                                    {{-- END .uk-width-auto --}}
                                    @endif

                                </div>
                                {{-- END uk-grid --}}
                            </div><!-- END .uk-margin -->
                            <hr>

                            @if ($product->gifting_option == 1)
                            <!-- START .uk-margin -->
                            <div class=" uk-margin">
                                <h5>Gift Box</h5>
                                <button class="uk-button uk-button-default uk-padding-small"><img src="{{ asset('storage/'.$product->gift_icon_one) }}" alt="" style="max-height:150px;"></button>
                                <button class="uk-button uk-button-default uk-padding-small"><img src="{{ asset('storage/'.$product->gift_icon_two) }}" alt="" style="max-height:150px;"></button>
                                <button class="uk-button uk-button-default uk-padding-small"><img src="{{ asset('storage/'.$product->gift_icon_three) }}" alt="" style="max-height:150px;"></button>
                            </div><!-- END .uk-margin -->
                            @endif



                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->title }}">
                            {{-- <input type="hidden" name="price" value="{{ $product->price }}"> --}}
                            <button type="submit" class="uk-button uk-button-secondary  uk-margin-small-bottom"> Add To Bag </button>

                        </form>
                    </div><!-- END .uk-text-center -->
                </div>
            </div><!-- END uk-width-1-2 -->
        </div><!-- END uk-grid -->
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
        <div class="uk-child-width-1-4" uk-grid>

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

            @endif
            @endforeach








        </div><!-- END uk-grid -->
    </div><!-- END uk-container -->
</section><!-- END section -->

@include('layout.footer')
