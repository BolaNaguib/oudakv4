@extends('layouts.app')

@section('content')
<!-- START section -->
<section class="uk-section">
  <div class="uk-container uk-container-large">
    <div class="uk-child-width-1-2" uk-grid>


      <div class="">
        <h3 class="">Register </h3>
        <span class="uk-margin">If you are an New customer </span>
        <hr>
        <form class="uk-form-horizontal" action="{{ route('register', app()->getLocale() ) }}" method="post">
          @csrf
          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Name</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input @if($errors->has('name')) error @endif uk-width-expand" id="form-stacked-text" type="text" placeholder="Name" name="name" value="{{ old('name') }}">
              @if($errors->has('name'))
              <small class="uk-text-danger uk-text-small">{{ $errors->first('name') }}</small>
              @endif
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Email Address</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input @if($errors->has('email')) error @endif uk-width-expand" id="form-stacked-text" type="email" placeholder="bola@naguib.com" name="email" value="{{ old('email') }}">
              @if($errors->has('email'))
              <small class="uk-text-danger uk-text-small">{{ $errors->first('email') }}</small>
              @endif
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Password</label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input @if($errors->has('password')) error @endif uk-width-expand" id="form-stacked-text" type="password" placeholder="Enter A password " name="password">
              @if($errors->has('password'))
              <small class="uk-text-danger uk-text-small">{{ $errors->first('password') }}</small>
              @endif
            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->

          <!-- START .uk-margin -->
          <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Repeat Password </label>
            <!-- START .uk-form-controls -->
            <div class="uk-form-controls">
              <input class="input uk-width-expand" id="form-stacked-text" type="password" placeholder="Re-enter your password " name="password_confirmation">

            </div><!-- END .uk-form-controls -->
          </div><!-- END .uk-margin -->
          <div class="uk-text-right">
            <button class="uk-button uk-button-secondary" type="submit" name="button"> Register </button>

          </div>

          <div class="uk-text-center uk-margin">
            <button class="uk-button uk-button-default" type="button" onclick="window.location.href = '{{ route('socialite.redirect', 'facebook') }}';"> Register using Facebook </button>

            <button class="uk-button uk-button-default" type="button" onclick="window.location.href = '{{ route('socialite.redirect', 'google') }}';"> Register using Google </button>
          </div>

        </form>
      </div>
      <div class="">
        <h3 class="">Already Have an Account ? </h3>
        <span class="uk-margin">If you are an exsisting customer login</span>
        <hr>

        <a class="uk-button uk-button-default" href="{{ route('login', app()->getLocale() ) }}"> Login </a>

      </div>
    </div>
  </div>
</section>
<!-- END section -->

@endsection
