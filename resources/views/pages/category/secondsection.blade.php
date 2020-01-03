<!-- START .uk-section-xsmall -->
<section class="uk-section-xsmall section_theme_gray">
    <!-- START .uk-container -->
    <div class="uk-container uk-container-large">
        <!-- START uk-grid -->
        <div class="uk-grid-match" uk-grid>
            @if ($productcategory->second_section_product != null)
            <!-- START div -->
            @foreach ($products as $product)
            @if ($product->id == $productcategory->second_section_product )

            <div class="uk-width-1-3@m uk-width-1-1">
                <!-- START .card -->
                <div class="card card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">
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
                          </form>                              <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
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
            @endif

            @if ($productcategory->second_section_description != null || $productcategory->second_section_video != null)
            <!-- START div -->
            <div class="uk-width-2-3@m uk-width-1-1">
                <p>{{ $productcategory->second_section_description }}</p>
                <!-- START .card -->
                @if ($productcategory->second_section_video != null)
                  <div class="cards card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">
                        <video width="100%" controls>
                          <source src="{{ asset('storage/'.$productcategory->second_section_video) }}" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                  </div><!-- END .card -->
                @endif
            </div><!-- END div -->
            @endif


        </div><!-- END uk-grid -->
    </div><!-- END uk-container -->
</section><!-- END section -->
