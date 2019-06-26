<?php include 'layout/header.php'; ?>

<!-- START section -->
<section class="uk-section">
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
        <a class="uk-button uk-button-default" href="#"> Register </a>

        
      </div>
    </div>
  </div>
</section>
<!-- END section -->


<?php include 'layout/footer.php'; ?>
