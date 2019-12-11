
    <section class="uk-section-xsmall ">

        <div class="uk-container uk-container-large">


            <div class="" uk-grid>

                @php
                  $isExist = 1
                @endphp

                @foreach ($products as $product)

                @if ($product->category == $productcategory->id )

                {{-- To Eliminate Duplicated entry --}}
                  @if ($productcategory->Productone == null)
                      @php
                        $productone_id = 0;
                      @endphp
                    @else
                      @php
                        $productone_id = $productcategory->Productone->id;
                      @endphp
                  @endif
                  @if ($productcategory->Productonex == null)
                      @php
                        $productonex_id = 0;
                      @endphp
                    @else
                      @php
                        $productonex_id = $productcategory->Productonex->id;
                      @endphp
                  @endif
                  @if ($productcategory->Producttwo == null)
                      @php
                        $producttwo_id = 0;
                      @endphp
                    @else
                      @php
                        $producttwo_id = $productcategory->Producttwo->id;
                      @endphp
                  @endif
                  @if ($productcategory->Producttwox == null)
                      @php
                        $producttwox_id = 0;
                      @endphp
                    @else
                      @php
                        $producttwox_id = $productcategory->Producttwox->id;
                      @endphp
                  @endif
                  @if ($product->id != $productone_id &&
                       $product->id != $productonex_id &&
                        $product->id != $producttwo_id &&
                        $product->id != $producttwox_id
                        )

                        @if ($isExist == 1)
                          <div class="uk-text-right uk-width-1-1">
                            <div class="uk-hidden">
                              {{ $isExist++ }}
                            </div>
                            <div class="showicons">


                                    <button  class="gridoptioniconv" type="button" name="gridoptioniconv">
                                      <i class="fas fa-square"></i>
                                    </button>
                                    <button class="gridoptionicon" type="button" name="gridoptionicon">
                                      <i class="fas fa-square"></i>
                                      <i class="fas fa-square"></i>

                                    </button>

                            </div>
                            <hr>
                    </div>
                    {{-- @php
                      $isExist++
                    @endphp --}}

                  @elseif ($isExist != 1)
                    {{-- no --}}
                    @endif





                    <!-- START div -->
                    <div class="gridoption uk-margin-bottom uk-width-1-4@m uk-width-1-2">
                        <!-- START .card -->
                        <div class="card card_theme_white uk-text-center uk-position-relative uk-transition-toggle uk-zindex" tabindex="0">
                          @if (Auth::user() != null)
                            @if ($product->wishlist->isEmpty())
                              <div class="uk-transition-fade uk-position-small uk-position-top-right xxx">
                                <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
                                    {{csrf_field()}}
                                    <input class="uk-hidden" name="user_id" type="text" value="{{Auth::user()->id}}" />
                                    <input class="uk-hidden" name="product_id" type="text" value="{{$product->id}}" />
                                    <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                                  </form>
                                  <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                              </div>
                            @else
                              <div class="uk-position-small uk-position-top-right">
                                <form action="{{route('wishlist.destroy', $product->wishlist[0]->id)}}" id="contact_form" method="post">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                    <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart_red"><span><i class="fas fa-heart"></i></span></button>
                                  </form>                                  <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                              </div>
                            @endif
                          @else
                            <div class="uk-transition-fade uk-position-small uk-position-top-right ">
                                  <button type="submit" class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_heart"><span><i class="far fa-heart"></i></span></button>
                                  <button class="uk-button uk-button-default uk-display-block uk-margin-small-bottom icon_type_social"><span uk-icon="social"></span></button>
                            </div>
                          @endif
                            <a href="/shop/{{ $product->slug }}">
                                <img src="{{ asset('storage/'.$product->thumbnail) }}" alt="" style="max-height:250px;">
                                <h3 class="">{{ $product->title }}</h3>
                            </a>

                            <button class="uk-button uk-button-secondary">${{ $product->price }}</button>
                        </div><!-- END .card -->
                    </div><!-- END div -->
                  {{-- @endif --}}

                @endif



                @endif
                @endforeach

            </div><!-- END uk-grid -->
        </div><!-- END uk-container -->
    </section><!-- END section -->
