<!-- START section -->
<section class="uk-section section_theme_gray">

  <!-- START .uk-container -->
  <div class="uk-container uk-container-large uk-position-relative">
    <a href="#" style="    position: absolute;
    top: -100px;
    background-color: #fff;
    right: 0px;
    padding: 25px;
    border-radius: 20px;
    border: 1px solid #f8f8f8;" uk-totop uk-scroll></a>

    <!-- START uk-grid -->
    <div class="uk-child-width-1-3@m uk-child-width-1-1" uk-grid>
      <!-- START div -->
      <div class="uk-text-center">
        <h4>Extra</h4>
        <hr>
        <ul class="uk-list uk-text-center">
          <li>
            <a href="#">Return and Exchange</a>
          </li>
          <li>
            <a href="#">FAQ</a>
          </li>
          <li>
            <a href="#">NewsLetter</a>
          </li>
          <li>
            <a href="#">Contact Us</a>
          </li>
        </ul>
      </div>
      <!-- END div -->

      <!-- START div -->
      <div class="">
        <div class="uk-text-center">
          <h4>Join Our NewsLetter</h4>
          <hr>
          <form class="" action="index.html" method="post">
            <div class="uk-inline">
              <a class="uk-form-icon uk-form-icon-flip button_type_newsletter" href="#" uk-icon="icon:  arrow-right"></a>
              <input class="uk-input input_type_newsletter uk-width-medium" type="text" placeholder="mail@oudak.com">
            </div>
            <!-- <input class="input_type_newsletter uk-width-medium" placeholder="Put your mail" type="text" name="" value=""> -->
          </form>
        </div>
      </div>
      <!-- END div -->

      <!-- START div -->
      <div class="">
        <div class="uk-text-center">
          <h4>Follow Us</h4>
          <hr>
          <ul class="uk-iconnav sociallinks uk-flex uk-flex-center">
            <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
            <li><a class="snapchat" href="#"><i class="fab fa-snapchat-square"></i></a></li>
            <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>

          </ul>
        </div>
      </div>
      <!-- END div -->


    </div>
    <!-- END uk-grid -->

  </div>
  <!-- END .uk-container -->
</section>
<!-- END section -->
<section style="    background-color: #000;
    color: #fff;
    padding: 15px 0px;">
  <div class="uk-container uk-container-large">
    <!-- START uk-grid -->
    <div class="uk-child-width-1-2@m uk-child-width-1-2" uk-grid>
      <!-- START .uk-text-left@m -->
      <div class="uk-text-left@m uk-text-center uk-text-small">
        Copyright © Oudak - All rights reserved 2019
      </div>
      <!-- END .uk-text-left@m -->
      <!-- START .uk-text-right@m -->
      <div class="uk-text-right@m uk-text-center uk-text-small">
        Made with <i style="color:red" class="fas fa-heart"></i> By <a style="color:red !important;" target="_blank" href="https://xvxlabs.com"> xvxlabs.com</a>
      </div>
      <!-- END .uk-text-right@m -->
    </div>
    <!-- END uk-grid -->
  </div>

</section>









<div id="x2" uk-offcanvas>
  <div class="uk-offcanvas-bar sidenav">

    <button class="uk-offcanvas-close" type="button" style="    color: #000;" uk-close></button>
    <br>
    <br>
    <h3 class="sidenav__title uk-text-center">Menu</h3>

    <ul class="uk-nav-default uk-nav-center uk-nav-parent-icon" uk-nav>
      <li><a class="sidenav__links" href="#">Home</a></li>
      <li><a class="sidenav__links" href="#">Product Portrait</a></li>
      <li><a class="sidenav__links" href="#">Product Landscape</a>
        <div class="" uk-drop="pos: right-top" style="    min-width: 950px;">
          <div class="">
            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-flex uk-flex-middle" uk-grid>
              <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="images/slider.jpg" alt="" uk-cover>
                <canvas width="600" height="400"></canvas>
              </div>
              <div class="">
                <ul class="uk-nav-default uk-nav-center uk-nav-parent-icon" uk-nav>
                  <li><a class="sidenav__links" href="#">Product Title</a></li>
                  <li><a class="sidenav__links" href="#">Product Title</a></li>
                  <li><a class="sidenav__links" href="#">Product Title</a></li>

              </div>
            </div>

          </div>

        </div>
      </li>

      <li><a class="sidenav__links" href="#">Product grid</a>
        <div class="" uk-drop="pos: right-top" style="    min-width: 950px;">
          <div class="card uk-card-default ">
            <div class="uk-child-width-1-3" uk-grid>
              <div class="">
                <div class="uk-text-center uk-padding ">
                  <a href="#">
                    <img class=" demo-trigger" src="images/product1.png" data-zoom="images/product1.png?w=1000&ch=DPR&dpr=2" alt="">
                    <hr>
                    <h2 class="uk-card-title"> Product Title </h2>
                  </a>
                </div>
                <!-- END .uk-card -->
              </div>

              <div class="">
                <div class=" uk-text-center uk-padding ">
                  <a href="#">
                    <img class=" demo-trigger" src="images/product1.png" data-zoom="images/product1.png?w=1000&ch=DPR&dpr=2" alt="">
                    <hr>
                    <h2 class="uk-card-title"> Product Title </h2>
                  </a>
                </div>
                <!-- END .uk-card -->
              </div>

              <div class="">
                <div class=" uk-text-center uk-padding ">
                  <a href="#">
                    <img class=" demo-trigger" src="images/product1.png" data-zoom="images/product1.png?w=1000&ch=DPR&dpr=2" alt="">
                    <hr>
                    <h2 class="uk-card-title"> Product Title </h2>
                  </a>
                </div>
                <!-- END .uk-card -->
              </div>
            </div>

          </div>

        </div>
      </li>
    </ul>
  </div>
</div>



<style media="screen">
  .demo-trigger {
  display: inline-block;
   cursor: zoom-in;
  }

  .detail {
  position: absolute;


  }
</style>
<!-- UIkit JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>
<script src="js/Luminous.min.js"></script>
<script src="js/Drift.min.js"></script>
<script type="text/javascript">
  var demoTrigger = document.querySelector('.demo-trigger');

  new Drift(demoTrigger, {
    paneContainer: document.querySelector('.detail'),
    inlinePane: 900,
    inlineOffsetY: -85,
    containInline: true,
    sourceAttribute: 'href'
  });

  new Luminous(demoTrigger);

</script>
</body>

</html>
