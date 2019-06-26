<?php include 'layout/header.php'; ?>
<section class="uk-section">
  <div class="uk-container uk-container uk-text-center">
    <h1>Product Title</h1>
    <img src="images/hrx.png" alt="">

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
      irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <!-- START .card -->
    <div class="card card_theme_white uk-flex uk-flex-middle uk-flex-center uk-position-relative uk-transition-toggle" tabindex="0">
      <!-- START uk-position-top-left -->
      <div class="uk-transition-fade uk-position-small uk-position-top-left ">
        <h6>Ingredients</h6>
        <div class="uk-flex">
          <span class="uk-icon uk-icon-image" style="background-image: url(images/product1.png);"> </span><span class="uk-text-small">Oud Oil 300 ML </span>
          <hr>
        </div>
        <div class="uk-flex">
          <span class="uk-icon uk-icon-image" style="background-image: url(images/product1.png);"> </span><span class="uk-text-small">Oud Oil 300 ML </span>
          <hr>
        </div>
        <div class="uk-flex">
          <span class="uk-icon uk-icon-image" style="background-image: url(images/product1.png);"> </span><span class="uk-text-small">Oud Oil 300 ML </span>
          <hr>
        </div>

      </div><!-- END uk-position-top-left -->
      <!-- START uk-position-top-right -->
      <div class="uk-transition-fade uk-position-small uk-position-top-right ">
        <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart" uk-tooltip="title: Give a Heart; pos: left"><span uk-icon="heart"></span></button>
        <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_star" uk-tooltip="title: Add To Favorite; pos: left"><span uk-icon="star"></span></button>
        <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_mail" uk-tooltip="title: Send to Email; pos: left"><span uk-icon="mail"></span></button>
        <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social" uk-tooltip="title: Share on social Media; pos: left"><span uk-icon="social"></span></button>
      </div><!-- END uk-position-top-right -->

      <a href="#">
        <!-- START .uk-inline-clip -->
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
          <img src="images/product1.png" alt="" style="max-height:250px;">
          <img class="uk-transition-fade uk-position-cover" src="images/product2.png" alt="" style="max-height:250px;">
        </div><!-- END .uk-inline-clip -->
      </a>
    </div><!-- END .card -->

    <div class=" uk-margin">
      <h5>Bottles Sizes</h5>
      <button class="uk-button uk-button-default">3 ML</button>
      <button class="uk-button uk-button-default">6 ML</button>
      <button class="uk-button uk-button-default">12 ML</button>

    </div>
    <hr>
    <div class=" uk-margin">
      <h5>Gift Box</h5>
      <button class="uk-button uk-button-default uk-padding-small"><img src="images/product1.png" alt="" style="max-height:150px;"></button>
      <button class="uk-button uk-button-default uk-padding-small"><img src="images/product2.png" alt="" style="max-height:150px;"></button>
      <button class="uk-button uk-button-default uk-padding-small"><img src="images/product1.png" alt="" style="max-height:150px;"></button>
    </div>
    <button class="uk-button uk-button-secondary  uk-margin-small-bottom"> Add To Bag </button>
    <hr>
    <h5>Product Description</h5>
    <img src="images/hrx.png" alt="">

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
      irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</section>

<section class="uk-section section_theme_gray">
  <div class="uk-text-center uk-margin">
    <h3 class="uk-margin-remove">Similar Products</h3>

    <img src="images/hrx.png" alt="">
  </div>
  <div class="uk-container uk-container-large">
    <div class="uk-child-width-1-4" uk-grid>

      <!-- START div -->
      <div class="">
        <!-- START .card -->
        <div class="card card_theme_white uk-text-center">
          <a href="#">
            <img src="images/product1.png" alt="" style="max-height:250px;">
            <h3 class="">Product Title</h3>
          </a>
          <button class="uk-button uk-button-secondary">$100</button>
        </div><!-- END .card -->
      </div><!-- END div -->

      <!-- START div -->
      <div class="">
        <!-- START .card -->
        <div class="card card_theme_white uk-text-center">
          <a href="#">
            <img src="images/product1.png" alt="" style="max-height:250px;">
            <h3 class="">Product Title</h3>
          </a>
          <button class="uk-button uk-button-secondary">$100</button>
        </div><!-- END .card -->
      </div><!-- END div -->

      <!-- START div -->
      <div class="">
        <!-- START .card -->
        <div class="card card_theme_white uk-text-center">
          <a href="#">
            <img src="images/product1.png" alt="" style="max-height:250px;">
            <h3 class="">Product Title</h3>
          </a>
          <button class="uk-button uk-button-secondary">$100</button>
        </div><!-- END .card -->
      </div><!-- END div -->

      <!-- START div -->
      <div class="">
        <!-- START .card -->
        <div class="card card_theme_white uk-text-center">
          <a href="#">
            <img src="images/product1.png" alt="" style="max-height:250px;">
            <h3 class="">Product Title</h3>
          </a>
          <button class="uk-button uk-button-secondary">$100</button>
        </div><!-- END .card -->
      </div><!-- END div -->


    </div><!-- END uk-grid -->
  </div><!-- END uk-container -->
</section><!-- END section -->

<?php include 'layout/footer.php'; ?>
