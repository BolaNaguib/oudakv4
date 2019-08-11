@include('layout.header')
<section class="uk-section">
    <div class="uk-container uk-container-large">
        <div class="uk-grid">
            <div class="uk-width-1-4">
                <button class="uk-button uk-button-default uk-width-expand" type="button" name="button"> Profile </button>
            </div>
            <div class="uk-width-1-4">
                <button class="uk-button uk-button-default uk-width-expand" type="button" name="button"> Track My Order </button>
            </div>
            <div class="uk-width-1-4">
                <button class="uk-button uk-button-default uk-width-expand" type="button" name="button"> Redeem / Refund </button>
            </div>
            <div class="uk-width-1-4">
                <button class="uk-button uk-button-default uk-width-expand" type="button" name="button"> My Order </button>
            </div>

        </div>
        <hr>
        <form class="uk-form-horizontal" action="index.html" method="post">

            <div class="uk-grid">
                <div class="uk-width-1-2">
                    <div class="uk-text-center">
                        <h3> Your Oudak Detailes</h3>
                    </div>
                    <hr>
                    {{-- START uk-grid --}}
                    <div class="" uk-grid>
                        <!-- START .uk-width-1-1 -->
                        <div class="uk-width-1-1">
                            <!-- START .uk-margin -->
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Email Address : </label>
                                <!-- START .uk-form-controls -->
                                <div class="uk-form-controls">
                                    <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" required="" placeholder="Oudak@oudak.com" disabledx>
                                </div><!-- END .uk-form-controls -->
                            </div><!-- END .uk-margin -->
                        </div><!-- END uk-width-1-1 -->
                        <!-- START .uk-width-1-1 -->
                        <div class="uk-width-1-1">
                            <!-- START .uk-margin -->
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Password : </label>
                                <!-- START .uk-form-controls -->
                                <div class="uk-form-controls uk-position-relative">
                                    <input class="input uk-width-expand" id="accpw" name="password" type="password" required="" value="123qwe!@#QWE">
                                    <input type="checkbox" class="uk-checkbox" onclick="myFunction()" uk-tooltip="title: Show Pw" style=" position: absolute;
                                            top: 15px;
                                            right: 5px;
                                            border-radius: 5px;">

                                    <script type="text/javascript">
                                        function myFunction() {
                                            var x = document.getElementById("accpw");
                                            if (x.type === "password") {
                                                x.type = "text";
                                            } else {
                                                x.type = "password";
                                            }
                                        }
                                    </script>
                                </div><!-- END .uk-form-controls -->
                            </div><!-- END .uk-margin -->
                        </div><!-- END uk-width-1-1 -->
                    </div>{{-- END uk-grid --}}


                </div>
                <div class="uk-width-1-2">
                    <div class="uk-text-center">
                        <h3> Billing / Shipping Address</h3>
                        <hr>
                        {{-- START uk-grid --}}
                        <div class="" uk-grid>
                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-1">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">First Name : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" required="" placeholder="Jhon" disabledx>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->
                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-1">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">Last Name : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="lastname" type="text" required="" placeholder="Doe" disabledx>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->
                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-1">
                              <!-- START .uk-margin -->
                              <div class="uk-margin " id="locationField">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">Address : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="autocomplete" onFocus="geolocate()" name="address" type="text" required="" placeholder="243 naser st" disabledx>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->

                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-2">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">Zip Code : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" required="" placeholder="Jhon" disabledx>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->

                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-2">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">City : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" required="" placeholder="Jhon" disabledx>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->

                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-2">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">State : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" required="" placeholder="Jhon" disabledx>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->

                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-2">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">Country : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" required="" placeholder="Jhon" disabledx>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->

                          <!-- START .uk-width-1-1 -->
                          <div class="uk-width-1-1">
                              <!-- START .uk-margin -->
                              <div class="uk-margin">
                                  <label class="uk-form-label uk-text-left" for="form-stacked-text">Near Location : </label>
                                  <!-- START .uk-form-controls -->
                                  <div class="uk-form-controls">
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" required="" placeholder="Jhon" disabledx>
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->
                        </div>
                        {{-- END uk-grid --}}







                    </div>
                </div>

            </div>

            <div class="uk-grid">
                <div class="uk-width-1-2">
                    <hr>
                    <button class="uk-button uk-button-default uk-width-expand" type="button" name="button"> Save </button>

                </div>
                <div class="uk-width-1-2">
                    <hr>
                    <button class="uk-button uk-button-default uk-width-expand" type="button" name="button"> Edit </button>

                </div>

            </div>

        </form>




    </div>

</section>
@include('layout.footer')
