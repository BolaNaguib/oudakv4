<form class="" action="{{ route('cart.store') }}" method="post">
    {{ csrf_field() }}
<!-- START uk-grid -->
<div class="uk-grid-match  uk-visible@m" uk-grid>

    <!-- START uk-width-1-2 -->
    <div class="uk-width-1-2@m uk-width-1-1">

        <!-- START .card -->
        <div id="productzoom" class="card card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">
            <button href="#toggle-animation" class="uk-button uk-button-default" type="button" uk-toggle="target: #toggle-animation; animation: uk-animation-fade" style=" position: absolute;
            bottom: 5px;
            z-index: 99;">Ingredients</button>
            <div id="toggle-animation" class="uk-card uk-card-default " style="       position: absolute;
            z-index: 9;
left: 0px;
top: 0px;
width: 100%;
height: 100%;
background-color: rgba(245, 245, 245, 0.65);" hidden>
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
            <!-- START div -->
            <div>{!! $product->main_description !!}</div>
            <!-- END div -->
        </div><!-- END .uk-text-center -->
        @endif


    </div><!-- END uk-width-1-2 -->



    <!-- START uk-width-1-2 -->
    <div class="uk-width-1-2@m uk-width-1-1 uk-position-relative">
        <div class="detail">
            <!-- START .uk-text-center -->
            <div class="uk-text-center">


                    <h3 class="uk-margin-remove">{{ $product->title }}</h3>
                    <img src="" alt="">
                    <h3 class="uk-margin-small"><span id="newprice" class="uk-button uk-button-default">${{ $product->price }}</span> </h3>
                    <input class="uk-hidden" type="text" name="price" value="{{ $product->price }}">
                    @if ($product->initial_description)
                    <p>{!! $product->initial_description !!}</p>

                    @endif
                    @if ($product->price_1 || $product->price_2 || $product->price_3 || $product->price_4 || $product->price_5 || $product->price_6)

                    <hr>

                    <!-- START .uk-margin -->
                    <div class=" uk-margin">
                        <h5>Bottles Sizes</h5>
                        {{-- START uk-grid --}}
                        <div class="uk-grid uk-flex-center">

                        @if ($product->price_1)
                            {{-- START uk-width-auto --}}
                            <div class="uk-width-auto@m uk-width-1-1 ">
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
                        @if ($product->price_2)
                            {{-- START uk-width-auto --}}
                            <div class="uk-width-auto@m uk-width-1-1 ">
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
                        @if ($product->price_3)
                            {{-- START uk-width-auto --}}
                            <div class="uk-width-auto@m uk-width-1-1 ">
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
                        @if ($product->price_4)
                            {{-- START uk-width-auto --}}
                            <div class="uk-width-auto@m uk-width-1-1 ">
                                {{-- START .uk-position-relative --}}
                                <div class="uk-position-relative">
                                    <input type="radio" name="price" class="newpricebutton" value="{{ $product->price_4 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                                    <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-center uk-button" style="   ">
                                        <p class="uk-margin-remove " style="font-size:16px !important;">{{ $product->size_4 }}</p>
                                    </div>
                                </div>
                                {{-- END .uk-position-relative --}}
                            </div>
                            {{-- END .uk-width-auto --}}
                        @endif
                        @if ($product->price_5)
                            {{-- START uk-width-auto --}}
                            <div class="uk-width-auto@m uk-width-1-1 ">
                                {{-- START .uk-position-relative --}}
                                <div class="uk-position-relative">
                                    <input type="radio" name="price" class="newpricebutton" value="{{ $product->price_5 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                                    <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-center uk-button" style="   ">
                                        <p class="uk-margin-remove " style="font-size:16px !important;">{{ $product->size_5 }}</p>
                                    </div>
                                </div>
                                {{-- END .uk-position-relative --}}
                            </div>
                            {{-- END .uk-width-auto --}}
                        @endif
                        @if ($product->price_6)
                            {{-- START uk-width-auto --}}
                            <div class="uk-width-auto@m uk-width-1-1 ">
                                {{-- START .uk-position-relative --}}
                                <div class="uk-position-relative">
                                    <input type="radio" name="price" class="newpricebutton" value="{{ $product->price_6 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                                    <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-center uk-button" style="   ">
                                        <p class="uk-margin-remove " style="font-size:16px !important;">{{ $product->size_6 }}</p>
                                    </div>
                                </div>
                                {{-- END .uk-position-relative --}}
                            </div>
                            {{-- END .uk-width-auto --}}
                        @endif


                        </div>
                        {{-- END uk-grid --}}
                    </div><!-- END .uk-margin -->
                  @endif

                    <hr>

                    @if ($product->gifting_option == 1)
                    <!-- START .uk-margin -->
                    <div class=" uk-margin">
                        <h5>Gift Box</h5>
                        <div class="uk-grid uk-flex-center">

                        @foreach ($giftbox as $item )

                          @if ($product->gift_1)
                              @if ($product->gift_1 == $item->id)

                                    <div class="uk-width-auto@m uk-width-1-1 ">
                                        {{-- START .uk-position-relative --}}
                                        <div class="uk-position-relative">
                                            <input type="radio" name="price" class="newgiftbutton" value="{{ $product->gift_price_1 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                                            <div class="uk-position-relative  uk-button" style="   ">
                                              <p class="uk-margin-remove " style="font-size:16px !important;">{{ $item->title }}</p>
                                              <img src="{{ asset('storage/'.$item->thumbnail) }}" alt="" style="max-height:85px;">
                                              <br>
                                                <small> {{ $product->gift_price_1 }} </small>
                                            </div>
                                        </div>
                                        {{-- END .uk-position-relative --}}
                                    </div>
                                  @endif

                          @endif
                          @if ($product->gift_2)
                            @if ($product->gift_2 == $item->id)

                                    <div class="uk-width-auto@m uk-width-1-1 ">
                                        {{-- START .uk-position-relative --}}
                                        <div class="uk-position-relative">
                                            <input type="radio" name="price" class="newgiftbutton" value="{{ $product->gift_price_2 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                                            <div class="uk-position-relative  uk-button" style="   ">
                                              <p class="uk-margin-remove " style="font-size:16px !important;">{{ $item->title }}</p>

                                              <img src="{{ asset('storage/'.$item->thumbnail) }}" alt="" style="max-height:85px;">
                                              <br>
                                                <small> {{ $product->gift_price_2 }} </small>
                                            </div>
                                        </div>
                                        {{-- END .uk-position-relative --}}
                                    </div>
                                  @endif
                                @endif
                          @if ($product->gift_3)
                            @if ($product->gift_3 == $item->id)

                                    <div class="uk-width-auto@m uk-width-1-1 ">
                                        {{-- START .uk-position-relative --}}
                                        <div class="uk-position-relative">
                                            <input type="radio" name="price" class="newgiftbutton" value="{{ $product->gift_price_3 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                                            <div class="uk-position-relative  uk-button" style="   ">
                                              <p class="uk-margin-remove " style="font-size:16px !important;">{{ $item->title }}</p>
                                              <img src="{{ asset('storage/'.$item->thumbnail) }}" alt="" style="max-height:85px;">
                                                <br>
                                                <small> {{ $product->gift_price_3 }} </small>
                                            </div>
                                        </div>
                                        {{-- END .uk-position-relative --}}
                                    </div>
                                  @endif
                                @endif
                          @if ($product->gift_4)
                            @if ($product->gift_4 == $item->id)

                                    <div class="uk-width-auto@m uk-width-1-1 ">
                                        {{-- START .uk-position-relative --}}
                                        <div class="uk-position-relative">
                                            <input type="radio" name="price" class="newgiftbutton" value="{{ $product->gift_price_4 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                                            <div class="uk-position-relative  uk-button" style="   ">
                                              <p class="uk-margin-remove " style="font-size:16px !important;">{{ $item->title }}</p>
                                              <img src="{{ asset('storage/'.$item->thumbnail) }}" alt="" style="max-height:85px;">
                                                <br>
                                                <small> {{ $product->gift_price_4 }} </small>
                                            </div>
                                        </div>
                                        {{-- END .uk-position-relative --}}
                                    </div>
                                  @endif
                                @endif
                          @if ($product->gift_5)
                            @if ($product->gift_5 == $item->id)

                                    <div class="uk-width-auto@m uk-width-1-1 ">
                                        {{-- START .uk-position-relative --}}
                                        <div class="uk-position-relative">
                                            <input type="radio" name="price" class="newgiftbutton" value="{{ $product->gift_price_5 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                                            <div class="uk-position-relative  uk-button" style="   ">
                                              <p class="uk-margin-remove " style="font-size:16px !important;">{{ $item->title }}</p>

                                              <img src="{{ asset('storage/'.$item->thumbnail) }}" alt="" style="max-height:85px;">
<br>                                                <small> {{ $product->gift_price_5 }} </small>
                                            </div>
                                        </div>
                                        {{-- END .uk-position-relative --}}
                                    </div>
                                  @endif
                                @endif
                          @if ($product->gift_6)
                            @if ($product->gift_6 == $item->id)

                                    <div class="uk-width-auto@m uk-width-1-1 ">
                                        {{-- START .uk-position-relative --}}
                                        <div class="uk-position-relative">
                                            <input type="radio" name="price" class="newgiftbutton" value="{{ $product->gift_price_6 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                                            <div class="uk-position-relative  uk-button" style="   ">
                                              <p class="uk-margin-remove " style="font-size:16px !important;">{{ $item->title }}</p>

                                              <img src="{{ asset('storage/'.$item->thumbnail) }}" alt="" style="max-height:85px;">
<br>                                                <small> {{ $product->gift_price_6 }} </small>
                                            </div>
                                        </div>
                                        {{-- END .uk-position-relative --}}
                                    </div>
                                  @endif
                                @endif


                        @endforeach
                      </div>
                      </div><!-- END .uk-margin -->
                    @endif



                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->title }}">
                    {{-- <input type="hidden" name="price" value="{{ $product->price }}"> --}}
                    @if ($product->quantity == 0)

                    <button type="submit" class="uk-button uk-button-secondary  uk-margin-small-bottom" disabled> Product is Out Of Stock </button>

                    @endif
                    @if ($product->quantity != 0)
                    <button type="submit" class="uk-button uk-button-secondary  uk-margin-small-bottom"> Add To Bag </button>
                    @endif


            </div><!-- END .uk-text-center -->
        </div> <!-- END .detail -->



    </div><!-- END uk-width-1-2 -->
</div><!-- END uk-grid -->
</form>
