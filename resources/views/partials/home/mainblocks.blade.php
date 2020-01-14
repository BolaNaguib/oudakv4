@foreach ($MainBlock as $block)
<!-- START section -->
<section class="uk-section-xsmall">
  <!-- START .uk-container -->
  <div class="uk-container uk-container-large">
    <!-- START .uk-grid -->
    <div class="uk-grid uk-grid-match" uk-grid="uk-margin">

      {{-- if not 3 coloumns hide this --}}
      @if ( $block->coloumn)
      <!-- START .uk-width-1-3@m -->
      <div class="uk-width-1-3@m uk-width-1-2 ">
        <!-- START div -->
        <div class="card card_theme_white uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">
          @if (Auth::user() != null)
          @if ($block->Productone->wishlist->isEmpty())
          <div class="uk-transition-fade uk-position-small uk-position-top-right xxx">
            <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
              {{csrf_field()}}
              <input class="uk-hidden" name="user_id" type="text" value="{{Auth::user()->id}}" />
              <input class="uk-hidden" name="product_id" type="text" value="{{$block->Productone->id}}" />
              <button type="submit"
                class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i
                    class="far fa-heart"></i></span></button>
            </form>
            <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span
                uk-icon="social"></span></button>
          </div>
          @else
          {{-- {{ $block->Productone->wishlist }} --}}
          <div class="uk-position-small uk-position-top-right">
            <form action="{{route('wishlist.destroy', $block->Productone->wishlist[0]->id )}}" id="contact_form"
              method="post">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              {{-- <input class="uk-hidden" name="user_id" type="text" value="{{Auth::user()->id}}" /> --}}
              {{-- <input class="uk-hidden" name="product_id" type="text" value="{{$block->Productone->id}}" /> --}}
              <button type="submit"
                class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart_red"><span><i
                    class="fas fa-heart"></i></span></button>
            </form>
            <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span
                uk-icon="social"></span></button>
          </div>
          @endif
          @else
          {{-- START  session()->get('wishlist') != null --}}
          @if (session()->get('wishlist') != null )

          {{-- START foreach session()->get('wishlist') as $item --}}
          @foreach (session()->get('wishlist') as $item)
          {{-- START if $item == $block->Productone->id --}}
          @if ($item == $block->Productone->id)
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
          {{-- ELSE if $item == $block->Productone->id --}}
          @else
          <div class="uk-transition-fade uk-position-small uk-position-top-right ">
            <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
              {{csrf_field()}}
              <input class="uk-hidden" name="product_id" type="text" value="{{$block->Productone->id}}" />
              <button type="submit"
                class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i
                    class="far fa-heart"></i></span></button>
            </form>
            <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span
                uk-icon="social"></span></button>
          </div>
          @endif
          {{-- END if $item == $block->Productone->id --}}
          @endforeach
          {{-- END foreach session()->get('wishlist') as $item --}}
          {{-- ELSE  session()->get('wishlist') != null --}}
          @else
          <div class="uk-transition-fade uk-position-small uk-position-top-right ">
            <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
              {{csrf_field()}}
              <input class="uk-hidden" name="product_id" type="text" value="{{$block->Productone->id}}" />
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
          <div class="">

            <div class="uk-text-center">
              <b>{{ $block->Productone->title }}</b>
            </div>
            <!-- START .card -->
            <div class=" uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">

              <a href="{{ route('shop.show', $block->Productone->slug)}}">
                <!-- START .uk-inline-clip -->
                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                  <img src="{{ asset('storage/'.$block->Productone->thumbnail) }}" alt="" style="max-height:350px;">
                  <img class="uk-transition-fade uk-position-cover"
                    src="{{ asset('storage/'.$block->Productone->secondimage) }}" alt="" style="max-height:250px;">
                </div><!-- END .uk-inline-clip -->
              </a>

            </div><!-- END .card -->


          </div><!-- END .card_theme_white -->
          <div class="uk-text-center">
            <span> ${{ $block->Productone->price }} </span>
            <hr>

          </div>
          <div class="uk-text-center">
            <form class="" action="{{ route('cart.store') }}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{ $block->Productone->id }}">
              <input type="hidden" name="name" value="{{ $block->Productone->title }}">
              <input type="hidden" name="price" value="{{ $block->Productone->price }}">
              <button class="button_type_category_product" type="submit" name="button"> <span uk-icon="cart"></span>
                <span style="line-height: 1.8;">ADD</span> </button>
            </form>
          </div>
        </div>
      </div>
      @endif



      @if ($block->caption != null)
      <!-- START div -->
      <div
        class="@if ( !$block->coloumn )uk-width-2-3@m @else uk-width-1-3@m @endif uk-width-1-1 uk-f;ex uk-flex-wrap-between">
      

        @if ($block->media != null)
        <!-- START .uk-container -->
        <div class="uk-margin-bottom">
          @if ($block->mediatype == "image")
          {{-- <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('{{ asset('storage/'.$productcategory->path) }}');">
          <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">



          </div>
        </div> --}}
        <img src="{{ asset('storage/'.$block->media) }}" alt="" style="width:100%">
        @elseif ($block->mediatype == "video")
        <video width="100%" controls>
          <source src="{{ asset('storage/'.$block->media) }}" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>
        @endif
      </div>
      @endif
      <div class="">
        {!! $block->caption !!}
      </div>
    </div><!-- END div -->
    @endif

    {{-- --}}


    @if ($block->Producttwo)


    <div
      class="uk-width-1-3@m @if ( $block->coloumn) uk-width-1-2 @else uk-width-1-1 @endif  uk-flex-last@m uk-flex-first">
      <div class="card card_theme_white  uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">
        @if (Auth::user() != null)
        @if ($block->Producttwo->wishlist->isEmpty())
        <div class="uk-transition-fade uk-position-small uk-position-top-right xxx">
          <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
            {{csrf_field()}}
            <input class="uk-hidden" name="user_id" type="text" value="{{Auth::user()->id}}" />
            <input class="uk-hidden" name="product_id" type="text" value="{{$block->Producttwo->id}}" />
            <button type="submit"
              class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i
                  class="far fa-heart"></i></span></button>
          </form>
          <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span
              uk-icon="social"></span></button>
        </div>
        @else
        <div class="uk-position-small uk-position-top-right">
          <form action="{{route('wishlist.destroy', $block->Producttwo->wishlist[0]->id)}}" id="contact_form"
            method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            {{-- <input class="uk-hidden" name="user_id" type="text" value="{{Auth::user()->id}}" /> --}}
            {{-- <input class="uk-hidden" name="product_id" type="text" value="{{$block->Producttwo->id}}" /> --}}
            <button type="submit"
              class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart_red"><span><i
                  class="fas fa-heart"></i></span></button>
          </form> <button
            class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span
              uk-icon="social"></span></button>
        </div>
        @endif
        @else
        {{-- START  session()->get('wishlist') != null --}}
        @if (session()->get('wishlist') != null )

        {{-- START foreach session()->get('wishlist') as $item --}}
        @foreach (session()->get('wishlist') as $item)
        {{-- START if $item == $block->Producttwo->id --}}
        @if ($item == $block->Producttwo->id)
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
        {{-- ELSE if $item == $block->Producttwo->id --}}
        @else
        <div class="uk-transition-fade uk-position-small uk-position-top-right ">
          <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
            {{csrf_field()}}
            <input class="uk-hidden" name="product_id" type="text" value="{{$block->Producttwo->id}}" />
            <button type="submit"
              class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i
                  class="far fa-heart"></i></span></button>
          </form>
          <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span
              uk-icon="social"></span></button>
        </div>
        @endif
        {{-- END if $item == $block->Producttwo->id --}}
        @endforeach
        {{-- END foreach session()->get('wishlist') as $item --}}
        {{-- ELSE  session()->get('wishlist') != null --}}
        @else
        <div class="uk-transition-fade uk-position-small uk-position-top-right ">
          <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
            {{csrf_field()}}
            <input class="uk-hidden" name="product_id" type="text" value="{{$block->Producttwo->id}}" />
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

        <div class="">

          <div class="uk-text-center">
            <b>{{ $block->Producttwo->title }}</b>
          </div>
          <!-- START .card -->
          <div class=" uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">

            <a href="{{ route('shop.show', $block->Producttwo->slug)}}">
              <!-- START .uk-inline-clip -->
              <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                <img src="{{ asset('storage/'.$block->Producttwo->thumbnail) }}" alt="" style="max-height:350px;">
                <img class="uk-transition-fade uk-position-cover"
                  src="{{ asset('storage/'.$block->Producttwo->secondimage) }}" alt="" style="max-height:250px;">
              </div><!-- END .uk-inline-clip -->
            </a>

          </div><!-- END .card -->


        </div><!-- END .card_theme_white -->
        <div class="uk-text-center">
          <span> ${{ $block->Producttwo->price }} </span>
          <hr>

        </div>
        <div class="uk-text-center">
          <form class="" action="{{ route('cart.store') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $block->Producttwo->id }}">
            <input type="hidden" name="name" value="{{ $block->Producttwo->title }}">
            <input type="hidden" name="price" value="{{ $block->Producttwo->price }}">
            <button class="button_type_category_product" type="submit" name="button"> <span uk-icon="cart"></span> <span
                style="line-height: 1.8;">ADD</span> </button>
          </form>
        </div>
      </div>
    </div>
    @endif






  </div> <!-- END .uk-grid -->
  </div> <!-- END .uk-container -->
</section> <!-- END section -->

@endforeach