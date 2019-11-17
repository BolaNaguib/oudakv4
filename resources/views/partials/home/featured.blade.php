<!-- START section -->
<section class="uk-section">
    <!-- START .uk-container -->
    <div class="uk-container uk-container-large ">
        <!-- START uk-grid -->
        <div class="uk-grid uk-grid-match" uk-grid>
            <!-- START .uk-width-1-3@m -->
            <div class="uk-width-1-3@m uk-width-1-1">
                <!-- START div -->
                <div>
                    <img style="width:100%;" src="{{ asset('storage/'.$longImages[0]->path) }}" alt="">
                </div>
                <!-- END div -->
            </div>
            <!-- START .uk-width-1-3@m -->
            <!-- START .uk-width-2-3@m -->
            <div class="uk-width-2-3@m uk-width-1-1 uk-flex-first@m">
                <!-- card_theme-gray -->
                <div class="card_theme-gray">
                    @foreach ($products as $featuredproduct)
                    @if ($featuredproduct->featured != null && $featuredproduct->featured != 0)
                    <!-- START .uk-card -->
                    <div class="uk-card  uk-text-center uk-padding uk-margin-bottom">
                        <a href="{{ url('shop/'.$featuredproduct->slug) }}">
                            <h3>{{ $featuredproduct->title }} </h3>
                            <hr>
                            <img style="max-height: 400px;" src="{{ asset('storage/'.$featuredproduct->thumbnail) }}" alt="">
                            <!-- START div -->
                            <div class="">
                                {!! $featuredproduct->main_description !!}
                            </div>
                            <!-- END dov -->
                        </a>
                    </div>
                    <!-- END .uk-card -->
                    @endif
                    @endforeach
                </div>
                <!-- END .card_theme-gray -->
            </div>
            <!-- START .uk-width-2-3@m -->
        </div>
        <!-- END .uk-grid -->
    </div>
    <!-- END .uk-container -->
</section>
<!-- END section -->
