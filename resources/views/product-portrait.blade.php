@extends('layouts.app')
@section('content')

<!-- START section -->
<!-- Products Templates -->
<section class="uk-section-xsmall">

    <!-- START .uk-container -->
    <div class="uk-container uk-container-large">

        @include('partials.product.desktop')
        @include('partials.product.mobile')


    </div><!-- END .uk-container -->
</section><!-- END section -->

<!-- Product Notes -->
@if ( $product->olfactory || $product->top_notes || $product->heart_notes || $product->base_notes )
<section class="uk-section-xsmall">
    <div class="uk-container uk-container-large">
      <!-- START .uk-text-center -->
      <br>
      <br>
      <div class="uk-text-center uk-margin">
          <h3 class="uk-margin-remove">OlFactory</h3>
      </div><!-- END .uk-text-center -->
        <div class="uk-margin-medium-top">
            <ul class="uk-child-width-expand@m uk-child-width-1-2" uk-tab="animation: uk-animation-fade;">
                @if ($product->olfactory)
                <li class="uk-active uk-margin-top"><a href="#">OlFactory</a></li>
                @endif
                @if ($product->top_notes)
                <li class="uk-margin-top"><a href="#">Top Notes</a></li>
                @endif
                @if ($product->heart_notes)
                <li class="uk-margin-top"><a href="#">Heart Notes</a></li>
                @endif
                @if ($product->base_notes)
                <li class="uk-margin-top"><a href="#">Base Notes</a></li>

                @endif
            </ul>
            <ul class="uk-switcher uk-margin">
                @if ($product->olfactory)
                <li>
                    <div class="uk-grid uk-child-width-1-2">
                        <div class="">
                            <img src="{{ asset('storage/'.$product->olfactory_pic) }}" alt="">
                        </div>
                        <div class="">
                            {!! $product->olfactory !!}
                        </div>
                    </div>
                </li>
                @endif
                @if ($product->top_notes)
                <li>
                    <div class="uk-grid uk-child-width-1-2">
                        <div class="">
                            <img src="{{ asset('storage/'.$product->top_notes_pic) }}" alt="">
                        </div>
                        <div class="">
                            {!! $product->top_notes !!}
                        </div>
                    </div>
                </li>
                @endif
                @if ($product->heart_notes)
                <li>
                    <div class="uk-grid uk-child-width-1-2">
                        <div class="">
                            <img src="{{ asset('storage/'.$product->heart_notes_pic) }}" alt="">

                        </div>
                        <div class="">
                            {!! $product->heart_notes !!}
                        </div>
                    </div>
                </li>
                @endif
                @if ($product->base_notes)
                <li>
                    <div class="uk-grid uk-child-width-1-2">
                        <div class="">
                            <img src="{{ asset('storage/'.$product->base_notes_pic) }}" alt="">
                        </div>
                        <div class="">
                            {!! $product->base_notes !!}
                        </div>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </div>
</section>
@endif




<!-- START .section_theme_gray -->
<section class="uk-section-xsmall section_theme_gray">
    <!-- START .uk-text-center -->
    <div class="uk-text-center uk-margin">
        <h3 class="uk-margin-remove">SUGGESTIONS</h3>
        {{-- <img src="https://3.top4top.net/p_1328rhb851.png.png" alt=""> --}}
    </div><!-- END .uk-text-center -->

    <!-- START .uk-container -->
    <div class="uk-container uk-container-large">

        <!-- START uk-grid -->
        <div class="uk-child-width-1-4@m uk-child-width-1-2@s uk-child-width-1-1" uk-grid>

            @foreach ($products as $sproduct)
            @if ($product->category == $sproduct->category)
            @if ($product->slug != $sproduct->slug)
            <!-- START div -->
            <div class="">
                <!-- START .card -->
                <div class="card card_theme_white uk-text-center uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">
                  @if (Auth::user() != null)
                    @if ($sproduct->wishlist->isEmpty())
                      <div class="uk-transition-fade uk-position-small uk-position-top-right xxx">
                        <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
                            {{csrf_field()}}
                            <input class="uk-hidden" name="user_id" type="text" value="{{Auth::user()->id}}" />
                            <input class="uk-hidden" name="product_id" type="text" value="{{$sproduct->id}}" />
                            <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                          </form>
                          <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                      </div>
                    @else
                      <div class="uk-position-small uk-position-top-right">
                        <form action="{{route('wishlist.destroy', $sproduct->wishlist[0]->id)}}" id="contact_form" method="post">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                            <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart_red"><span><i class="fas fa-heart"></i></span></button>
                          </form>                          <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                      </div>
                    @endif
                  @else
                    <div class="uk-transition-fade uk-position-small uk-position-top-right ">
                          <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                          <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                    </div>
                  @endif
                    <a href="{{ route('shop.show', $sproduct->slug) }}">
                        <img src="{{ asset('storage/'.$sproduct->thumbnail) }}" alt="" style="max-height:250px;">
                        <h3 class="">{{ $sproduct->title }}</h3>
                    </a>
                    <button class="uk-button uk-button-secondary">${{ $sproduct->price }}</button>
                </div><!-- END .card -->
            </div><!-- END div -->

            @endif
            {{-- @elseif ($product->category != $sproduct->category)

                <div class="uk-width-1-1 uk-text-center">
                  there is no similar products

                </div> --}}

            @endif
            @endforeach









        </div><!-- END uk-grid -->
    </div><!-- END uk-container -->
</section><!-- END section -->
@endsection

@section('css')

<style media="screen">
    /* HIDE RADIO */
    [type=radio] {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* IMAGE STYLES */
    [type=radio]+div {
        cursor: pointer;
        outline: 1px solid #d7d7d7;

    }

    /* CHECKED STYLES */
    [type=radio]:checked+div {
        outline: 3px solid #8b8989;
    }

    /* CHECKED STYLES */
    [type=radio]:checked+div .checkicon {
        opacity: 1;
        position: absolute;
        right: 7px;
        top: 7px;
    }

    .checkicon {
        opacity: 0;
        position: absolute;
        right: 7px;
        top: 7px;
    }

    .ingredientBox {

    }

    .displayBlock {
        display: block !important;
        transition: 500ms;

    }
</style>
@endsection

@section('js')
<script type="text/javascript">
    $('input[type=radio]').click(function() {
        if (this.previous) {
            this.checked = false;
        }
        this.previous = this.checked;
    });
</script>
<script type="text/javascript">

    const ingredientButton = document.querySelector('.ingredientButton');
    const ingredientBox = document.querySelector('.ingredientBox');
    const displayBlock = 'displayBlock';
    ingredientBox.addEventListener('click', function(e) {
        e.stopPropagation();
    });
    ingredientButton.addEventListener('click', function(e) {
        ingredientBox.classList.toggle(displayBlock);
        e.stopPropagation();

    });
    document.addEventListener('click', function() {
        if (ingredientBox.classList.contains(displayBlock)) {
            ingredientBox.classList.remove(displayBlock);
        }
    });
</script>
<script type="text/javascript">
    const ingredientButtonx = document.querySelector('.ingredientButtonx');
    const ingredientBoxx = document.querySelector('.ingredientBoxx');
    const displayBlockx = 'displayBlock';
    ingredientBoxx.addEventListener('click', function(e) {
        e.stopPropagation();
    });
    ingredientButtonx.addEventListener('click', function(e) {
        ingredientBoxx.classList.toggle(displayBlockx);
        e.stopPropagation();

    });
    document.addEventListener('click', function() {
        if (ingredientBoxx.classList.contains(displayBlock)) {
            ingredientBoxx.classList.remove(displayBlock);
        }
    });
</script>
@endsection
