@extends('layouts.app') @section('content')
<!-- START section -->
<section class="uk-section-xsmall">
    <!-- START uk-container -->
    <div class="uk-container uk-container-large">
        <!-- START uk-grid -->
        <div class='uk-grid uk-child-width-1-2@m uk-child-width-1-1 uk-grid-match' uk-grid="uk-margin">
          @foreach($giftMedia as $item)
            <!-- START div -->
            <div class=''>
             <a href="{{ $item->link }}">
             <img src="{{ asset('storage/'.$item->image) }}" alt="">
             </a>
            </div>
            <!-- END div -->
           @endforeach
        </div>
        <!-- END uk-grid -->
    </div>
    <!-- END uk-container -->
</section>
<!-- END section -->

<!-- START section -->
<div class='uk-section-xsmall'>
    <!-- START uk-container uk-container-large -->
    <div class='uk-container uk-container-large'>
        <!-- START uk-grid -->
        <div class='uk-grid uk-child-width-1-4@m uk-child-width-1-1 uk-grid-match' uk-grid="uk-margin">
            @foreach ($giftProducts as $product)
         
         

            <!-- START div -->
            <div class="">
              <!-- START .card -->
              <div class="card card_theme_white uk-text-center uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">
                <!-- START uk-position-top-right -->

                {{-- START Auth::user() != null --}}
                @if (Auth::user() != null) 

                  {{-- START if $product->wishlist->isEmpty() --}}
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
                    {{-- else if $product->wishlist->isEmpty() --}}
                    @else
                      <div class="uk-position-small uk-position-top-right">
                        <form action="{{route('wishlist.destroy', $product->wishlist[0]->id)}}" id="contact_form" method="post">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                            <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart_red"><span><i class="fas fa-heart"></i></span></button>
                          </form>
                          <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                      </div>
                  @endif
                  {{-- END if $product->wishlist->isEmpty() --}}

              
                  {{-- ELSE Auth::user() != null --}}
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
                {{-- END Auth::user() != null --}}

                <a href="shop/{{ $product->slug }}">
                  <img src="{{ asset('storage/'.$product->thumbnail) }}" alt="" style="max-height:250px;">
                  <h3 class="">{{ $product->title }}</h3>
                </a>
                <span class="">${{ $product->price }}</span>
                <hr>
                <div class="uk-text-center">
                    <form class="" action="{{ route('cart.store') }}" method="post">
                        {{ csrf_field() }}
                      <input type="hidden" name="id" value="{{ $product->id }}">
                      <input type="hidden" name="name" value="{{ $product->title }}">
                      <input type="hidden" name="price" value="{{ $product->price }}">
                      <button class="button_type_category_product" type="submit" name="button"> <span uk-icon="cart"></span> <span style="line-height: 1.8;">ADD</span> </button>
                    </form>
                  </div>
              </div><!-- END .card -->

            </div><!-- END div -->

        @endforeach
        </div>
        <!-- END uk-grid -->
    </div>
    <!-- END uk-container uk-container-large -->
</div>
<!-- END section -->
@endsection
