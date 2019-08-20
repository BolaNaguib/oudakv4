@include('layout.header')

<!-- START section -->
<section class="uk-section-small">

  <!-- STARt .uk-container -->
  <div class="uk-container uk-container-large">

    <!-- START .uk-position-relative -->
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade;ratio: 7:3;">

      <ul class="uk-slideshow-items">

        @foreach($main_slider as $image)
        <li>
          <img class="slider__image" src="{{ asset('storage/'.$image->thumbnail) }}" alt="">
          <!-- START .uk-position-center -->
          <div class="uk-position-center uk-text-center">
            <h2 uk-slider-parallax="x: 100,-100">{{$image->title}}</h2>
            <p uk-slider-parallax="x: 200,-200">{{$image->caption}}</p>
          </div><!-- END .uk-position-center -->
        </li>
        @endforeach

      </ul>
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
    <!-- START uk-grid -->
    <div class="uk-grid-match uk-grid" uk-grid>
      <!-- START .uk-width-1-3@m -->
      <div class="uk-width-1-3@m uk-width-1-1">
        <!-- START .card -->
        <div class="card uk-card-default uk-margin-bottom">
          <!-- START .uk-card-header -->
          <div class="uk-card-header">
            <h3 class="uk-card-title">{{$HomeFourBlock->title}}</h3>
          </div>
          <!-- END .uk-card-header -->

          <!-- START .uk-card-body -->
          <div class="uk-card-body">
            <p>{{$HomeFourBlock->description}}</p>
          </div>
          <!-- END .uk-card-body -->
        </div>
        <!-- END .card  -->

        <!-- START .card -->
        <div class="card uk-card-default">
          <!-- START .uk-card-header -->
          <div class="uk-card-header">
            <h3 class="uk-card-title">{{ $post->title }}</h3>
          </div>
          <!-- END .uk-card-header -->

          <!-- START .uk-card-body -->
          <div class="uk-card-body">
            <p>{{ $post->excerpt }}</p>
          </div>
          <!-- END .uk-card-body -->
          <div class="uk-text-right@m uk-text-center">
            <a style="color:#fff !important ;" href="/pages/testnew" class="uk-button uk-button-secondary uk-width-expand" type="button" name="button"> Check Our Blog </a>
          </div>
        </div>
        <!-- END .card  -->
      </div>
      <!-- END .uk-width-1-3@m -->
      <!-- START .uk-width-1-3@m -->
      @if ($HomeFourBlock->Product1 != null)
        <div class="uk-width-1-3@m uk-width-1-1">
          <!-- START .uk-card -->
          <div class="uk-card uk-card-default uk-text-center uk-padding ">
            <a href="{{ url('shop/'.$HomeFourBlock->Product1->slug) }}">
              <h2 class="uk-card-title"> {{$HomeFourBlock->Product1->title}} </h2>
              <hr>
              <img style="max-height: 400px;" src="{{ asset('storage/'.$HomeFourBlock->Product1->thumbnail) }}" alt="">
                <hr>

              <p>
                {{$HomeFourBlock->Product1->initial_description}}
              </p>
              <h3> Check Our Product </h3>
            </a>
          </div>
          <!-- END .uk-card -->
        </div>

      <!-- END .uk-width-1-3@m -->
    @endif

      @if ($HomeFourBlock->Product1 != null)

      <!-- START .uk-width-1-3@m -->
      <div class="uk-width-1-3@m uk-width-1-1">
        <!-- START .uk-card -->
        <div class="uk-card uk-card-default uk-text-center uk-padding ">
          <a href="{{ url('shop/'.$HomeFourBlock->Product2->slug) }}">
            <h2 class="uk-card-title"> {{$HomeFourBlock->Product2->title}} </h2>
            <hr>
            <img style="max-height: 400px;" src="{{ asset('storage/'.$HomeFourBlock->Product2->thumbnail) }}" alt="">
            <hr>
            <p>
              {{$HomeFourBlock->Product1->initial_description}}
            </p>
            <h3> Check Our Products </h3>
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
  <div class="uk-container uk-container-small ">
    <div class="uk-text-center">

      {{-- @foreach($longImages as $image)

        <img class="" src="{{ asset('storage/'.$image->path) }}" alt="">

      @endforeach --}}

      <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="height:100%;">
      <div class="">
        @foreach($longImages as $image)

          <img  uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;" class="" src="{{ asset('storage/'.$image->path) }}" alt="">

        @endforeach
      </div>
  </div>

    </div>
  </div>
</section>
<!-- END section -->





@include('layout.footer')
