@extends('layouts.app')
@section('content')
{{-- {{ dd($productsWithParents) }} --}}
{{-- @if (session()->has('success_message'))
<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>{{ session()->get('success_message') }}</p>
</div>

@endif
@if(count($errors) > 0)
@foreach($errors->all() as $error)
{{ $error }}
@endforeach
@endif --}}
@if ($productcategory->parent == null)

@foreach ($productsWithParents as $cat )

<div class="  uk-container uk-container-large uk-margin-large">
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
            <button type="submit"
              class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i
                  class="far fa-heart"></i></span></button>
          </form>
          <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span
              uk-icon="social"></span></button>
        </div>
        @else
        <div class="uk-position-small uk-position-top-right">
          <form action="{{route('wishlist.destroy', $product->wishlist[0]->id)}}" id="contact_form" method="post">
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
            <button type="submit"
              class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart_red"><span><i
                  class="fas fa-heart"></i></span></button>
          </form>
          <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span
              uk-icon="social"></span></button>
        </div>
        <!-- END uk-position-small -->
        {{-- ELSE if $item == $product->id --}}
        @else
        <div class="uk-transition-fade uk-position-small uk-position-top-right ">
          <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
            {{csrf_field()}}
            <input class="uk-hidden" name="product_id" type="text" value="{{$product->id}}" />
            <button type="submit"
              class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i
                  class="far fa-heart"></i></span></button>
          </form>
          <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span
              uk-icon="social"></span></button>
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
        <form class="" action="{{ route('cart.store') }}" method="post">
          {{ csrf_field() }}
          <div class="">

            <!-- START .card -->
            <div class=" uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">

              <a href="{{ route('shop.show', $product->slug)}}">
                <!-- START .uk-inline-clip -->
                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                  <img src="{{ asset('storage/'.$product->thumbnail) }}" alt="" style="max-height:350px;">
                  <img class="uk-transition-fade uk-position-cover" src="{{ asset('storage/'.$product->secondimage) }}"
                    alt="" style="max-height:250px;">
                </div><!-- END .uk-inline-clip -->
              </a>
              <input type="hidden" name="id" value="{{ $product->id }}">
              <input type="hidden" name="name" value="{{ $product->title }}">
              <input type="hidden" name="price" value="{{ $product->price }}">
            </div><!-- END .card -->


          </div><!-- END .card_theme_white -->
          
          <div class="uk-padding-small uk-padding-top">
            <div class="uk-text-center">
              <b class="product-font">{{ $product->title }}</b>
            </div>
            <div class="uk-text-center">
              <span> ${{ $product->price }} </span>
            </div>
            <hr>
            <div class="uk-text-center">
              <button class="button_type_category_product" type="submit" name="button"> <span uk-icon="cart"></span> <span
                  style="line-height: 1.8;">ADD</span> </button>
            </div>
          </div>
       
        </form>
      </div>
    </div>
    {{-- @else
      @if ($loop->first)
        <div class="uk-width-1-1 uk-text-center">
          Sorry, Looks Like we Didnt Add Products Yet
        </div>
      @endif --}}
    @endif
    @endforeach
  </div>

</div>

@endforeach
@endif




@endsection


@section('css')
<style media="screen">
  .button_type_category_product {
    background-color: #000;
    border: 0px;
    color: #fff;
    padding: 10px 30px;
    cursor: pointer;
    border-radius: 5px;
    transition: 300ms;

  }

  .button_type_category_product:hover {
    background-color: #eee;
    color: #000;
    transition: 300ms;
  }

  .carticonx {
    width: 20px;
    top: -2px;
    position: relative;
    right: -10px;
  }

  .gridoptionicon {
    background-color: transparent;
    border: none;
    cursor: pointer;
  }

  .gridoptioniconv {
    background-color: transparent;
    border: none;
    cursor: pointer;
  }

  .productlist {
    display: none;
  }

  .productlistx {
    background-color: transparent;
    border: none;
    cursor: pointer;
  }

  .productlistxv {
    background-color: transparent;
    border: none;
    cursor: pointer;
  }
</style>

@endsection