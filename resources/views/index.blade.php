@extends('layouts.app')
@section('content')



<!-- START section -->
<section class="uk-section-small">

    <!-- STARt .uk-container -->
    <div class="uk-container uk-container-large">

        <!-- START .uk-position-relative -->
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push;ratio: 7:3;">
            <!-- START .uk-slideshow-items -->
            <ul class="uk-slideshow-items">

                @foreach($main_slider as $image)
                <li>
                    <img style="width:100%;" class="slider__image" src="{{ asset('storage/'.$image->thumbnail) }}" alt="">
                    <!-- START .uk-position-center -->

                    <div class="uk-position-center uk-text-center">
                        @if ($image->title)
                        <h2 style="background-color: #000000bf;
              display: initial;
              padding: 5px;" uk-slider-parallax="x: 100,-100">{{$image->title}}</h2>
                        <hr style="border:none;">
                        @endif
                        @if ($image->caption)
                        <p style="    background-color: #000000bf;
                display: initial;
                padding: 5px;
                line-height: 2;" uk-slider-parallax="x: 200,-200">{{$image->caption}}</p>
                        @endif

                    </div><!-- END .uk-position-center -->
                    @if ($image->button_title || $image->button_link)
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-left@m uk-text-center uk-transition-slide-bottom">
                        <a href="{{ $image->button_link }}" class="orderbutton"> <i class="fas fa-shopping-cart"></i> {{ $image->button_title }} </a>
                    </div>
                    @endif

                </li>
                @endforeach

            </ul>


            <!-- END .uk-slideshow-items -->
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            <!-- <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a> -->




        </div>


    </div>
</section>



<!-- START section -->
<section class="uk-section">
    <!-- START uk-container -->
    <div class="uk-container uk-container-large">
        <div class="uk-text-right uk-hidden@m">
            <span> Diplay Mode : </span>
            <button class="gridoptionicon" type="button" name="gridoptionicon"><span uk-icon="icon: grid;"></span></button>
            <button class="gridoptioniconv" type="button" name="gridoptioniconv"><span uk-icon="icon: more-vertical;"></span></button>

            <hr>

        </div>


        <!-- START uk-grid -->
        <div class="uk-grid-match uk-grid" uk-grid>
            <!-- START .uk-width-1-3@m -->
            <div class="uk-width-1-3@m uk-width-1-1 uk-flex-first@m uk-flex-last">
                <!-- START .card -->
                <div class="card uk-card-default uk-margin-bottom">
                    <!-- START .uk-card-header -->
                    <div class="uk-card-header">
                        <h3 class="uk-card-title">{{$HomeFourBlock->title}}</h3>
                    </div>
                    <!-- END .uk-card-header -->

                    <!-- START .uk-card-body -->
                    <div class="uk-card-body">
                        <p>{!! $HomeFourBlock->description !!}</p>
                    </div>
                    <!-- END .uk-card-body -->
                </div>
                <!-- END .card  -->

                @if ($HomeFourBlock->showblogs != 0)
                <!-- START .card -->
                <div class="card uk-card-default">
                    <!-- START .uk-card-header -->
                    <div class="uk-card-header">
                        <h3 class="uk-card-title"> Latest Blog</h3>
                        <!--{{-- $post->title --}}-->
                    </div>
                    <!-- END .uk-card-header -->

                    <!-- START .uk-card-body -->
                    <div class="uk-card-body">
                        <p> This is the latest blog </p>
                        <p>{{-- $post->excerpt --}}</p>
                    </div>
                    <!-- END .uk-card-body -->
                    <div class="uk-text-right@m uk-text-center">
                        <a style="color:#fff !important ;" href="/pages/testnew" class="uk-button uk-button-secondary uk-width-expand" type="button" name="button"> Check Our Blog </a>
                    </div>
                </div>
                <!-- END .card  -->
                @endif

            </div>
            <!-- END .uk-width-1-3@m -->
            <!-- START .uk-width-1-3@m -->
            @if ($HomeFourBlock->Product1 != null)
            <div class="gridoption uk-width-1-3@m uk-width-1-2">
                <!-- START .uk-card -->
                <div class="uk-card uk-card-default uk-text-center uk-padding ">
                    <a href="{{ url('shop/'.$HomeFourBlock->Product1->slug) }}">
                        <h2 class="uk-card-title"> {{$HomeFourBlock->Product1->title}} </h2>
                        <hr>
                        <img style="max-height: 400px;" src="{{ asset('storage/'.$HomeFourBlock->Product1->thumbnail) }}" alt="">
                        {{-- <hr> --}}

                        <p>
                            {{$HomeFourBlock->Product1->initial_description}}
                        </p>
                    </a>
                </div>
                <!-- END .uk-card -->
            </div>

            <!-- END .uk-width-1-3@m -->
            @endif

            @if ($HomeFourBlock->Product1 != null)

            <!-- START .uk-width-1-3@m -->
            <div class="gridoption uk-width-1-3@m uk-width-1-2">
                <!-- START .uk-card -->
                <div class="uk-card uk-card-default uk-text-center uk-padding ">
                    <a href="{{ url('shop/'.$HomeFourBlock->Product2->slug) }}">
                        <h2 class="uk-card-title"> {{$HomeFourBlock->Product2->title}} </h2>
                        <hr>
                        <img style="max-height: 400px;" src="{{ asset('storage/'.$HomeFourBlock->Product2->thumbnail) }}" alt="">
                        {{-- <hr> --}}
                        <p>
                            {{$HomeFourBlock->Product1->initial_description}}
                        </p>
                    </a>
                </div>
                <!-- END .uk-card -->
            </div>
            <!-- END .uk-width-1-3@m -->
            @endif

        </div>
        <!-- END uk-grid -->
    </div>
    <!-- END .uk-container -->
</section>
<!-- END section -->

<!-- START section -->


<section class="uk-section">
    <div class="uk-container uk-container-large ">
        <div class="uk-text-center">

            {{-- @foreach($longImages as $image)

        <img class="" src="{{ asset('storage/'.$image->path) }}" alt="">

            @endforeach --}}

            {{-- <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="height:100%;">
      <div class="">
        @foreach($longImages as $image)

          <img style="height:100px;"  uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.2;" class="" src="{{ asset('storage/'.$image->path) }}" alt="">

            @endforeach
        </div>
    </div>



    {{-- <div class="uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('https://1.top4top.net/p_1328k3osu1.jpg'); ">

<div class="" style="height:600px">

</div>
  </div> --}}


    </div>
    <!-- START uk-grid -->
    <div class="" uk-grid>
        <!-- START .uk-width-2-3 -->
        <div class="uk-width-2-3@m uk-width-1-1 ">
            @foreach ($products as $featuredproduct)
            @if ($featuredproduct->featured != null && $featuredproduct->featured != 0)
            <!-- START .uk-card -->
            <div class="uk-card uk-card-default uk-text-center uk-padding uk-margin-bottom">
                <a href="{{ url('shop/'.$featuredproduct->slug) }}">

                    <h3>{{ $featuredproduct->title }} </h3>
                    <hr>
                    <img style="max-height: 400px;" src="{{ asset('storage/'.$featuredproduct->thumbnail) }}" alt="">
                    <div class="">
                        {!! $featuredproduct->main_description !!}
                        {{-- {{ $featuredproduct }} --}}
                    </div>
                </a>
            </div>
            @endif
            @endforeach

            <!-- START -->
        </div>
        <div class="uk-width-1-3@m uk-width-1-1">
            <div id="modelx" class="uk-position-relative" style="min-height:700px;">
                <div class="main-model-img mmi3">
                    <img src="https://oudak.com/storage/home-three-images/August2019/kE9ie8KQUAMYxW57e2nf.jpg" alt="">
                </div>
                <div class="main-model-img mmi2">
                    <img src="https://oudak.com/storage/home-three-images/August2019/LOFhgW5QZQi8pH4OpLl1.jpg" alt="">
                </div>
                <div class="main-model-img mmi1">
                    <img
                      src="data:image/jpeg;base64,PCFET0NUWVBFIGh0bWw+CjxodG1sPgogICAgPGhlYWQ+CiAgICAgICAgPG1ldGEgY2hhcnNldD0iVVRGLTgiIC8+CiAgICAgICAgPG1ldGEgaHR0cC1lcXVpdj0icmVmcmVzaCIgY29udGVudD0iMDt1cmw9aHR0cHM6Ly9vdWRhay5jb20vZW4vc3RvcmFnZS9ob21lLXRocmVlLWltYWdlcy9BdWd1c3QyMDE5L2xUd0NmS2plNks0bkNoakJCbzNILmpwZyIgLz4KCiAgICAgICAgPHRpdGxlPlJlZGlyZWN0aW5nIHRvIGh0dHBzOi8vb3VkYWsuY29tL2VuL3N0b3JhZ2UvaG9tZS10aHJlZS1pbWFnZXMvQXVndXN0MjAxOS9sVHdDZktqZTZLNG5DaGpCQm8zSC5qcGc8L3RpdGxlPgogICAgPC9oZWFkPgogICAgPGJvZHk+CiAgICAgICAgUmVkaXJlY3RpbmcgdG8gPGEgaHJlZj0iaHR0cHM6Ly9vdWRhay5jb20vZW4vc3RvcmFnZS9ob21lLXRocmVlLWltYWdlcy9BdWd1c3QyMDE5L2xUd0NmS2plNks0bkNoakJCbzNILmpwZyI+aHR0cHM6Ly9vdWRhay5jb20vZW4vc3RvcmFnZS9ob21lLXRocmVlLWltYWdlcy9BdWd1c3QyMDE5L2xUd0NmS2plNks0bkNoakJCbzNILmpwZzwvYT4uCiAgICA8L2JvZHk+CjwvaHRtbD4="
                      alt="">
                </div>


            </div>
            {{-- <div id="mid" class="mid-1"></div> --}}

        </div>

    </div>



    </div>



</section>
<!-- END section -->

@foreach ($MainBlock as $block)

<!-- START section -->
<section class="uk-section">
    <!-- START .uk-container -->
    <div class="uk-container uk-container-large">
        <!-- START .uk-grid -->
        <div class="uk-grid uk-grid-match">

            {{-- if not 3 coloumns hide this --}}
            @if ( $block->coloumn)
            <!-- START .uk-width-1-3@m -->
            <div class="uk-width-1-3@m uk-width-1-2 ">
                <!-- START div -->
                <div class="card card_theme_white">
                    <form class="" action="{{ route('cart.store') }}" method="post">
                        {{ csrf_field() }}
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
                                        <img class="uk-transition-fade uk-position-cover" src="{{ asset('storage/'.$block->Productone->secondimage) }}" alt="" style="max-height:250px;">
                                    </div><!-- END .uk-inline-clip -->
                                </a>
                                <input type="hidden" name="id" value="{{ $block->Productone->id }}">
                                <input type="hidden" name="name" value="{{ $block->Productone->title }}">
                                <input type="hidden" name="price" value="{{ $block->Productone->price }}">
                            </div><!-- END .card -->


                        </div><!-- END .card_theme_white -->
                        <div class="uk-text-center">
                            <span> ${{ $block->Productone->price }} </span>
                            <hr>

                        </div>
                        <div class="uk-text-center">
                            <button class="button_type_category_product" type="submit" name="button"> <span uk-icon="cart"></span> <span style="line-height: 1.8;">ADD</span> </button>
                        </div>
                    </form>
                </div>
            </div>
            @endif



            @if ($block->caption != null)
            <!-- START div -->
            <div class="@if ( !$block->coloumn )uk-width-2-3@m @else uk-width-1-3@m @endif uk-width-1-1 uk-f;ex uk-flex-wrap-between">
                <div class="">
                    {!! $block->caption !!}
                </div>

                @if ($block->media != null)
                <!-- START .uk-container -->
                <div class="">
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
        </div><!-- END div -->
        @endif

        {{-- --}}


        @if ($block->Producttwo)


        <div class="uk-width-1-3@m @if ( $block->coloumn) uk-width-1-2 @else uk-width-1-1 @endif  uk-flex-last@m uk-flex-first">
            <div class="card card_theme_white">
                <form class="" action="{{ route('cart.store') }}" method="post">
                    {{ csrf_field() }}
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
                                    <img class="uk-transition-fade uk-position-cover" src="{{ asset('storage/'.$block->Producttwo->secondimage) }}" alt="" style="max-height:250px;">
                                </div><!-- END .uk-inline-clip -->
                            </a>
                            <input type="hidden" name="id" value="{{ $block->Producttwo->id }}">
                            <input type="hidden" name="name" value="{{ $block->Producttwo->title }}">
                            <input type="hidden" name="price" value="{{ $block->Producttwo->price }}">
                        </div><!-- END .card -->


                    </div><!-- END .card_theme_white -->
                    <div class="uk-text-center">
                        <span> ${{ $block->Producttwo->price }} </span>
                        <hr>

                    </div>
                    <div class="uk-text-center">
                        <button class="button_type_category_product" type="submit" name="button"> <span uk-icon="cart"></span> <span style="line-height: 1.8;">ADD</span> </button>

                    </div>
                </form>
            </div>
        </div>
        @endif






    </div> <!-- END .uk-grid -->
    </div> <!-- END .uk-container -->
</section> <!-- END section -->

@endforeach





@endsection
@section('css')
<style media="screen">
    .main-model-img {
        position: absolute;
        top: 0px;
        transition: all 1s ease;
    }

    /* .main-model-img img{
width:100%;
} */

    .mid-1,
    .mid-2,
    .mid-3 {
        position: relative;
        background-size: cover;
        background-image: url('https://oudak.com/storage/home-three-images/August2019/lTwCfKje6K4nChjBBo3H.jpg');
        background-position: center;
        min-height: 1200px;
        transition: all 1s ease;
    }

    .mid-2 {
        background-image: url('https://oudak.com/storage/home-three-images/August2019/LOFhgW5QZQi8pH4OpLl1.jpg');
        transition: all 1s ease;

    }

    .mid-3 {
        background-image: url('https://oudak.com/storage/home-three-images/August2019/kE9ie8KQUAMYxW57e2nf.jpg');
        transition: all 1s ease;

    }


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

    .orderbutton {
        background-color: #fff;
        padding: 15px 35px;
        border-radius: 25px;
    }
</style>
@endsection
@section('css')
<style media="screen">
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
</style>
@endsection
@section('js')
<script type="text/javascript">
    let $gridoptionicon = $('.gridoptionicon');
    let $gridoptioniconv = $('.gridoptioniconv');
    $gridoptioniconv.on('click', function() {
        let $gridoption = $('.gridoption');
        $gridoption.addClass('uk-width-1-1');
        $gridoption.removeClass('uk-width-1-3@m uk-width-1-2');
    });
    $gridoptionicon.on('click', function() {
        let $gridoption = $('.gridoption');
        $gridoption.removeClass('uk-width-1-1');
        $gridoption.addClass('uk-width-1-3@m uk-width-1-2');
    });
</script>
@endsection
