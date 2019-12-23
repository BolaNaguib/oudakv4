<!-- START .uk-section-xsmall -->
<section class="uk-section-xsmall">
    <!-- START .uk-container -->
    <div class="uk-container uk-container-large">
        <!-- START uk-grid -->
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-1-3@m uk-width-1-2">



                <div class="card card_theme_white uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">
                    @if (Auth::user() != null)
                    @if ($productcategory->Productone->wishlist->isEmpty())
                    <div class="uk-transition-fade uk-position-small uk-position-top-right xxx">
                        <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
                            {{csrf_field()}}
                            <input class="uk-hidden" name="user_id" type="text" value="{{Auth::user()->id}}" />
                            <input class="uk-hidden" name="product_id" type="text" value="{{$productcategory->Productone->id}}" />
                            <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                        </form>
                        <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                    </div>
                    @else
                    <div class="uk-position-small uk-position-top-right">
                        <form action="{{route('wishlist.destroy', $productcategory->Productone->wishlist[0]->id)}}" id="contact_form" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart_red"><span><i class="fas fa-heart"></i></span></button>
                        </form> <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                    </div>
                    @endif
                    @else
                    <div class="uk-transition-fade uk-position-small uk-position-top-right ">
                        <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                        <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                    </div>
                    @endif
                    <form class="" action="{{ route('cart.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="uk-text-center">
                            <b>{{ $productcategory->Productone->title }}</b>
                        </div>
                        <!-- START .card -->
                        <div class=" uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">


                            <a href="{{ route('shop.show', $productcategory->Productone->slug)}}">
                                <!-- START .uk-inline-clip -->
                                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                    <img src="{{ asset('storage/'.$productcategory->Productone->thumbnail) }}" alt="" style="max-height:350px;">
                                    <img class="uk-transition-fade uk-position-cover" src="{{ asset('storage/'.$productcategory->Productone->secondimage) }}" alt="" style="max-height:250px;">
                                </div><!-- END .uk-inline-clip -->
                            </a>
                            <input type="hidden" name="id" value="{{ $productcategory->Productone->id }}">
                            <input type="hidden" name="name" value="{{ $productcategory->Productone->title }}">
                            <input type="hidden" name="price" value="{{ $productcategory->Productone->price }}">
                        </div><!-- END .card -->
                        <div class="uk-text-center">
                            <span> ${{ $productcategory->Productone->price }} </span>
                            <hr>

                        </div>
                        <div class="uk-text-center">
                            <button class="button_type_category_product" type="submit" name="button">ADD <span class="carticonx" uk-icon="cart"></span> </button>

                        </div>
                      </form>

                </div><!-- END .card_theme_white -->

            </div><!-- END div -->

            {{-- @endif --}}

            @if ($productcategory->first_section_description != null)
            <!-- START div -->
            <div class="uk-width-1-3@m uk-width-1-1">
                <p>{{ $productcategory->first_section_description }}</p>
                <!-- START .card -->
                @if ($productcategory->first_section_video != null)
                  @if ($productcategory->first_section_media_type == "video")
                    <div class="cards card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">
                        <!--<video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" loop muted playsinline uk-video="autoplay: inview"></video>-->
                        <video
                        id="my-video"
                        class="video-js"
                        height="300"
                        controls
                        preload="auto"
                        data-setup="{}"
                      >
                      <source src="{{ asset('storage/'.$productcategory->first_section_video) }}" type="video/mp4">
                        <p class="vjs-no-js">
                          To view this video please enable JavaScript, and consider upgrading to a
                          web browser that
                          <a href="https://videojs.com/html5-video-support/" target="_blank"
                            >supports HTML5 video</a
                          >
                        </p>
                      </video>
                        {{-- <video width="100%" playsinline controls>
                            <source src="{{ asset('storage/'.$productcategory->first_section_video) }}" type="video/mp4">
                            <!--Your browser does not support HTML5 video.-->
                        </video> --}}

                        <hr>
                        <video src="{{ asset('storage/'.$productcategory->first_section_video) }}" controls>
                            <!-- fallback -->
                            <p>Your browser does not support HTML5 video.</p>
                     </video>
                    </div><!-- END .card -->


                  @elseif ($productcategory->first_section_media_type == "image")
                    <div class="cards card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">
                      <img src="{{ asset('storage/'.$productcategory->first_section_video) }}" style="width:100%">
                    </div><!-- END .card -->
                  @endif
                @endif

            </div><!-- END div -->
            @endif

            @if ($products != null )
            <!-- START div -->
            @foreach ($products as $product)
            @if ($product->id == $productcategory->first_section_product )

            <div class="uk-width-1-3@m uk-width-1-2 uk-flex-first uk-flex-last@m">


                <div class="card card_theme_white uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">
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
                    <div class="uk-transition-fade uk-position-small uk-position-top-right ">
                        <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                        <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                    </div>
                    @endif
                    <form class="" action="{{ route('cart.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="uk-text-center">
                            <b>{{ $product->title }}</b>
                        </div>
                        <!-- START .card -->
                        <div class=" uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">
                            <a href="{{ route('shop.show', $product->slug)}}">
                                <!-- START .uk-inline-clip -->
                                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                    <img src="{{ asset('storage/'.$product->thumbnail) }}" alt="" style="max-height:350px;">
                                    <img class="uk-transition-fade uk-position-cover" src="{{ asset('storage/'.$product->secondimage) }}" alt="" style="max-height:250px;">
                                </div><!-- END .uk-inline-clip -->
                            </a>
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->title }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                        </div><!-- END .card -->
                        <div class="uk-text-center">
                            <span> ${{ $product->price }} </span>
                            <hr>

                        </div>
                        <div class="uk-text-center">
                            <button class="button_type_category_product" type="submit" name="button">ADD <span class="carticonx" uk-icon="cart"></span> </button>

                        </div>

                </div><!-- END .card_theme_white -->
                </form>

            </div><!-- END div -->
            @endif
            @endforeach
          @endif

        </div><!-- END uk-grid -->
    </div><!-- END uk-container -->
</section><!-- END section -->
