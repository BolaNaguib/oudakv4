<!-- START section -->
<section class="uk-section">
    <div class="uk-container uk-container-large ">
        <!-- START uk-grid -->
        <div class="uk-grid uk-grod-match" uk-grid>


                      <div class="uk-width-1-3@m uk-width-1-1">
                        <div class="">
                          <img style="width:100%;" src="{{ asset('storage/'.$longImages[0]->path) }}" alt="">
                        </div>
                      </div>

            <!-- START .uk-width-2-3 -->
            <div class="uk-width-2-3@m uk-width-1-1 card_theme-gray uk-flex-first@m">
                @foreach ($products as $featuredproduct)
                @if ($featuredproduct->featured != null && $featuredproduct->featured != 0)
                <!-- START .uk-card -->
                <div class="uk-card  uk-text-center uk-padding uk-margin-bottom">
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

            {{-- @foreach ($longImages as $item )
              {{$item->path}}
            @endforeach --}}


        </div>



    </div>



</section>
<!-- END section -->
