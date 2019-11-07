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
