@include('layout.header')
<div class="uk-section">
  <div class="uk-container uk-container-large">
    <div class="" uk-grid>
      <div class="uk-width-1-3@m uk-width-1-1">
        <h3> Kindly Insert Your Tracking Code  </h3>

      </div>
      <div class="uk-width-2-3@m uk-width-1-1">
        <form action="{{ route('tracker.store') }}" method="post">
          {{ csrf_field() }}

          <input class="input uk-width-expand" type="text" name="tracking_code" value="{{ $tracker->tracking_code }}">
        </form>
      </div>
    </div>

    <div class="" uk-grid>
      <div class="uk-width-1-1">
        @if ($tracker->status == 'delivered' )
          <span class="uk-label uk-label-success">{{ $tracker->status }}</span>
        @endif
      </div>
    </div>
  <hr>
{{-- START the tracking status --}}
@if ($tracker->tracking_details)
  @foreach ($tracker->tracking_details as $item)
    <div class="">
      <h3 class="uk-heading-bullet">{{ $item->message }}</h3>
      <span>{{ $item->status }}</span>
      {{-- <small class="uk-heading-line uk-text-right">{{ $item->datetime}}</small> --}}
      <br>
      <small >  @if ($item->tracking_location)
        @if ($item->tracking_location->city)
          {{ $item->tracking_location->city }} ,
        @endif
        @if ($item->tracking_location->state)
          {{ $item->tracking_location->state }} ,
        @endif
        @if ($item->tracking_location->country)
          {{ $item->tracking_location->country  }} .
        @endif
        @if ($item->tracking_location->zip)
            {{ $item->tracking_location->zip }} .
        @endif

        @endif</small>


    </div>
    <dl>
      {{-- {{ diffForHumans() }} --}}
        <dt></dt>


    </dl>
  <hr>
    @endforeach
@endif

{{-- {{ $tracker->tracking_details[0] }} --}}


  </div>


</div>
@include('layout.footer')
