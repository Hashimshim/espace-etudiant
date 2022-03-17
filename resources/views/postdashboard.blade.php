@extends('master')
@section('content')

<main>
    <div class="categories-area section-padding10">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        
                        <h2><a href="/creerpost"  class="genric-btn primary ">Créer un nouveau message</a></h2>
                        <span>Modifier les messages</span>
                    </div> 
                </div>
            </div>
            <div class="row">
                @foreach ( $posts as  $post)
                
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-web-design"></span>
                        </div>
                        <div class="cat-cap">
                            <h5>{{ $post->prenom }} {{ $post->nom }}</h5>
                            <h3>{{ $post->updated_at }} </h3>
                            <p>{{ $post->message }}</p>
                            
                                <a href="/modifierpost/{{ $post->id }}" class="genric-btn success circle">Modifier</a>
                                <a href="/deletepost/{{$post->id}}" class="genric-btn danger circle">Suprimer</a>
                            
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-education"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">App Development</a></h5>
                            <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                            <a href="#" class="read-more1">Read More &gt;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-communications"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Video Editing</a></h5>
                            <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                            <a href="#" class="read-more1">Read More &gt;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-computing"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Digital Marketing</a></h5>
                            <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                            <a href="#" class="read-more1">Read More &gt;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-tools-and-utensils"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Seo Marketing</a></h5>
                            <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                            <a href="#" class="read-more1">Read More &gt;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-business"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Content Writing</a></h5>
                            <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                            <a href="#" class="read-more1">Read More &gt;</a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- Section Button -->
            <div class="row">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</main>
@endsection