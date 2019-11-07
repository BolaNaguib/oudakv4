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
                <div class="card uk-card-default ">
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
                <div class="card uk-card-default uk-margin-top">
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
                <div class="uk-card uk-card-default uk-text-center uk-padding uk-visible-toggle" tabindex="-1">
                    <a href="{{ url('shop/'.$HomeFourBlock->Product1->slug) }}">
                        <h2 class="uk-card-title"> {{$HomeFourBlock->Product1->title}} </h2>
                        <hr>
                        <img style="max-height: 400px;" src="{{ asset('storage/'.$HomeFourBlock->Product1->thumbnail) }}" alt="">
                        {{-- <p>
                            {{$HomeFourBlock->Product1->initial_description}}
                        </p> --}}
                        <div class="uk-invisible-hover uk-margin-top">
                          <hr>
                          <b class="uk-button uk-button-secondary">${{ $HomeFourBlock->Product1->price }}</b>
                        </div>
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
                <div class="uk-card uk-card-default uk-text-center uk-padding uk-visible-toggle" tabindex="-1">
                    <a href="{{ url('shop/'.$HomeFourBlock->Product2->slug) }}">
                        <h2 class="uk-card-title"> {{$HomeFourBlock->Product2->title}} </h2>
                        <hr>
                        <img style="max-height: 400px;" src="{{ asset('storage/'.$HomeFourBlock->Product2->thumbnail) }}" alt="">
                        {{-- <p>
                            {{$HomeFourBlock->Product2->initial_description}}
                        </p> --}}
                        <div class="uk-invisible-hover uk-margin-top">
                          <hr>
                          <b class="uk-button uk-button-secondary">${{ $HomeFourBlock->Product2->price }}</b>
                        </div>
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
