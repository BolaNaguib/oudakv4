{{ menu('main', 'partials.menus.main') }}
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
                        <li><a class="youtube" href="{{ setting('social.youtube') }}"><i class="fab fa-youtube"></i></a></li>
                        <li><a class="snapchat" href="{{ setting('social.snapchat') }}"><i class="fab fa-snapchat-square"></i></a></li>
                        <li><a class="instagram" href="{{ setting('social.instagram') }}"><i class="fab fa-instagram"></i></a></li>
                        <li><a class="facebook" href="{{ setting('social.facebook') }}"><i class="fab fa-facebook"></i></a></li>

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
{{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=299459306489-20losscfhtedjrv7cu2n4k7b196t3i69.apps.googleusercontent.com&callback=initMap" type="text/javascript"></script> --}}

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
                axios.patch(`cart/${id}`, {
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
$(document).scroll(function() {
  if ($('#mid')[0]) {
    var x = $(document).scrollTop()


  var mid = document.getElementById('mid');
  var mid_off = mid.offsetTop;
  // console.log(mid_off);
  // console.log(mid_off);
  // console.log(document.body.scrollTop);
  // console.log(document.documentElement.scrollTop);

    console.log("is = " + x);
     if (x > 1500 && x < 2000) {
       console.log("only show between 2000 and 2500 = " + x);

         // console.log(x);
         mid.classList.remove('mid-1');
         mid.classList.add('mid-2');
         mid.classList.remove('mid-3');
     }
     else if (x > 2000 || x < 2500) {
       console.log("only show between 2500 and 3000 = " + x);
       // console.log(x);
       mid.classList.remove('mid-1');
       mid.classList.remove('mid-2');
       mid.classList.add('mid-3');
     }
     else if (x > 3500 ) {
       console.log("only show between 2500 and 3000 = " + x);
       mid.classList.add('mid-1');
       mid.classList.remove('mid-2');
       mid.classList.remove('mid-3');
     }
  }

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
</body>

</html>
