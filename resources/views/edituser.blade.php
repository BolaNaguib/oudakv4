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
        <form class="uk-form-horizontal" action="{{ route('updateuserinfo' ,['id'=>$userdata->id]) }}" method="post">
          @csrf

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
                                    <input class="input uk-width-expand" id="form-stacked-text" name="email" type="text"  value="{{ Auth::user()->email }}" readonly="">

                                </div><!-- END .uk-form-controls -->
                            </div><!-- END .uk-margin -->
                        </div><!-- END uk-width-1-1 -->
                        <!-- START .uk-width-1-1 -->
                        <div class="uk-width-1-1">
                            <!-- START .uk-margin -->
                         
                        </div><!-- END uk-width-1-1 -->
                        <!-- <div class="uk-width-1-1" >   Your mail is not verified yet plz <a href="#here the link of verification sent to mail"> Verify it </a></div> -->

                     
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
                                      <input class="input uk-width-expand" id="form-stacked-text" name="firstname" type="text" required="" name="firstname" value="{{$userdata->firstname}}">
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
                                      <input class="input uk-width-expand" id="form-stacked-text" name="lastname" type="text" required="" value="{{$userdata->lastname}}">
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
                                      <input class="input uk-width-expand" id="autocomplete"  name="address" type="text" required="" value="{{$userdata->address}}">
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
                                      <input class="input uk-width-expand" id="form-stacked-text" name="zipcode" type="text" required="" value="{{$userdata->zipcode}}">
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
                                      <input class="input uk-width-expand" id="form-stacked-text" name="city" type="text" required="" value="{{$userdata->city}}">
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
                                      <input class="input uk-width-expand" id="form-stacked-text" name="state" type="text" required="" value="{{$userdata->state}}">
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
                                      <input class="input uk-width-expand" id="form-stacked-text" name="country" type="text" required="" value="{{$userdata->country}}">
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
                                      <input class="input uk-width-expand" id="form-stacked-text" name="nearlocation" type="text" required="" value="{{$userdata->nearlocation}}">
                                  </div><!-- END .uk-form-controls -->
                              </div><!-- END .uk-margin -->
                          </div><!-- END uk-width-1-1 -->
                        </div>
                        {{-- END uk-grid --}}







                    </div>
                </div>

            </div>

            <div class="uk-grid">
                <!-- <div class="uk-width-1-2">
                    <hr>
                    <button class="uk-button uk-button-default uk-width-expand" type="button" name="button"> Save </button>

                </div> -->
                <div class="uk-width-1">
                    <hr>
                    <!-- <button class="uk-button uk-button-default uk-width-expand" type="submit" name="button"> Update </button> -->
                    <button class="uk-button uk-button-default uk-width-expand" type="submit" name="button">UPDATE</button>
                </div>
            </div>

        </form>




    </div>

</section>
@include('layout.footer')
