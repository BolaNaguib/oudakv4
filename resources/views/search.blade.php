@include('layout.header')

<div class="uk-section">
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

    <section class="uk-section ">
  
      <div class="uk-container uk-container-large">

        <div class="uk-child-width-1-4" uk-grid>
          @foreach ($products as $product)
              <!-- START div -->
              <div class="">
                <!-- START .card -->
                <div class="card card_theme_white uk-text-center">
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
