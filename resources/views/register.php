<?php include 'layout/header.php'; ?>

<!-- START section -->
<section class="uk-section">
  <div class="uk-container uk-container-large">
    <div class="uk-child-width-1-2" uk-grid>


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
      <div class="">
        <h3 class="">Already Have an Account ? </h3>
        <span class="uk-margin">If you are an exsisting customer login</span>
        <hr>

        <a class="uk-button uk-button-default" href="#"> Login </a>

      </div>
    </div>
  </div>
</section>
<!-- END section -->


<?php include 'layout/footer.php'; ?>
