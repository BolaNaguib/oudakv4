@extends('layouts.app')
@section('content')

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
      <section class="uk-section-xsmall ">

        <div class="uk-container uk-container-large">

          <div class="uk-child-width-1-4@m uk-child-width-1-1" uk-grid>
            @foreach ($wishlists as $wishlist)

                <!-- START div -->
                <div class="">
                  <!-- START .card -->
                  <div class="card card_theme_white uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">
                    @if (Auth::user() != null)
                      @if ($wishlist->product->wishlist->isEmpty())
                        <div class="uk-transition-fade uk-position-small uk-position-top-right xxx">
                          <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
                              {{csrf_field()}}
                              <input class="uk-hidden" name="user_id" type="text" value="{{Auth::user()->id}}" />
                              <input class="uk-hidden" name="product_id" type="text" value="{{$wishlist->product->id}}" />
                              <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                            </form>
                            <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                        </div>
                      @else
                        <div class="uk-position-small uk-position-top-right">
                          <form action="{{route('wishlist.destroy',$wishlist->product->wishlist[0]->id )}}" id="contact_form" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                              {{-- <input class="uk-hidden" name="user_id" type="text" value="{{Auth::user()->id}}" /> --}}
                              {{-- <input class="uk-hidden" name="product_id" type="text" value="{{$item->model->id}}" /> --}}
                              <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart_red"><span><i class="fas fa-heart"></i></span></button>
                            </form>                           <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                        </div>
                      @endif
                    @else
                      <div class="uk-transition-fade uk-position-small uk-position-top-right ">
                            <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                            <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                      </div>
                    @endif
                          <div class="">

                              <div class="uk-text-center">
                                  <b>{{ $wishlist->product->title }}</b>
                              </div>
                              <!-- START .card -->
                              <div class=" uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">

                                  <a href="{{ route('shop.show', $wishlist->product->slug)}}">
                                      <!-- START .uk-inline-clip -->
                                      <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                          <img src="{{ asset('storage/'.$wishlist->product->thumbnail) }}" alt="" style="max-height:350px;">
                                          <img class="uk-transition-fade uk-position-cover" src="{{ asset('storage/'.$wishlist->product->secondimage) }}" alt="" style="max-height:250px;">
                                      </div><!-- END .uk-inline-clip -->
                                  </a>

                              </div><!-- END .card -->


                          </div><!-- END .card_theme_white -->
                          <div class="uk-text-center">
                              <span> ${{ $wishlist->product->price }} </span>
                              <hr>

                          </div>
                          <div class="uk-text-center">
                            <form class="" action="{{ route('cart.store') }}" method="post">
                                {{ csrf_field() }}
                              <input type="hidden" name="id" value="{{ $wishlist->product->id }}">
                              <input type="hidden" name="name" value="{{ $wishlist->product->title }}">
                              <input type="hidden" name="price" value="{{ $wishlist->product->price }}">
                              <button class="button_type_category_product" type="submit" name="button"> <span uk-icon="cart"></span> <span style="line-height: 1.8;">ADD</span> </button>
                            </form>
                          </div>
                  </div>

                </div><!-- END div -->

            @endforeach

          </div><!-- END uk-grid -->
        </div><!-- END uk-container -->
      </section><!-- END section -->
    </div>
  </div>


@endsection
