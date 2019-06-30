@include('layout.header')
<!-- START section -->
<section class="uk-section">
  <!-- START .uk-container -->
  <div class="uk-container uk-container-large">
    <h3 class="">Contact Us</h3>
    <span class="uk-margin">Oudak is here to give you the best customer service experience</span>
    <hr>
    <!-- START form -->
    <form class="uk-form-horizontal " action="index.html" method="post">
      <!-- START uk-grid -->
      <div class="" uk-grid>
        <!-- START .uk-width-1-2 -->
        <div class="uk-width-1-2">
          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">First Name </label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="text" placeholder="First Name">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->
        </div><!-- END uk-width-1-2 -->

        <!-- START .uk-width-1-2 -->
        <div class="uk-width-1-2">
          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Last Name </label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="text" placeholder="Last Name">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->
        </div><!-- END uk-width-1-2 -->


        <!-- START .uk-width-1-2 -->
        <div class="uk-width-1-2">
          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Email Address </label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="text" placeholder="Email Address">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->
        </div><!-- END uk-width-1-2 -->

        <!-- START .uk-width-1-2 -->
        <div class="uk-width-1-2">
          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text"> Phone </label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="text" placeholder="Phone ">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->
        </div><!-- END uk-width-1-2 -->


        <!-- START .uk-width-1-2 -->
        <div class="uk-width-1-1">
          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Subject </label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="text" placeholder="Subject">
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->
        </div><!-- END uk-width-1-2 -->

        <!-- START .uk-width-1-2 -->
        <div class="uk-width-1-1">
          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text"> Message </label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <textarea class="input uk-width-expand" id="form-stacked-text" name="name" rows="8" cols="80"></textarea>
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->
        </div><!-- END uk-width-1-2 -->

<!-- START .uk-width-1-2 -->
<div class="uk-width-1-2">
  <div class="">
    <input class=" uk-checkbox" type="checkbox" name="" value=""> <label for=""><small>I have been able to read and understant <a href="#">Privacy policy</a>  . </small></label>
    <br>
    <input class=" uk-checkbox" type="checkbox" name="" value=""> <label for=""><small>I want to subscribe to the news letter .</small></label>

       </div>
</div><!-- END .uk-width-1-2 -->

<!-- START .uk-width-1-2 -->
<div class="uk-width-1-2">
  <div class="uk-text-right">
    <button class="uk-button uk-button-secondary uk-width-expand" type="button" name="button"> Submit </button>

  </div>

</div><!-- END .uk-width-1-2 -->

      </div><!-- END uk-grid -->
    </form><!-- END form -->

  </div><!-- END .uk-container -->
</section><!-- END section -->
@include('layout.footer')
