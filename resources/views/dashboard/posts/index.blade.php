@extends('layouts.dashboardapp')
@section('content')
<h1>Property Post</h1>
    @if(count($posts)>0)
    
        @foreach ($posts as $post)
        <section class="property-grid grid">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-box-a card-shadow">
                    <div class="img-box-a">
                      <img src="assets/img/property-1.jpg" alt="" class="img-a img-fluid">
                    </div>
                    <div class="card-overlay">
                      <div class="card-overlay-a-content">
                        <div class="card-header-a">
                          <h2 class="card-title-a">
                            <a href="#">{{ $post->title }}
                              <br /> {{ $post->address }}</a>
                          </h2>
                        </div>
                        <div class="card-body-a">
                          <div class="price-box d-flex">
                            <span class="price-a">rent | $ {{ $post->price }}</span>
                          </div>
                          <a href="/posts/{{ $post->id }}" class="link-a">Click here to view
                            <span class="ion-ios-arrow-forward"></span>
                          </a>
                        </div>
                        <div class="card-footer-a">
                          <ul class="card-info d-flex justify-content-around">
                            <li>
                              <h4 class="card-info-title">Area</h4>
                              <span>{{ $post->area }}m
                                <sup>2</sup>
                              </span>
                            </li>

                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        @endforeach
   
        {{$posts->links()}}
    @else
    <p>No posts Found</p>
    @endif
@endsection