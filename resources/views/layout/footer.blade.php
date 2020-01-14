{{ menu('main', 'partials.menus.main') }}
{{-- @foreach ($cookies as $cookie )
  @if ($cookie->ip = $clientip)
    works

  @endif
@endforeach --}}

<style media="screen">
  .section_theme_offwhite{
        background-color: #eeeeee61;
  }
</style>
<!-- START section -->
<section class="uk-section-xsmall section_theme_gray">

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
              <hr class="uk-hidden">
                <h4 class="">Extra</h4>
                <hr class="uk-visible@m">
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
                  <hr class="uk-hidden@m">
                    <h4>Join Our NewsLetter</h4>
                    <hr class="uk-visible@m">
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
                  <hr class="uk-hidden@m">
                    <h4>Follow Us</h4>
                    <hr class="uk-visible@m">                    <ul class="uk-iconnav sociallinks uk-flex uk-flex-center">
                        <li><a class="facebook" href="{{ setting('social.facebook') }}"><i class="fab fa-facebook"></i></a></li>
                        <li><a class="instagram" href="{{ setting('social.instagram') }}"><i class="fab fa-instagram"></i></a></li>
                        <li><a class="youtube" href="{{ setting('social.youtube') }}"><i class="fab fa-youtube"></i></a></li>
                        <li><a class="snapchat" href="{{ setting('social.snapchat') }}"><i class="fab fa-snapchat-square"></i></a></li>
                        <li><a class="twitter" href="{{ setting('social.twitter') }}"><i class="fab fa-twitter-square"></i></a></li>



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

<section id="toggle-usage" class="bottom_cookie" style="background-color:#eee; padding:10px 0px;">
    <div class="uk-container uk-container-large">
        <div class="uk-grid uk-flex uk-flex-middle">
            <div class="uk-width-expand@m uk-width-1-1">
              <small class="uk-visible@m" style="font-size:12px;">{{ setting('cookies.cookies_policy') }}</small>
              <small class="uk-hidden@m"style="font-size:8px;">{{ setting('cookies.cookies_policy') }}</small>
                <hr style="border-color:#eee;" class="uk-hidden@m">
            </div>
            <div class="uk-width-auto@m uk-width-1-1 uk-text-center">
              <form class="" action="{{ route('cookie.store') }}" method="post">
                @csrf

                <button id="CookiesAccepted" style="font-size:8px;" class="uk-button uk-button-secondary" type="submit">Accept Cookies</button>
              </form>
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
    .showicons{
      display: inline-block;
      background-color: #fcfcfc;
      padding: 5px 10px;
      border: 1px solid #eee;
      font-size: 13px;
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


<script type="text/javascript">
   $('.newgiftbutton').on('click', function(){
    let giftname = $(this).next('div').children('p').text();
    $('.giftname').attr('value',giftname)
    console.log(giftname);
  });
</script>
<script>

var ua = navigator.userAgent.toLowerCase(); 
if (ua.indexOf('safari') != -1) { 
  if (ua.indexOf('chrome') > -1) {
    console.log("chrome");
  } else {
    console.log("safari");

  }
}
</script>


<script>

$(function () {//doc ready
    $.cookie.json = true; //Turn on automatic storage of JSON objects passed as the cookie value. Assumes JSON.stringify and JSON.parse:
    $('.add-basket').click(function() {
        var basket = $.cookie("basket") || []; //if not defined use an empty array
        var $this = $(this);

        basket.push({
            'number': $this.attr('number'),
            'type': $this.attr('product')
        });
        console.log(basket);
        $.cookie("basket", basket);
    });
});
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvPkBdWsK81JT4HptA_EZUSP6O9XfyZMs&libraries=places&callback=initAutocomplete" type="text/javascript"></script>
<script src="https://vjs.zencdn.net/7.5.5/video.js"></script>

{{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvPkBdWsK81JT4HptA_EZUSP6O9XfyZMs&callback=initMap" type="text/javascript"></script> --}}
