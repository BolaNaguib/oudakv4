@extends('layouts.app')
@section('content')
  {{-- {{ dd($productsWithParents) }} --}}
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

  @foreach ($productsWithParents as $cat )
    @if ($loop->first)
        <div class="uk-container uk-container-large">
          <br>
          <div class="uk-text-right">
            <div class="showicons productcontainer">
              <button class="productlistx" type="button" name="gridoptionicon">
                Show Products
              </button>
            </div>
            <div class="showicons categorycontainer">
              <button  class="productlistxv" type="button" name="gridoptioniconv">
                Show categories
              </button>
            </div>
          </div>
        </div>
    @endif


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


@if ($productcategory->description || $productcategory->path )

<!-- START .uk-section-xsmall -->
<section class="uk-section-xsmall" style="padding-top:20px;">
<div class="uk-container uk-container-large">
  {{-- <hr> --}}
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
@endif

    @if ($productcategory->Productone != null)
      @include('pages.category.firstsection')
    @endif


    @if ($productcategory->second_section_description != null || $productcategory->second_section_video != null || $productcategory->second_section_product != null)

      @include('pages.category.secondsection')

    @endif

    @include('pages.category.similarproducts')



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




    let $productlistx        = $('.productlistx');
    let $productlistxv       = $('.productlistxv');
    let $productlist         = $('.productlist');
    let $categorylist        = $('.categorylist');
    let $productcontainer  = $('.productcontainer');
    let $categorycontainer = $('.categorycontainer');
    $categorycontainer.hide();
      $productlistxv.on('click',function(){
        $productlist.hide();
        $categorycontainer.hide();
        $productcontainer.show();
        $categorylist.show();

      });
      $productlistx.on('click',function(){

        $productlist.show();
        $categorylist.hide();
        $productcontainer.hide();
        $categorycontainer.show();


      });
  </script>
@endsection
