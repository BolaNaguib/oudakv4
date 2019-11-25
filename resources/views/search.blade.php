@include('layout.header')

<div class="uk-section-xsmall">
  <div class="uk-container uk-container-large">
    @if (session()->has('success_message'))
    <div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a>
<p>{{ session()->get('success_message') }}</p>
</div>

    @endif
    @if(count($errors) > 0)
    @foreach($errors->all() as $error)
    {{ $error }}
    @endforeach
    @endif
    <h1>Search Results</h1>
    <p> {{ $products->count() }} reult(s) for {{ request()->input('query') }} </p>

    <section class="uk-section-xsmall ">

      <div class="uk-container uk-container-large">

        <div class="uk-child-width-1-4@m uk-child-width-1-1" uk-grid>
          @foreach ($products as $product)

              <!-- START div -->
              <div class="">
                <!-- START .card -->
                <div class="card card_theme_white uk-text-center uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">
                  <!-- START uk-position-top-right -->
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
                          <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart_red"><span><i class="fas fa-heart"></i></span></button>
                          <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                      </div>
                    @endif
                  @else
                    <div class="uk-transition-fade uk-position-small uk-position-top-right ">
                          <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                          <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                    </div>
                  @endif

                  <a href="shop/{{ $product->slug }}">
                    <img src="{{ asset('storage/'.$product->thumbnail) }}" alt="" style="max-height:250px;">
                    <h3 class="">{{ $product->title }}</h3>
                  </a>
                  <button class="uk-button uk-button-secondary">${{ $product->price }}</button>
                </div><!-- END .card -->

              </div><!-- END div -->

          @endforeach

        </div><!-- END uk-grid -->
      </div><!-- END uk-container -->
    </section><!-- END section -->
  </div>
</div>


@include('layout.footer')
