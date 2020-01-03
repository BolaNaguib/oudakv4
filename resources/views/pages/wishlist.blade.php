@extends('layouts.app')
@section('content')

  <div class="uk-section-xsmall">
    <div class="uk-container uk-container-large">
      @if (session()->has('success_message'))
      <div class="uk-alert-success" uk-alert>
      <a class="uk-alert-close" uk-close></a>
  <p>{{ session()->get('success_message') }}</p>
  </div>

      @endif
      @if(count($errors) > 0)
      @foreach($errors->all() as $error)
      {{ $error }}
      @endforeach
      @endif

      @if (Auth::user() != null)
        @include('pages.wishlist.user')          
      @else
      @include('pages.wishlist.guest')          
      @endif
      
     

    </div>
  </div>


@endsection
