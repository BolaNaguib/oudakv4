@include('layout.header')

<!-- START section -->
<section class="uk-section-small">

  <!-- STARt .uk-container -->
  <div class="uk-container uk-container-large">

    <!-- START .uk-position-relative -->
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade;ratio: 7:3;">

      <ul class="uk-slideshow-items">

        <li>
          <img class="slider__image" src="images/slider.jpg" alt="">
          <!-- START .uk-position-center -->
          <div class="uk-position-center uk-text-center">
            <h2 uk-slider-parallax="x: 100,-100">Heading</h2>
            <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
          </div><!-- END .uk-position-center -->
        </li>
        <li class="">
          <img class="slider__image" src="images/slider.jpg" alt="">
          <div class="uk-position-center uk-text-center">
            <h2 uk-slider-parallax="x: 100,-100">Heading</h2>
            <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
          </div>
        </li>
        <li class="">
          <img class="slider__image" src="images/slider.jpg" alt="">
          <div class="uk-position-center uk-text-center">
            <h2 uk-slider-parallax="x: 100,-100">Heading</h2>
            <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
          </div>
        </li>
        <li class="">
          <img class="slider__image" src="images/slider.jpg" alt="">
          <div class="uk-position-center uk-text-center">
            <h2 uk-slider-parallax="x: 100,-100">Heading</h2>
            <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
          </div>
        </li>
        <li class="">
          <img class="slider__image" src="images/slider.jpg" alt="">
          <div class="uk-position-center uk-text-center">
            <h2 uk-slider-parallax="x: 100,-100">Heading</h2>
            <p uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
          </div>
        </li>
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
            <h3 class="uk-card-title">Fragrance</h3>
          </div>
          <!-- END .uk-card-header -->

          <!-- START .uk-card-body -->
          <div class="uk-card-body">
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
          </div>
          <!-- END .uk-card-body -->
        </div>
        <!-- END .card  -->

        <!-- START .card -->
        <div class="card uk-card-default">
          <!-- START .uk-card-header -->
          <div class="uk-card-header">
            <h3 class="uk-card-title">Fragrance</h3>
          </div>
          <!-- END .uk-card-header -->

          <!-- START .uk-card-body -->
          <div class="uk-card-body">
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
          </div>
          <!-- END .uk-card-body -->
          <div class="uk-text-right@m uk-text-center">
            <button class="uk-button uk-button-secondary uk-width-expand" type="button" name="button"> Check Our Blog </button>
          </div>
        </div>
        <!-- END .card  -->
      </div>
      <!-- END .uk-width-1-3@m -->
      <!-- START .uk-width-1-3@m -->
      <div class="uk-width-1-3@m uk-width-1-1">
        <!-- START .uk-card -->
        <div class="uk-card uk-card-default uk-text-center uk-padding ">
          <a href="#">
            <h2 class="uk-card-title"> Fragrance </h2>
            <hr>
            <img src="images/product1.png" alt="">
              <hr>
            <h3> Check Our Products </h3>
          </a>
        </div>
        <!-- END .uk-card -->
      </div>
      <!-- END .uk-width-1-3@m -->
      <!-- START .uk-width-1-3@m -->
      <div class="uk-width-1-3@m uk-width-1-1">
        <!-- START .uk-card -->
        <div class="uk-card uk-card-default uk-text-center uk-padding ">
          <a href="#">
            <h2 class="uk-card-title"> Fragrance </h2>
            <hr>
            <img src="images/product1.png" alt="">
            <hr>
            <h3> Check Our Products </h3>
          </a>
        </div>
        <!-- END .uk-card -->
      </div>
      <!-- END .uk-width-1-3@m -->
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
      <img class="" src="images/long.jpg" alt="">
    </div>
  </div>
</section>
<!-- END section -->




@foreach ($products as $product)
{{ $product->name }}
{{ $product->price }}
@endforeach






@include('layout.footer')
