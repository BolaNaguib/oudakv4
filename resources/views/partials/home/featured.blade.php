<!-- START section -->
<section class="uk-section-xsmall">
    <!-- START .uk-container -->
    <div class="uk-container uk-container-large ">
        <!-- START uk-grid -->
        <div class="uk-grid uk-grid-match" uk-grid>
            <!-- START .uk-width-1-3@m -->
            <div class="uk-width-1-3@m uk-width-1-1">
                <!-- START div -->
                <div>
                    <img style="width:100%;     height: 100%;" src="{{ asset('storage/'.$longImages[0]->path) }}" alt="">
                </div>
                <!-- END div -->
            </div>
            <!-- START .uk-width-1-3@m -->
            <!-- START .uk-width-2-3@m -->
            <div class="uk-width-2-3@m uk-width-1-1 uk-flex-first@m">
                <!-- card_theme-gray -->
                <div class="card_theme-gray  uk-transition-toggle" tabindex="-1">
                    @foreach ($products as $featuredproduct)
                    @if ($featuredproduct->featured != null && $featuredproduct->featured != 0)
                    <!-- START .uk-card -->
                    <div class="uk-card  uk-text-center uk-padding uk-margin-bottom" >
                        
            {{-- START Auth::user() != null --}}
            @if (Auth::user() != null)

            {{-- START if $featuredproduct->wishlist->isEmpty() --}}
            @if ($featuredproduct->wishlist->isEmpty())
            <div class="uk-transition-fade uk-position-small uk-position-top-right xxx">
              <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
                {{csrf_field()}}
                <input class="uk-hidden" name="user_id" type="text" value="{{Auth::user()->id}}" />
                <input class="uk-hidden" name="product_id" type="text" value="{{$featuredproduct->id}}" />
                <button type="submit"
                  class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i
                      class="far fa-heart"></i></span></button>
              </form>
              <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span
                  uk-icon="social"></span></button>
            </div>
            {{-- else if $featuredproduct->wishlist->isEmpty() --}}
            @else
            <div class="uk-position-small uk-position-top-right">
              <form action="{{route('wishlist.destroy', $featuredproduct->wishlist[0]->id)}}" id="contact_form" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit"
                  class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart_red"><span><i
                      class="fas fa-heart"></i></span></button>
              </form>
              <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span
                  uk-icon="social"></span></button>
            </div>
            @endif
          {{-- END if $featuredproduct->wishlist->isEmpty() --}}


          {{-- ELSE Auth::user() != null --}}
          @else
          {{-- START  session()->get('wishlist') != null --}}
          @if (session()->get('wishlist') != null )

          {{-- START foreach session()->get('wishlist') as $item --}}
          @foreach (session()->get('wishlist') as $item)
          {{-- START if $item == $featuredproduct->id --}}
          @if ($item == $featuredproduct->id)
          <!-- START uk-position-small -->
          <div class="uk-position-small uk-position-top-right">
            <form action="{{route('wishlist.destroy', $item)}}" id="contact_form" method="post">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit"
                class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart_red"><span><i
                    class="fas fa-heart"></i></span></button>
            </form>
            <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span
                uk-icon="social"></span></button>
          </div>
          <!-- END uk-position-small -->
          {{-- ELSE if $item == $featuredproduct->id --}}
          @else
          <div class="uk-transition-fade uk-position-small uk-position-top-right ">
            <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
              {{csrf_field()}}
              <input class="uk-hidden" name="product_id" type="text" value="{{$featuredproduct->id}}" />
              <button type="submit"
                class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i
                    class="far fa-heart"></i></span></button>
            </form>
            <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span
                uk-icon="social"></span></button>
          </div>
          @endif
          {{-- END if $item == $featuredproduct->id --}}
          @endforeach
          {{-- END foreach session()->get('wishlist') as $item --}}
          {{-- ELSE  session()->get('wishlist') != null --}}
          @else
          <div class="uk-transition-fade uk-position-small uk-position-top-right ">
            <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
              {{csrf_field()}}
              <input class="uk-hidden" name="product_id" type="text" value="{{$featuredproduct->id}}" />
              <button type="submit"
                class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i
                    class="far fa-heart"></i></span></button>
            </form>
            <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span
                uk-icon="social"></span></button>
          </div>
          @endif
          {{-- END  session()->get('wishlist') != null --}}

          @endif
          {{-- END Auth::user() != null --}}
                        <a href="{{ url('shop/'.$featuredproduct->slug) }}">
                            <h3>{{ $featuredproduct->title }} </h3>
                            <hr>
                            <img style="" src="{{ asset('storage/'.$featuredproduct->thumbnail) }}" alt="">
                            <!-- START div -->
                            <div class="uk-margin-top">
                                {!! $featuredproduct->main_description !!}
                            </div>
                            <!-- END dov -->
                        </a>
                    </div>
                    <!-- END .uk-card -->
                    @endif
                    @endforeach
                </div>
                <!-- END .card_theme-gray -->
            </div>
            <!-- START .uk-width-2-3@m -->
        </div>
        <!-- END .uk-grid -->
    </div>
    <!-- END .uk-container -->
</section>
<!-- END section -->
