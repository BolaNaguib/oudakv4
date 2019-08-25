@include('layout.header')

<section class="uk-section">
  <div class="uk-container uk-container-large">
    <img width="100%" src="{{ asset('storage/'.$page->image) }}" alt="">
    {{-- <h1>{{ $page->getTranslatedAttribute('title', app()->getLocale(), 'en') }}</h1> --}}
    <h1>{{ $page->title }}</h1>
    <hr>
    <div class="">
      {!! $page->body !!}
    </div>
  </div>
</section>



@include('layout.footer')
