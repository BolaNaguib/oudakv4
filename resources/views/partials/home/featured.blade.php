<!-- START section -->
<section class="uk-section">
    <div class="uk-container uk-container-large ">
        <!-- START uk-grid -->
        <div class="" uk-grid>
            <!-- START .uk-width-2-3 -->
            <div class="uk-width-2-3@m uk-width-1-1 ">
                @foreach ($products as $featuredproduct)
                @if ($featuredproduct->featured != null && $featuredproduct->featured != 0)
                <!-- START .uk-card -->
                <div class="uk-card uk-card-default uk-text-center uk-padding uk-margin-bottom">
                    <a href="{{ url('shop/'.$featuredproduct->slug) }}">
                        <h3>{{ $featuredproduct->title }} </h3>
                        <hr>
                        <img style="max-height: 400px;" src="{{ asset('storage/'.$featuredproduct->thumbnail) }}" alt="">
                        <div class="">
                            {!! $featuredproduct->main_description !!}
                            {{-- {{ $featuredproduct }} --}}
                        </div>
                    </a>
                </div>
                @endif
                @endforeach

                <!-- START -->
            </div>
            <div class="uk-width-1-3@m uk-width-1-1">
                <div id="modelx" class="uk-position-relative" style="min-height:700px;">
                    <div class="main-model-img mmi3">
                        <img src="https://oudak.com/storage/home-three-images/August2019/kE9ie8KQUAMYxW57e2nf.jpg" alt="">
                    </div>
                    <div class="main-model-img mmi2">
                        <img src="https://oudak.com/storage/home-three-images/August2019/LOFhgW5QZQi8pH4OpLl1.jpg" alt="">
                    </div>
                    <div class="main-model-img mmi1">
                        <img
                          src="data:image/jpeg;base64,PCFET0NUWVBFIGh0bWw+CjxodG1sPgogICAgPGhlYWQ+CiAgICAgICAgPG1ldGEgY2hhcnNldD0iVVRGLTgiIC8+CiAgICAgICAgPG1ldGEgaHR0cC1lcXVpdj0icmVmcmVzaCIgY29udGVudD0iMDt1cmw9aHR0cHM6Ly9vdWRhay5jb20vZW4vc3RvcmFnZS9ob21lLXRocmVlLWltYWdlcy9BdWd1c3QyMDE5L2xUd0NmS2plNks0bkNoakJCbzNILmpwZyIgLz4KCiAgICAgICAgPHRpdGxlPlJlZGlyZWN0aW5nIHRvIGh0dHBzOi8vb3VkYWsuY29tL2VuL3N0b3JhZ2UvaG9tZS10aHJlZS1pbWFnZXMvQXVndXN0MjAxOS9sVHdDZktqZTZLNG5DaGpCQm8zSC5qcGc8L3RpdGxlPgogICAgPC9oZWFkPgogICAgPGJvZHk+CiAgICAgICAgUmVkaXJlY3RpbmcgdG8gPGEgaHJlZj0iaHR0cHM6Ly9vdWRhay5jb20vZW4vc3RvcmFnZS9ob21lLXRocmVlLWltYWdlcy9BdWd1c3QyMDE5L2xUd0NmS2plNks0bkNoakJCbzNILmpwZyI+aHR0cHM6Ly9vdWRhay5jb20vZW4vc3RvcmFnZS9ob21lLXRocmVlLWltYWdlcy9BdWd1c3QyMDE5L2xUd0NmS2plNks0bkNoakJCbzNILmpwZzwvYT4uCiAgICA8L2JvZHk+CjwvaHRtbD4="
                          alt="">
                    </div>


                </div>
                {{-- <div id="mid" class="mid-1"></div> --}}

            </div>

        </div>



    </div>



</section>
<!-- END section -->
