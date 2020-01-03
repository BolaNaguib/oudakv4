@php
$slider = preg_replace(array('/\"/','/\]$/','/^\[/'), '',$product->product_slider);
$product_slider = explode(",", $slider)
@endphp

{{-- @if (session()->has('success_message'))
<div class="uk-alert-success uk-hidden@m" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>{{ session()->get('success_message') }}</p>
</div>
@endif
@if(count($errors) > 0)
@foreach($errors->all() as $error)
{{ $error }}
@endforeach
@endif --}}

<!-- START uk-grid -->
<div class="uk-grid-match uk-hidden@m uk-margin-remove-top" uk-grid>

    <!-- START uk-width-1-2 -->
    <div class="uk-width-1-2@m uk-width-1-1">

        <!-- START .card -->
        <div id="productzoom" 
        class="card card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">


            <a class="uk-button uk-button-default ingredientButtonx" style="position: absolute;
                              bottom: 5px;
                              z-index: 99">Ingredients</a>
            <div class="uk-card uk-card-default uk-padding-small ingredientBoxx" style=" position: absolute;
                              z-index: 9;
                      left: 0px;
                      top: 0px;
                      width: 100%;
                      height: 100%;
                      display: none;
                    background-color: rgba(245, 245, 245, 0.65);">
                <div class="">
                    {!! $product->Ingredients !!}
                </div>
            </div>
            <div id="ingredients-modal" class="uk-flex-top" uk-modal>
                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    {!! $product->Ingredients !!}

                </div>
            </div>


            @if (Auth::user() != null)
            @if ($product->wishlist->isEmpty())
            <div class="uk-transition-fade uk-position-small uk-position-top-right xxx">
                <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
                    {{csrf_field()}}
                    <input class="uk-hidden" name="user_id" type="text" value="{{Auth::user()->id}}" />
                    <input class="uk-hidden" name="product_id" type="text" value="{{$product->id}}" />
                    <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                </form>
                <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
            </div>
            @else
            <div class="uk-position-small uk-position-top-right">
                <form action="{{route('wishlist.destroy', $product->wishlist[0]->id)}}" id="contact_form" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart_red"><span><i class="fas fa-heart"></i></span></button>
                </form> <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
            </div>
            @endif
            @else
             {{-- START  session()->get('wishlist') != null --}}
             @if (session()->get('wishlist') != null )
                    
             {{-- START foreach session()->get('wishlist') as $item --}}
             @foreach (session()->get('wishlist') as $item)
               {{-- START if $item == $product->id --}}
               @if ($item == $product->id)
               <!-- START uk-position-small -->
               <div class="uk-position-small uk-position-top-right">
                <form action="{{route('wishlist.destroy', $item)}}" id="contact_form" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                    <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart_red"><span><i class="fas fa-heart"></i></span></button>
                  </form>   
                  <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
               </div>
               <!-- END uk-position-small -->   
               {{-- ELSE if $item == $product->id --}}                    
               @else 
               <div class="uk-transition-fade uk-position-small uk-position-top-right ">
                <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
                  {{csrf_field()}}
                  <input class="uk-hidden" name="product_id" type="text" value="{{$product->id}}" />
                  <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                </form>
                    <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
              </div>
               @endif
               {{-- END if $item == $product->id --}}
             @endforeach
             {{-- END foreach session()->get('wishlist') as $item --}}
             {{-- ELSE  session()->get('wishlist') != null --}}
             @else
                <div class="uk-transition-fade uk-position-small uk-position-top-right ">
                  <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
                    {{csrf_field()}}
                    <input class="uk-hidden" name="product_id" type="text" value="{{$product->id}}" />
                    <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                  </form>
                      <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                </div>
            @endif
            {{-- END  session()->get('wishlist') != null --}}
            @endif

            @if ($product->product_slider)

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>

                <ul class="uk-slideshow-items product_slider" uk-lightbox="animation: slide" style="">

                    @for ($i=0; $i < count($product_slider); $i++) {{ $product_slider[''.$i.''] }} <li>
                        <div class="uk-text-center">
                            {{-- demo-trigger Add this class if rashad asked  --}}
                            <a class="uk-inline" href="{{ asset('storage/'.$product_slider[''.$i.'']) }}">
                                <img src="{{ asset('storage/'.$product_slider[''.$i.'']) }}" alt="" style="max-height: 250px;">
                            </a>
                        </div>

                        </li>
                        @endfor


                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            </div>
            @else
            <a href="#">
                <!-- START .uk-inline-clip -->
                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <a class="demo-trigger" href="{{ asset('storage/'.$product->thumbnail) }}">
                        <img style="    max-height: 400px;" src="{{ asset('storage/'.$product->thumbnail) }}"></a>

                    <!-- <img src="images/product1.png" alt="" style="max-height:250px;">
                          <img class="uk-transition-fade uk-position-cover" src="images/product2.png" alt="" style="max-height:250px;"> -->
                </div><!-- END .uk-inline-clip -->
            </a>
            @endif
        </div><!-- END .card -->

        @if ($product->gifting_option == 1)
        @if ($product->gift_price_1 || $product->gift_price_2 || $product->gift_price_3 || $product->gift_price_4 || $product->gift_price_5 || $product->gift_price_6)

        <!-- START .uk-margin -->
        <div class="uk-text-center uk-margin uk-flex-first uk-margin-remove-top">
            <form class="" action="{{ route('cart.store') }}" method="post">
                {{ csrf_field() }}
                <h5 class="uk-margin-remove-top">Gift Box</h5>
                <div class="uk-grid uk-flex-center">

                    @foreach ($giftbox as $item )

                    @if ($product->gift_1)
                    @if ($product->gift_1 == $item->id)

                    <div class="uk-width-auto  uk-margin-bottom">
                        {{-- START .uk-position-relative --}}
                        <div class="uk-position-relative">
                            <input type="radio" name="giftprice" class="newgiftbutton" value="{{ $product->gift_price_1 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                            <div class="uk-position-relative  uk-button uk-width-expand" style="   ">
                                <p class="uk-margin-remove " style="font-size:16px !important;">{{ $item->title }}</p>
                                <img src="{{ asset('storage/'.$item->thumbnail) }}" alt="" style="max-height:85px;">
                                <br>
                                <small> ${{ $product->gift_price_1 }} </small>
                            </div>
                        </div>
                        {{-- END .uk-position-relative --}}
                    </div>
                    @endif

                    @endif
                    @if ($product->gift_2)
                    @if ($product->gift_2 == $item->id)

                    <div class="uk-width-auto  uk-margin-bottom">
                        {{-- START .uk-position-relative --}}
                        <div class="uk-position-relative">
                            <input type="radio" name="giftprice" class="newgiftbutton" value="{{ $product->gift_price_2 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                            <div class="uk-position-relative  uk-button uk-width-expand" style="   ">
                                <p class="uk-margin-remove " style="font-size:16px !important;">{{ $item->title }}</p>

                                <img src="{{ asset('storage/'.$item->thumbnail) }}" alt="" style="max-height:85px;">
                                <br>
                                <small> ${{ $product->gift_price_2 }} </small>
                            </div>
                        </div>
                        {{-- END .uk-position-relative --}}
                    </div>
                    @endif
                    @endif
                    @if ($product->gift_3)
                    @if ($product->gift_3 == $item->id)

                    <div class="uk-width-auto  uk-margin-bottom">
                        {{-- START .uk-position-relative --}}
                        <div class="uk-position-relative">
                            <input type="radio" name="giftprice" class="newgiftbutton" value="{{ $product->gift_price_3 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                            <div class="uk-position-relative  uk-button uk-width-expand" style="   ">
                                <p class="uk-margin-remove " style="font-size:16px !important;">{{ $item->title }}</p>
                                <img src="{{ asset('storage/'.$item->thumbnail) }}" alt="" style="max-height:85px;">
                                <br>
                                <small> ${{ $product->gift_price_3 }} </small>
                            </div>
                        </div>
                        {{-- END .uk-position-relative --}}
                    </div>
                    @endif
                    @endif
                    @if ($product->gift_4)
                    @if ($product->gift_4 == $item->id)

                    <div class="uk-width-auto  uk-margin-bottom">
                        {{-- START .uk-position-relative --}}
                        <div class="uk-position-relative">
                            <input type="radio" name="giftprice" class="newgiftbutton" value="{{ $product->gift_price_4 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                            <div class="uk-position-relative  uk-button uk-width-expand" style="   ">
                                <p class="uk-margin-remove " style="font-size:16px !important;">{{ $item->title }}</p>
                                <img src="{{ asset('storage/'.$item->thumbnail) }}" alt="" style="max-height:85px;">
                                <br>
                                <small> ${{ $product->gift_price_4 }} </small>
                            </div>
                        </div>
                        {{-- END .uk-position-relative --}}
                    </div>
                    @endif
                    @endif
                    @if ($product->gift_5)
                    @if ($product->gift_5 == $item->id)

                    <div class="uk-width-auto  uk-margin-bottom">
                        {{-- START .uk-position-relative --}}
                        <div class="uk-position-relative">
                            <input type="radio" name="giftprice" class="newgiftbutton" value="{{ $product->gift_price_5 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                            <div class="uk-position-relative  uk-button uk-width-expand" style="   ">
                                <p class="uk-margin-remove " style="font-size:16px !important;">{{ $item->title }}</p>

                                <img src="{{ asset('storage/'.$item->thumbnail) }}" alt="" style="max-height:85px;">
                                <br> <small> ${{ $product->gift_price_5 }} </small>
                            </div>
                        </div>
                        {{-- END .uk-position-relative --}}
                    </div>
                    @endif
                    @endif
                    @if ($product->gift_6)
                    @if ($product->gift_6 == $item->id)

                    <div class="uk-width-auto  uk-margin-bottom">
                        {{-- START .uk-position-relative --}}
                        <div class="uk-position-relative">
                            <input type="radio" name="giftprice" class="newgiftbutton" value="{{ $product->gift_price_6 }}" style=" width: 100%;height: 100%; left: 0%; z-index:999999999999999;">
                            <div class="uk-position-relative  uk-button uk-width-expand" style="   ">
                                <p class="uk-margin-remove " style="font-size:16px !important;">{{ $item->title }}</p>

                                <img src="{{ asset('storage/'.$item->thumbnail) }}" alt="" style="max-height:85px;">
                                <br> <small> ${{ $product->gift_price_6 }} </small>
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
        @endif

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

        <div class="">
            <!-- START .uk-text-center -->
            <div class="uk-text-center">


                <h3 class="uk-margin-remove">{{ $product->title }}</h3>
                <img src="" alt="">
                <h3 class="uk-margin-small"><span class="uk-button">$<span id="newprice">{{ $product->price }}</span></span> </h3>
                <input class="uk-hidden" type="text" name="price" value="{{ $product->price }}">
                @if ($product->initial_description)
                <p>{!! $product->initial_description !!}</p>

                @endif
                <hr>

                <!-- START .uk-margin -->
                <div class=" uk-margin">

                    <h5>Bottles Sizes</h5>
                    {{-- START uk-grid --}}
                    <div class="uk-grid uk-flex-center">

                        @if ($product->price_1)
                        {{-- START uk-width-auto --}}
                        <div class="uk-width-auto@m uk-width-1-1 uk-margin-bottom">
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
                        @if ($product->price_2 )
                        {{-- START uk-width-auto --}}
                        <div class="uk-width-auto@m uk-width-1-1 uk-margin-bottom">
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
                        @if ($product->price_3 )
                        {{-- START uk-width-auto --}}
                        <div class="uk-width-auto@m uk-width-1-1 uk-margin-bottom">
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




                <input type="text" name="giftname" value="" class="giftname uk-hidden">
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->title }}">
                {{-- <input type="hidden" name="price" value="{{ $product->price }}"> --}}
                @if ($product->quantity == 0)

                <button type="submit" class="uk-button uk-button-secondary  uk-margin-small-bottom" disabled> Product is Out Of Stock </button>

                @endif
                @if ($product->quantity != 0)
                <button type="submit" class="uk-button uk-button-secondary  uk-margin-small-bottom"> Add To Bag </button>
                @endif
                {{-- <button type="submit" class="uk-button uk-button-secondary  uk-margin-small-bottom"> Add To Bag </button> --}}

            </div><!-- END .uk-text-center -->
        </div>

    </div><!-- END uk-width-1-2 -->
</div><!-- END uk-grid -->
</form>