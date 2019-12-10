@extends('layouts.app')
@section('content')
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
@if ($productcategory->parent == null)
    <div class="uk-container uk-container-large">
      <br>
      <div class="uk-text-right">
        <div class="showicons">
          <button class="productlistx" type="button" name="gridoptionicon">
            Show Products
          </button>
        </div>
        <div class="showicons">
          <button  class="productlistxv" type="button" name="gridoptioniconv">
            Show categories
          </button>
        </div>
      </div>
    </div>


@foreach ($allcat as $cat )
@if ($cat->parent == $productcategory->id)

    <!-- START .categorylist -->
    <div class="categorylist uk-container uk-container-large uk-margin-large">
        <a href="/category/{{ $cat->slug }}">
            <!-- START .uk-background-center -->
            <div class="uk-background-center-center uk-height-large uk-width-expand parralexbg" style="background-image: url({{ asset('storage/'.$cat->path) }});">
                <p class="uk-h4 uk-margin-remove uk-light newcattit">{{ $cat->title }}</p>
            </div>
            <!-- END .uk-background-center -->
        </a>
    </div>
    <!-- END .categorylist -->

 <div class=" productlist uk-container uk-container-large uk-margin-large">
   <h3>{{ $cat->title }}</h3>
   <hr>
   <div class="uk-grid uk-grid-match">
    @foreach ($products as $product )
    @if ($product->category == $cat->id)
        <!-- START .uk-width-1-3@m -->
      <div class="uk-width-1-3@m uk-width-1-2 ">
        <!-- START div -->
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
                  </form>
                                    <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
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
              <input type="hidden" name="id" value="{{ $product->id }}">
              <input type="hidden" name="name" value="{{ $product->title }}">
              <input type="hidden" name="price" value="{{ $product->price }}">
              </div><!-- END .card -->


              </div><!-- END .card_theme_white -->
              <div class="uk-text-center">
              <span> ${{ $product->price }} </span>
              <hr>

              </div>
              <div class="uk-text-center">
                <button class="button_type_category_product" type="submit" name="button"> <span uk-icon="cart"></span> <span style="line-height: 1.8;">ADD</span>  </button>
              </div>
              </form>
              </div>
      </div>

    @endif
    @endforeach
  </div>

</div>

@endif
@endforeach
@endif
<!-- START .uk-section-xsmall -->
<section class="uk-section-xsmall" style="padding-top:20px;">
<div class="uk-container uk-container-large">
  <hr>
  <div class="uk-text-center">
    <h3> {{ $productcategory->title }} </h3>

    {!! $productcategory->description !!}

  </div>
</div>
    @if ($productcategory->path != null)
    <!-- START .uk-container -->
    <div class="uk-container uk-container-large">
        @if ($productcategory->Image_or_video == "image")
          <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('{{ asset('storage/'.$productcategory->path) }}');">
            <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
              @if ($productcategory->media_title)
                <h1 style="
                color: #000;
    display: initial;
    padding: 5px;" uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.2;">{{ $productcategory->media_title }}</h1>
              @endif
              @if ($productcategory->media_caption)
                <hr style="border:none;">
                            <p style="    background-color: #000000bf;
                display: initial;
                padding: 5px;
                line-height: 2;" uk-parallax="opacity: 0,1; y: 100,0; scale: 0.5,1; viewport: 0.2;">{{ $productcategory->media_caption }}</p>
              @endif


            </div>
        </div>
        {{-- <img src="{{ asset('storage/'.$productcategory->path) }}" alt="" style="width:100%"> --}}
        @elseif ($productcategory->Image_or_video == "video")
        <video width="100%" controls>
            <source src="{{ asset('storage/'.$productcategory->path) }}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        @endif
    </div>
    @endif

  </section>


    <!-- START .uk-section-xsmall -->
    <section class="uk-section-xsmall">
        <!-- START .uk-container -->
        <div class="uk-container uk-container-large">
            <!-- START uk-grid -->
            <div class="uk-grid-match" uk-grid>
                              @if ($productcategory->Productone != null)
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
                                                </form>                                                <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
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
                    <button class="button_type_category_product" type="submit" name="button">ADD   <span class="carticonx" uk-icon="cart"></span> </button>

                  </div>

                </div><!-- END .card_theme_white -->
                </form>

              </div><!-- END div -->








                @endif

                @if ($productcategory->first_section_description != null)
                <!-- START div -->
                <div class="uk-width-1-3@m uk-width-1-1">
                    <p>{{ $productcategory->first_section_description }}</p>
                    <!-- START .card -->
                    @if ($productcategory->first_section_video != null)
                      <div class="cards card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">
                          <video width="100%" controls>
                              <source src="{{ asset('storage/'.$productcategory->first_section_video) }}" type="video/mp4">
                              Your browser does not support HTML5 video.
                          </video>
                      </div><!-- END .card -->
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
                                                  </form>                                                  <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
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
                        {{-- <!-- START uk-position-top-left -->
                        <div class="uk-transition-slide-left uk-position-small uk-position-top-left ">
                            <button class="uk-button uk-button-default">{{ $product->title }}</button>
                        </div><!-- END uk-position-top-left -->
                        <!-- START uk-position-top-right -->
                        <div class="uk-transition-slide-right uk-position-small uk-position-top-right ">
                            <button class="uk-button uk-button-secondary">${{ $product->price }}</button>
                        </div><!-- END uk-position-top-right --> --}}

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
                      <button class="button_type_category_product" type="submit" name="button">ADD   <span class="carticonx" uk-icon="cart"></span> </button>

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


    @if ($productcategory->second_section_description != null || $productcategory->second_section_video != null || $productcategory->second_section_product != null)

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
                        <div class="uk-transition-fade uk-position-small uk-position-top-right ">
                              <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                              <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                        </div>
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
    @endif

    <section class="uk-section-xsmall ">

        <div class="uk-container uk-container-large">


            <div class="" uk-grid>

                @php
                  $isExist = 1
                @endphp

                @foreach ($products as $product)

                @if ($product->category == $productcategory->id )

                {{-- To Eliminate Duplicated entry --}}
                  @if ($productcategory->Productone == null)
                      @php
                        $productone_id = 0;
                      @endphp
                    @else
                      @php
                        $productone_id = $productcategory->Productone->id;
                      @endphp
                  @endif
                  @if ($productcategory->Productonex == null)
                      @php
                        $productonex_id = 0;
                      @endphp
                    @else
                      @php
                        $productonex_id = $productcategory->Productonex->id;
                      @endphp
                  @endif
                  @if ($productcategory->Producttwo == null)
                      @php
                        $producttwo_id = 0;
                      @endphp
                    @else
                      @php
                        $producttwo_id = $productcategory->Producttwo->id;
                      @endphp
                  @endif
                  @if ($productcategory->Producttwox == null)
                      @php
                        $producttwox_id = 0;
                      @endphp
                    @else
                      @php
                        $producttwox_id = $productcategory->Producttwox->id;
                      @endphp
                  @endif
                  @if ($product->id != $productone_id &&
                       $product->id != $productonex_id &&
                        $product->id != $producttwo_id &&
                        $product->id != $producttwox_id
                        )

                        @if ($isExist == 1)
                          <div class="uk-text-right uk-width-1-1">
                            <div class="uk-hidden">
                              {{ $isExist++ }}
                            </div>
                            <div class="showicons">

                                    <button class="gridoptionicon" type="button" name="gridoptionicon">
                                      <i class="fas fa-square"></i>
                                    </button>
                                    <button  class="gridoptioniconv" type="button" name="gridoptioniconv">
                                      <i class="fas fa-square"></i>
                                      <i class="fas fa-square"></i>
                                    </button>

                            </div>
                            <hr>
                    </div>
                    {{-- @php
                      $isExist++
                    @endphp --}}

                  @elseif ($isExist != 1)
                    {{-- no --}}
                    @endif





                    <!-- START div -->
                    <div class="gridoption uk-margin-bottom uk-width-1-4@m uk-width-1-2">
                        <!-- START .card -->
                        <div class="card card_theme_white uk-text-center uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">
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
                                  </form>                                  <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                              </div>
                            @endif
                          @else
                            <div class="uk-transition-fade uk-position-small uk-position-top-right ">
                                  <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                                  <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                            </div>
                          @endif
                            <a href="/shop/{{ $product->slug }}">
                                <img src="{{ asset('storage/'.$product->thumbnail) }}" alt="" style="max-height:250px;">
                                <h3 class="">{{ $product->title }}</h3>
                            </a>

                            <button class="uk-button uk-button-secondary">${{ $product->price }}</button>
                        </div><!-- END .card -->
                    </div><!-- END div -->
                  {{-- @endif --}}

                @endif



                @endif
                @endforeach

            </div><!-- END uk-grid -->
        </div><!-- END uk-container -->
    </section><!-- END section -->



  @endsection


@section('css')
<style media="screen">
.button_type_category_product{
  background-color: #000;
  border: 0px;
  color: #fff;
  padding: 10px 30px;
  cursor: pointer;
  border-radius: 5px;
  transition: 300ms;

}
.button_type_category_product:hover{
  background-color: #eee;
  color: #000;
  transition: 300ms;
}
.carticonx{
  width: 20px;
top: -2px;
position: relative;
right: -10px;
}
.gridoptionicon{
background-color: transparent;
border: none;
cursor: pointer;
}
.gridoptioniconv{
background-color: transparent;
border: none;
cursor: pointer;
}
.productlist{
  display: none;
}
.productlistx{
background-color: transparent;
border: none;
cursor: pointer;
}
.productlistxv{
background-color: transparent;
border: none;
cursor: pointer;
}

</style>

@endsection

@section('js')
  <script type="text/javascript">
  let $gridoptionicon = $('.gridoptionicon');
  let $gridoptioniconv = $('.gridoptioniconv');
    $gridoptioniconv.on('click',function(){
      let $gridoption = $('.gridoption');
      $gridoption.addClass('uk-width-1-1');
      $gridoption.removeClass('uk-width-1-4@m uk-width-1-2');
    });
    $gridoptionicon.on('click',function(){
      let $gridoption = $('.gridoption');
      $gridoption.removeClass('uk-width-1-1');
      $gridoption.addClass('uk-width-1-4@m uk-width-1-2');
    });




    let $productlistx = $('.productlistx');
    let $productlistxv = $('.productlistxv');
    let $productlist = $('.productlist');
    let $categorylist = $('.categorylist');
      $productlistxv.on('click',function(){
        $productlist.hide();
        $categorylist.show();

      });
      $productlistx.on('click',function(){

        $productlist.show();
        $categorylist.hide();
      });
  </script>
@endsection
