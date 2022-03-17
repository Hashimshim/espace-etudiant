@extends('master')
@section('content')
<main>
    <!--? Hero Start -->
    {{-- <div class="slider-area">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Annonces</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="home-blog-area section-padding20">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-50">
                        <span></span>
                        <h2>Vos messages recents</h2>
                    </div>
                </div>
            </div> --}}
            <br>
                <br>
            <div class="row">
                
                {{-- Here the code for the messages notification  --}}
                <div class="animated bounce infinite">
                    <a href="/post">
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="width:500px;">
                    <div class="toast-header">
                      <img src="{{ asset('assets/img/favicon.ico') }}" class="rounded mr-2" alt="...">
                      <strong class="mr-auto" style="color:black;">{{ $post->nom}} {{ $post->prenom}}</strong>
                      <small class="text-muted">{{ $post->created_at }}</small>
                      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="toast-body" style="color:black;">
                      Nouveau message.. »
                    </div>
                </div>
                    </a>
                </div>
                  <div class="animated bounce infinite" >
                    <a href="/post">
                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="width:500px; margin-left:90px;">
                    <div class="toast-header">
                      <img src="{{ asset('assets/img/favicon.ico') }}" class="rounded mr-2" alt="...">
                      <strong class="mr-auto" style="color:black">{{ $profpost->nom}} {{$profpost->prenom}}</strong>
                      <small class="text-muted">{{ $profpost->created_at }}</small>
                      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="toast-body" style="color:black">
                        Nouveau message.. »
                    </div>
                    </div>
                    </a>
                    </div>
                  <br>
            {{-- <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/home-blog1.png" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>|   Properties</p>
                                <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                <a href="blog_details.html" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/home-blog2.png" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>|   Properties</p>
                                <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                <a href="blog_details.html" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <br>
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-50">
                        <span>Actualités</span>
                        <h2>Les annonces récentes de l'ENSAM</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ( $annonces as $annonce )
                <div class="col-xl-6 col-lg-6 col-md-6">                    
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="data:image/jpg;charset=utf8;base64,{{base64_encode($annonce->img)}}" alt="" height=" 400px">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>{{ $annonce->date }}</span>
                                </div>
                            </div>
                            <div class="blog-cap">
                                {{-- <p>| Properties</p> --}}
                                <h3><a href="/annonce/{{ $annonce->id_annonce }}">{{ $annonce->title }}</a></h3>
                                <a href="/annonce/{{ $annonce->id_annonce }}" class="more-btn">Voir plus »</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/home-blog1.png" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>|   Properties</p>
                                <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                <a href="blog_details.html" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/home-blog1.png" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>|   Properties</p>
                                <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                <a href="blog_details.html" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/home-blog2.png" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>|   Properties</p>
                                <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                <a href="blog_details.html" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{ $annonces -> links() }}
            <br>
           
    </div>
</main>
@endsection