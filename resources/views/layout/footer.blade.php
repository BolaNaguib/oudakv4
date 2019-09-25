{{ menu('main', 'partials.menus.main') }}
<style media="screen">
  .section_theme_offwhite{
        background-color: #eeeeee61;
  }
</style>
<!-- START section -->
<section class="uk-section section_theme_gray">

    <!-- START .uk-container -->
    <div class="uk-container uk-container-large uk-position-relative">
        <a href="#" style="    position: fixed;
    bottom: 10px;
    background-color: #fff;
    right: 10px;
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
                        <a href="{{ route('index') }}/legal-terms">Return and Exchange</a>
                    </li>
                    <li>
                        <a href="{{ route('index') }}/privacy">FAQ</a>
                    </li>
                    <li>
                        <a href="#">NewsLetter</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- END div -->

            <!-- START div -->
            <div class="">
                <div class="uk-text-center">
                    <h4>Join Our NewsLetter</h4>
                    <hr>
                    <form action="{{ route('newsletter.subscribe') }}" method="POST" id="newsletterSubscribeForm">
                        @csrf
                        <div class="uk-inline">
                            <button class="uk-form-icon uk-form-icon-flip button_type_newsletter" uk-icon="icon: arrow-right"></button>
                            <input class="uk-input input_type_newsletter uk-width-medium" type="email" placeholder="mail@oudak.com" name="email" value="{{ old('email') }}" required>
                        </div>
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
                        <li><a class="facebook" href="{{ setting('social.facebook') }}"><i class="fab fa-facebook"></i></a></li>
                        <li><a class="instagram" href="{{ setting('social.instagram') }}"><i class="fab fa-instagram"></i></a></li>
                        <li><a class="youtube" href="{{ setting('social.youtube') }}"><i class="fab fa-youtube"></i></a></li>
                        <li><a class="snapchat" href="{{ setting('social.snapchat') }}"><i class="fab fa-snapchat-square"></i></a></li>
                        <li><a class="twitter" href="{{ setting('social.snapchat') }}"><i class="fab fa-twitter-square"></i></a></li>



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
        <div class="uk-child-width-1-2@m uk-child-width-1-1" uk-grid>
            <!-- START .uk-text-left@m -->
            <div class="uk-text-left@m uk-text-center uk-text-small">
                Copyright © Oudak - All rights reserved 2019
            </div>
            <!-- END .uk-text-left@m -->
            <!-- START .uk-text-right@m -->
            {{-- <div class="uk-text-right@m uk-text-center uk-text-small">
                Made with <i style="color:red" class="fas fa-heart"></i> By <a style="color:red !important;" target="_blank" href="https://xvxlabs.com"> xvxlabs.com</a>
            </div> --}}
            <!-- END .uk-text-right@m -->
        </div>
        <!-- END uk-grid -->
    </div>

</section>

<section id="toggle-usage" class="bottom_cookie" style="background-color:#eee; padding:10px 0px;">
    <div class="uk-container uk-container-large">
        <div class="uk-grid uk-flex uk-flex-middle">
            <div class="uk-width-expand@m uk-width-1-1">
              <small class="uk-visible@m" style="font-size:12px;">{{ setting('cookies.cookies_policy') }}</small>
              <small class="uk-hidden@m"style="font-size:8px;">{{ setting('cookies.cookies_policy') }}</small>
                <hr style="border-color:#eee;" class="uk-hidden@m">
            </div>
            <div class="uk-width-auto@m uk-width-1-1 uk-text-center">
                <button id="CookiesAccepted" style="font-size:8px;" class="uk-button uk-button-secondary" type="button" uk-toggle="target: #toggle-usage">Accept Cookies</button>
            </div>
        </div>

    </div>
</section>







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
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>


<script src="{{ asset('js/Luminous.min.js')}}"></script>
<script src="{{ asset('js/Drift.min.js')}}"></script>
<script type="text/javascript">
if ($('#productzoom').length) {
  console.log("magnify is working");
  var demoTrigger = document.querySelector('.demo-trigger');
  console.log(demoTrigger);
  new Drift(demoTrigger, {
      paneContainer: document.querySelector('.detail'),
      inlinePane: 900,
      inlineOffsetY: -85,
      containInline: true,
      sourceAttribute: 'href'
  });

  new Luminous(demoTrigger);
}

</script>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    (function() {
        const classname = document.querySelectorAll('.quantity');

        Array.from(classname).forEach(function(element) {
            element.addEventListener('change', function() {
                console.log("changed");
                const id = element.getAttribute('data-id');
                console.log(id);
                axios.patch(`bag/${id}`, {
                        quantity: this.value
                    })
                    .then(function(response) {
                        console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            })
        })
    })();
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

<script>
    function highlightErrors(errors) {
        Object.keys(errors).forEach(name => this.find(`[name=${name}]`).addClass('uk-form-danger'));
    }

    dynamicSubmit = function(selector, handle) {

        $(document).on('submit', selector, function(e) {
            e.preventDefault();

            $(this).find(':input').removeClass('uk-form-danger');

            const $submits = $(this).find('input[type=button], button:not([type=button])');
            $submits.attr('disabled', true);

            $(this).ajaxSubmit({
                success: response => {
                    if (handle instanceof Function) handle.call($(this), response);


                },
                error: jqXHR => {
                    const errors = jqXHR.responseJSON.errors;
                    if (errors) highlightErrors.call($(this), errors);
                },
                complete: () => $submits.attr('disabled', false)
            });
        });
    }

    $(() => {
        dynamicSubmit('#newsletterSubscribeForm', function(response) {
            alert(response.message);
        })
    })
</script>


<script type="text/javascript">
    if ($('#card-element').length) {
        console.log(" IS this working ?");
        console.log(" is it really ?");
        // Create a Stripe client.
        var stripe = Stripe('pk_test_7EMLE7RbJozF3FjHH9malYVO007G8mJ70q');

        // Create an instance of Elements.
        var elements = stripe.elements();
        console.log(elements);

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {
            style: style,
            hidePostalCode: true
        });

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
          // Disable the submit button yo prevent repeated clicks
        document.getElementById('complete-order').disabled = true;
            var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('autocomplete').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('state').value,
                address_zip: document.getElementById('zipcode').value,

            }
            console.log(options);

            stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;

                    // Enable the submit button
                    document.getElementById('complete-order').disabled = false;

                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // e.preventDefault();
            // Submit the form
            form.submit();
        }
    }
</script>

<script type="text/javascript">
// $(".newpricebutton").attr('checked', function(){
//
// })


  $(".newpricebutton").on( "click", function() {
    $("#newprice").text($( this ).attr('value') );
  console.log( $( this ).attr('value') );
});
</script>

<script type="text/javascript">
$(window).on("load", function(){
  $('.preloader').fadeOut('slow');
  console.log("Page Loaded");
})

</script>
<script>

// console.log("??????????????????????????");
// $(window).on('scroll' ,function() {
//   console.log("TEST");
//   if ($(this).scrollTop() > 0) {
//     $('.a').fadeOut();
//   } else {
//     $('.a').fadeIn();
//   }
// });

$(document).scroll(function() {
  // console.log("HELLO");
  if ($('#modelx')[0]) {
    var x = $(document).scrollTop()


  var mid = document.getElementById('modelx');
  var mid_off = mid.offsetTop;
  var y = $(document).scrollTop()-mid_off+200;
  // console.log("mid_off" +mid_off);
  console.log(" y = " +y);
  if (y < 0) {
    $('.mmi1').show();
    $('.mmi2').hide();
    $('.mmi3').hide();
  }
if (y >= 25) {
  $('.mmi1').hide();
  $('.mmi2').show();
  $('.mmi3').hide();
}
if ( y >= 75) {
  $('.mmi1').hide();
  $('.mmi2').hide();
  $('.mmi3').show();
}

};
  // console.log(mid_off);
  // console.log(mid_off);
  // console.log(document.body.scrollTop);
  // console.log(document.documentElement.scrollTop);

    // // console.log("is = " + x);
    //  if (x > 1500 && x < 2000) {
    //    console.log("only show between 2000 and 2500 = " + x);
    //
    //      // console.log(x);
    //      // mid.classList.remove('mid-1');
    //      // mid.classList.add('mid-2');
    //      // mid.classList.remove('mid-3');
    //  }
    //  else if (x > 2000 || x < 2500) {
    //    console.log("only show between 2500 and 3000 = " + x);
    //    // console.log(x);
    //    // mid.classList.remove('mid-1');
    //    // mid.classList.remove('mid-2');
    //    // mid.classList.add('mid-3');
    //  }
    //  else if (x > 3500 ) {
    //    console.log("only show between 2500 and 3000 = " + x);
    //    // mid.classList.add('mid-1');
    //    // mid.classList.remove('mid-2');
    //    // mid.classList.remove('mid-3');
    //  }


});
</script>
<script type="text/javascript">

$('#CookiesAccepted').on('click', function(){

  Cookies.set('CookiesAccepted', 'yes');

  console.log("Cookies Accepted");
});
$('#PromoAccepted').on('click', function(){

  Cookies.set('PromoAccepted', 'yes');

  console.log("closed Promo code ");
});




</script>
<script type="text/javascript">
  // cookies conditions
  if (Cookies.getJSON().CookiesAccepted == "yes" ) {
    $('.bottom_cookie').hide();
    console.log("Cookies Accepted For This session");
  }
  if (Cookies.getJSON().PromoAccepted == "yes" ) {
    $('.top_promo').hide();
    console.log("Promo Closed For This session");
  }
</script>
<script type="application/javascript" src="https://sdk.truepush.com/sdk/v2/app.js"></script>
<script>
var truepush = window.truepush || [];
truepush.push(function(){
    truepush.Init({
        id: "5d64844d0f8aa6713b40dda5"
        },
        function(error){
          if(error) console.log(error);
        })
    })
</script>


{{-- <div id="locationField">
      <input id="autocomplete"
             placeholder="Enter your address"
             onFocus="geolocate()"
             type="text"/>
    </div> --}}

    <!-- Note: The address components in this sample are typical. You might need to adjust them for
               the locations relevant to your app. For more information, see
         https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
    -->

    {{-- <table id="address">
      <tr>
        <td class="label">Street address</td>
        <td class="slimField"><input class="field" id="street_number" disabled="true"/></td>
        <td class="wideField" colspan="2"><input class="field" id="route" disabled="true"/></td>
      </tr>
      <tr>
        <td class="label">City</td>
        <td class="wideField" colspan="3"><input class="field" id="locality" disabled="true"/></td>
      </tr>
      <tr>
        <td class="label">State</td>
        <td class="slimField"><input class="field" id="administrative_area_level_1" disabled="true"/></td>
        <td class="label">Zip code</td>
        <td class="wideField"><input class="field" id="postal_code" disabled="true"/></td>
      </tr>
      <tr>
        <td class="label">Country</td>
        <td class="wideField" colspan="3"><input class="field" id="country" disabled="true"/></td>
      </tr>
    </table> --}}

    <script>
// This sample uses the Autocomplete widget to help the user select a
// place, then it retrieves the address components associated with that
// place, and then it populates the form fields with those details.
// This sample requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script
// src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

var placeSearch, autocomplete;

var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initAutocomplete() {
  // Create the autocomplete object, restricting the search predictions to
  // geographical location types.
  autocomplete = new google.maps.places.Autocomplete(
      document.getElementById('autocomplete'), {types: ['geocode']});
  console.log(autocomplete);
  // Avoid paying for data that you don't need by restricting the set of
  // place fields that are returned to just the address components.
  autocomplete.setFields(['address_component']);

  // When the user selects an address from the drop-down, populate the
  // address fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();
  console.log(place);

  for (var component in componentForm) {
    // document.getElementById(component).value = '';
    // document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details,
  // and then fill-in the corresponding field on the form.
  if (typeof place.address_components !== 'undefined') {
    for (var i = 0; i < place.address_components.length; i++) {
      var addressType = place.address_components[i].types[0];
      if (componentForm[addressType]) {
        var val = place.address_components[i][componentForm[addressType]];
        console.log(val +" = "+ addressType);
        document.getElementById(addressType).value = val;
        // $('.'+addressType).value = val;
        // console.log($('.'+addressType).value + '===' + val);
      }
    }
  }


}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle(
          {center: geolocation, radius: position.coords.accuracy});
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
// $('#postal_code').on('change',function(){
//     $('.postal_code').val = $('#postal_code').val ;
//     console.log("Changed");
//
// });

$("#postal_code").on("change paste keyup", function() {
   alert($(this).val());
   $('.postal_code').val = $(this).val ;
   console.log("added");

});
    </script>



<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvPkBdWsK81JT4HptA_EZUSP6O9XfyZMs&libraries=places&callback=initAutocomplete" type="text/javascript"></script>

{{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvPkBdWsK81JT4HptA_EZUSP6O9XfyZMs&callback=initMap" type="text/javascript"></script> --}}
</body>

</html>
