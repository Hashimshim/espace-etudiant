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
                            <h2>Annonce detail</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <section class="blog_area single-post-area section-padding">
        <div class="container">
           <div class="row">   

              <div class="col-lg-8 posts-list">
                <div class="slider-height2 d-flex align-items-center" style="min-height:100px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hero-cap hero-cap2 text-center">
                                    <h2><b><i style="color:white;">Messages du délégué</i></b></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                {{-- <h1 class="text-heading"><b><i><u>Messages du délegué :</u></i></b></h1> --}}
                @foreach ( $posts as $post )
                <div class="container box_1170">
                    
                    <h3 class="text-heading">{{ $post->nom }} {{ $post->prenom }} </h3>
                    <h3 class="text-heading">{{ $post->updated_at }}</h3>
                    <p class="sample-text">
                        {{$post->message}}
                        {{-- <a href="#" style="color:rgb(41, 0, 41);text-decoration:underline;">Download the document here</a> --}}
        
                    </p>
                </div>
                <br>
                <hr style="border-top:2px solid #4c415c;"/>
                @endforeach
                {{ $posts->links() }}
                <br>
                {{-- <div class="container box_1170">
                    <h3 class="text-heading">Teacher </h3> 
                    <h3 class="text-heading">{{ date('d-m-Y H:i') }}</h3>
                    <p class="sample-text">
                        
                        Every avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary,
                        or short
                        film to show off their creative prowess. Many have great ideas and want to “wow”
                        the<sup>Superscript</sup> scene,
                        or video renters with their big project. But once you have the<sub>Subscript</sub> “in the can” (no easy
                        feat), how
                        do you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked
                        hand-written title
                        inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC
                        barcodes
                        and polywrap sitting on your doorstep? You need to create eye-popping artwork and have your project
                        replicated.
                        Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is
                        certainly a
                        helpful option to ensure a professional end result, but to help with your DVD replication project, here
                        are 4 easy
                        steps to follow for good DVD replication results:
        
                    </p>
                </div>
                <br>
                <div class="container box_1170">
                    <h3 class="text-heading">Text Sample </h3>
                    <h3 class="text-heading">{{ date('d-m-Y H:i') }}</h3>
                    <p class="sample-text">
                        Every avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary,
                        or short
                        film to show off their creative prowess. Many have great ideas and want to “wow”
                        the<sup>Superscript</sup> scene,
                        or video renters with their big project. But once you have the<sub>Subscript</sub> “in the can” (no easy
                        feat), how
                        do you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked
                        hand-written title
                        inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC
                        barcodes
                        and polywrap sitting on your doorstep? You need to create eye-popping artwork and have your project
                        replicated.
                        Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is
                        certainly a
                        helpful option to ensure a professional end result, but to help with your DVD replication project, here
                        are 4 easy
                        steps to follow for good DVD replication results:
                    </p>
                    
                </div> --}}
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
                    {{-- <aside class="single_sidebar_widget popular_post_widget">
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
                    </aside> --}}
                </div>
            </div>
              <div class="col-lg-8 posts-list">
                <div class="slider-height2 d-flex align-items-center" style="min-height:100px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hero-cap hero-cap2 text-center">
                                    <h2 ><b><i style="color:white;">Messages des professeurs</i></b></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                {{-- <h1 class="text-heading"><b><i><u>Messages des professeurs :</u></i></b></h1> --}}
                @foreach ( $profposts as $profpost )
                <div class="container box_1170">
                    
                    <h3 class="text-heading">{{ $profpost->nom }} {{ $profpost->prenom }} </h3>
                    <h3 class="text-heading">{{ $profpost->updated_at }}</h3>
                    <p class="sample-text">
                        {{$profpost->message}}
                        {{-- <a href="#" style="color:rgb(41, 0, 41);text-decoration:underline;">Download the document here</a> --}}
        
                    </p>
                </div>
                <br>
                <hr style="border-top:2px solid #4c415c;"/>
                @endforeach
                {{ $profposts->links() }}
                <br>
                {{-- <div class="container box_1170">
                    <h3 class="text-heading">Teacher </h3> 
                    <h3 class="text-heading">{{ date('d-m-Y H:i') }}</h3>
                    <p class="sample-text">
                        
                        Every avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary,
                        or short
                        film to show off their creative prowess. Many have great ideas and want to “wow”
                        the<sup>Superscript</sup> scene,
                        or video renters with their big project. But once you have the<sub>Subscript</sub> “in the can” (no easy
                        feat), how
                        do you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked
                        hand-written title
                        inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC
                        barcodes
                        and polywrap sitting on your doorstep? You need to create eye-popping artwork and have your project
                        replicated.
                        Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is
                        certainly a
                        helpful option to ensure a professional end result, but to help with your DVD replication project, here
                        are 4 easy
                        steps to follow for good DVD replication results:
        
                    </p>
                </div>
                <br>
                <div class="container box_1170">
                    <h3 class="text-heading">Text Sample </h3>
                    <h3 class="text-heading">{{ date('d-m-Y H:i') }}</h3>
                    <p class="sample-text">
                        Every avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary,
                        or short
                        film to show off their creative prowess. Many have great ideas and want to “wow”
                        the<sup>Superscript</sup> scene,
                        or video renters with their big project. But once you have the<sub>Subscript</sub> “in the can” (no easy
                        feat), how
                        do you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked
                        hand-written title
                        inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC
                        barcodes
                        and polywrap sitting on your doorstep? You need to create eye-popping artwork and have your project
                        replicated.
                        Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is
                        certainly a
                        helpful option to ensure a professional end result, but to help with your DVD replication project, here
                        are 4 easy
                        steps to follow for good DVD replication results:
                    </p>
                    
                </div> --}}
              </div>
              
           </div>
        </div>
     </section>
</main>

@endsection