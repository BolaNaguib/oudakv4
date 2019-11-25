@include('layout.header')

<section class="uk-section-xsmall">
  <div class="uk-container uk-container-large">
    <img width="100%" src="{{ asset('storage/'.$page->media) }}" alt="">
    <h1>{{ $page->name }}</h1>
    <hr>
    <div class="">
      {!! $page->content !!}
    </div>
  </div>
</section>



@include('layout.footer')
