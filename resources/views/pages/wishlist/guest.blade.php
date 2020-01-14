{{-- START !session()->has('wishlist')--}}
@if (!session()->has('wishlist'))
        <div class="uk-section-xsmall uk-flex uk-flex-middle uk-flex-center" style="min-height:600px;" >

          <h1> Empty Wishlist</h1>
        </div>
@else 
{{-- ELSE !session()->has('wishlist') --}}

      <section class="uk-section-xsmall ">

        <div class="uk-container uk-container-large">

          <div class="uk-child-width-1-4@m uk-child-width-1-1" uk-grid>
  {{-- START foreach for guestwishlist --}}
  @foreach (session()->get('wishlist') as $guestwishlist)

   {{-- START for each for products --}}
   @foreach ($products_menu as $product)

                {{-- START $guestwishlist == $product->id --}}
                @if ($guestwishlist == $product->id)
                <!-- START div -->
                <div class="">
                  <!-- START .card -->
                  <div class="card card_theme_white uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">
                       
                    <div class="uk-position-small uk-position-top-right">
                        <form action="{{route('wishlist.destroy', $product->id)}}" id="contact_form" method="post">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                            <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart_red"><span><i class="fas fa-heart"></i></span></button>
                          </form>
                <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                      </div>
                  

                          <div class="">
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

                              </div><!-- END .card -->


                          </div><!-- END .card_theme_white -->
                          <div class="uk-text-center">
                              <span> ${{ $product->price }} </span>
                              <hr>

                          </div>
                          <div class="uk-text-center">
                            <form class="" action="{{ route('cart.store') }}" method="post">
                                {{ csrf_field() }}
                              <input type="hidden" name="id" value="{{ $product->id }}">
                              <input type="hidden" name="name" value="{{ $product->title }}">
                              <input type="hidden" name="price" value="{{ $product->price }}">
                              <button class="button_type_category_product" type="submit" name="button"> <span uk-icon="cart"></span> <span style="line-height: 1.8;">ADD</span> </button>
                            </form>
                          </div>
                  </div>

                </div><!-- END div -->

                @endif
                {{-- END $guestwishlist == $product->id --}}

      @endforeach
      {{-- END foreach for products --}}

    @endforeach
    {{-- END foreach for guestwishlist --}}
          </div><!-- END uk-grid -->
        </div><!-- END uk-container -->
      </section><!-- END section -->
    @endif