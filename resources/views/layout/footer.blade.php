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
<script src="{{ asset('js/Luminous.min.js')}}"></script>
<script src="{{ asset('js/Drift.min.js')}}"></script>
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
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
(function() {
  const classname = document.querySelectorAll('.quantity');

  Array.from(classname).forEach(function(element){
    element.addEventListener('change', function(){
      console.log("changed");
      const id = element.getAttribute('data-id');
      console.log(id);
      axios.patch(`/oudakv3/public/cart/${id}`, {
    quantity: this.value
  })
  .then(function (response) {
    console.log(response);
    window.location.href = '{{ route('cart.index') }}'
  })
  .catch(function (error) {
    console.log(error);
  });
    })
  })
})();

</script>
</body>

</html>
