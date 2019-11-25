<?php include 'layout/header.php'; ?>

<!-- START section -->
<section class="uk-section-xsmall">
  <div class="uk-container uk-container-large">
    <div class="uk-child-width-1-2" uk-grid>
      <div class="">
        <h3 class="">Login </h3>
        <span class="uk-margin">If you are an exsisting customer login</span>
        <hr>
        <form class="uk-form-horizontal" action="index.html" method="post">

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Email / Username</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="text" placeholder="Enter Your Email Or Username">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Password </label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="password" placeholder="ENter Your Password">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->
          <div class="uk-text-right">
            <button class="uk-button uk-button-secondary" type="button" name="button"> Login </button>
            <button class="uk-button uk-button-default" type="button" name="button"> Forgot Your Password ? </button>

          </div>

        </form>
      </div>

      <div class="">
        <h3 class="">Register </h3>
        <span class="uk-margin">If you are an New customer </span>
        <hr>
        <form class="uk-form-horizontal" action="index.html" method="post">

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">First Name</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="text" placeholder="First Name">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Last Name</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="text" placeholder="Last Name">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Address</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="text" placeholder="Address">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Phone Number</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand " id="form-stacked-text" type="number" placeholder="+1 01023 45687 330">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Email Address</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="email" placeholder="bola@naguib.com">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Password</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="password" placeholder="Enter A password ">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Repeat Password </label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input error uk-width-expand" id="form-stacked-text" type="password" placeholder="Re-enter your password ">
              <small class="uk-text-danger uk-text-small"> This Password Doesnt match </small>

            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->
          <div class="uk-text-right">
            <button class="uk-button uk-button-secondary" type="button" name="button"> Register </button>

          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- END section -->



<!-- START section -->
<section class="uk-section-xsmall section_theme_gray">
  <!-- START .uk-container -->
  <div class="uk-container uk-container-large">
    <!-- START uk-grid -->
    <div class="uk-child-width-1-2" uk-grid>
      <!-- START div -->
      <div class=""></div>
      <!-- END div -->
      <!-- START div -->
      <div class="">
        <h3>Order Summary</h3>
        <hr>

        <!-- card card_theme_white -->
        <div class="card card_theme_white uk-margin-bottom">
          <!-- START .uk-clearfix -->
          <div class="uk-clearfix">
            <!-- START .uk-float-right -->
            <div class="uk-float-right"><b>$ 10 </b></div> <!-- END .uk-float-right -->
            <!-- START .uk-float-left -->
            <div class="uk-float-left"><b>Product Title</b></div> <!-- END .uk-float-left -->
          </div><!-- END .uk-clearfix -->
          <hr>
          <!-- START .uk-clearfix -->
          <div class="uk-clearfix">
            <!-- START .uk-float-right -->
            <div class="uk-float-right"><b>$ 10 </b></div> <!-- END .uk-float-right -->
            <!-- START .uk-float-left -->
            <div class="uk-float-left"><b>Product Title</b></div> <!-- END .uk-float-left -->
          </div><!-- END .uk-clearfix -->
          <hr>
          <!-- START .uk-clearfix -->
          <div class="uk-clearfix">
            <!-- START .uk-float-right -->
            <div class="uk-float-right"><b>$ 10 </b></div> <!-- END .uk-float-right -->
            <!-- START .uk-float-left -->
            <div class="uk-float-left"><b>Product Title</b></div> <!-- END .uk-float-left -->
          </div><!-- END .uk-clearfix -->
        </div><!-- card card_theme_white -->

        <!-- card card_theme_white -->
        <div class="card card_theme_white">

          <!-- START .uk-clearfix -->
          <div class="uk-clearfix">
            <!-- START .uk-float-right -->
            <div class="uk-float-right"><b>$ 30 </b></div> <!-- END .uk-float-right -->
            <!-- START .uk-float-left -->
            <div class="uk-float-left"><b>Total Price</b></div> <!-- END .uk-float-left -->
          </div><!-- END .uk-clearfix -->
        </div><!-- card card_theme_white -->


      </div> <!-- END div -->
    </div> <!-- END uk-grid -->
  </div> <!-- END .uk-container -->
</section> <!-- END section -->
<?php include 'layout/footer.php'; ?>
