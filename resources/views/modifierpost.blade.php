@extends('master')
@section('content')
<main>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!--? Hero Start -->
    {{-- <div class="slider-area">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Créer post</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="whole-wrap">
    <div class="container box_1170">
    <div class="section-top-border">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <h3 class="mb-30">Post-delégué</h3>
                <form action="/updatepost/{{ $post->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mt-10">
                        <input type="text" hidden value="{{ $post->id }}">
                        <input type="text" name="prenom" placeholder="First Name"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
                            class="single-input" value="{{ $post->prenom }}" readonly>
                    </div>
                    <div class="mt-10">
                        <input type="text" name="nom" placeholder="Last Name"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                            class="single-input" value="{{ $post->nom }}" readonly>
                    </div>
                    <div class="mt-10">
                    <textarea name="message"  rows="5" class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Message'" required >{{ $post->message }}</textarea>
                    </div>
                    <div class="button-group-area mt-40">
                        <button class="genric-btn primary circle">Submit</button>  
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title" style="color: #2d2d2d;">Services étudiants</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="/document" class="d-flex">
                                    <p>Demande de document</p>
                                </a>
                            </li>
                            <li>
                                <a href="/post" class="d-flex">
                                    <p>Derniers messages</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Bibliothèque</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Espace e-learning</p>
                                </a>
                            </li>
                            <li>
                                <a href="/annonce" class="d-flex">
                                    <p>Annonces</p>
                                </a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                        <div class="media post_item">
                            <img src="assets/img/post/post_1.png" alt="post">
                            <div class="media-body">
                                <a href="blog_details.html">
                                    <h3 style="color: #2d2d2d;">From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="assets/img/post/post_2.png" alt="post">
                            <div class="media-body">
                                <a href="blog_details.html">
                                    <h3 style="color: #2d2d2d;">The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="assets/img/post/post_3.png" alt="post">
                            <div class="media-body">
                                <a href="blog_details.html">
                                    <h3 style="color: #2d2d2d;">Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="assets/img/post/post_4.png" alt="post">
                            <div class="media-body">
                                <a href="blog_details.html">
                                    <h3 style="color: #2d2d2d;">Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection