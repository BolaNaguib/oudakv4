@extends('layouts.app')

@section('content')
<!-- START section -->
<section class="uk-section">
  <div class="uk-container uk-container-large">
    <div class="uk-child-width-1-2" uk-grid>
      <div class="">
        <h3 class="">Login </h3>
        <span class="uk-margin">If you are an exsisting customer login</span>
        <hr>
        <form class="uk-form-horizontal" action="{{ route('login', app()->getLocale() ) }}" method="post">
          @csrf
          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Email</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="email" placeholder="Enter Your Email" name="email" required>
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Password </label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="password" placeholder="ENter Your Password" name="password" required>
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->
          <div class="uk-text-right">
            <button class="uk-button uk-button-secondary" type="submit"> Login </button>
            <button class="uk-button uk-button-default" type="button" onclick="window.location.href = '{{ route('password.request', app()->getLocale() ) }}';"> Forgot Your Password ? </button>

          </div>

          <div class="uk-text-center uk-margin">
            <button class="uk-button uk-button-default" type="button" onclick="window.location.href = '{{ route('socialite.redirect', 'facebook') }}';"> Login using Facebook </button>

            <button class="uk-button uk-button-default" type="button" onclick="window.location.href = '{{ route('socialite.redirect', 'google') }}';"> Login using Google </button>
          </div>

        </form>
      </div>

      <div class="">
        <h3 class="">Register </h3>
        <span class="uk-margin">If you are an New customer </span>
        <hr>
        <a class="uk-button uk-button-default" href="{{ route('register', app()->getLocale() ) }}"> Register </a>


      </div>
    </div>
  </div>
</section>
<!-- END section -->
@endsection
