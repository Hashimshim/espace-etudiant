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
                 <div class="single-post">
                    <div class="feature-img">
                       <img class="img-fluid" src="data:image/jpg;charset=utf8;base64,{{base64_encode($annonce->img)}}" alt="">
                    </div>
                    <div class="blog_details">
                       <h2 style="color: #2d2d2d;"> {{ $annonce->title }}
                       </h2>
                       <ul class="blog-info-link mt-3 mb-4">
                          <li><a href="#">{{ $annonce->date }}</a></li>
                          
                       </ul>
                       <p class="excert">
                          {{ $annonce->body }}
                       </p>
                       <p>
                        {{ $annonce->body }}
                       </p>
                       {{-- <div class="quote-wrapper">
                          <div class="quotes">
                             MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                             should have to spend money on boot camp when you can get the MCSE study materials yourself at
                             a fraction of the camp price. However, who has the willpower to actually sit through a
                             self-imposed MCSE training.
                          </div>
                       </div> --}}
                       {{-- <p>
                          MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                          should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                          fraction of the camp price. However, who has the willpower
                       </p> --}}
                       <p>
                        {{ $annonce->body }}
                       </p>
                    </div>
                 </div>
                 {{-- <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                       <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                          people like this</p>
                       <div class="col-sm-4 text-center my-2 my-sm-0">
                          <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                       </div>
                       <ul class="social-icons">
                          <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                          <li><a href="#"><i class="fab fa-behance"></i></a></li>
                       </ul>
                    </div>
                    <div class="navigation-area">
                       <div class="row">
                          <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                             <div class="thumb">
                                <a href="#">
                                   <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                                </a>
                             </div>
                             <div class="arrow">
                                <a href="#">
                                   <span class="lnr text-white ti-arrow-left"></span>
                                </a>
                             </div>
                             <div class="detials">
                                <p>Prev Post</p>
                                <a href="#">
                                   <h4 style="color: #2d2d2d;">Space The Final Frontier</h4>
                                </a>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                             <div class="detials">
                                <p>Next Post</p>
                                <a href="#">
                                   <h4 style="color: #2d2d2d;">Telescopes 101</h4>
                                </a>
                             </div>
                             <div class="arrow">
                                <a href="#">
                                   <span class="lnr text-white ti-arrow-right"></span>
                                </a>
                             </div>
                             <div class="thumb">
                                <a href="#">
                                   <img class="img-fluid" src="assets/img/post/next.png" alt="">
                                </a>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div> --}}
                 {{-- <div class="blog-author">
                    <div class="media align-items-center">
                       <img src="assets/img/blog/author.png" alt="">
                       <div class="media-body">
                          <a href="#">
                             <h4>Harvard milan</h4>
                          </a>
                          <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                             our dominion twon Second divided from</p>
                       </div>
                    </div>
                 </div>
                 <div class="comments-area">
                    <h4>05 Comments</h4>
                    <div class="comment-list">
                       <div class="single-comment justify-content-between d-flex">
                          <div class="user justify-content-between d-flex">
                             <div class="thumb">
                                <img src="assets/img/comment/comment_1.png" alt="">
                             </div>
                             <div class="desc">
                                <p class="comment">
                                   Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                   Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                </p>
                                <div class="d-flex justify-content-between">
                                   <div class="d-flex align-items-center">
                                      <h5>
                                         <a href="#">Emilly Blunt</a>
                                      </h5>
                                      <p class="date">December 4, 2017 at 3:12 pm </p>
                                   </div>
                                   <div class="reply-btn">
                                      <a href="#" class="btn-reply text-uppercase">reply</a>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="comment-list">
                       <div class="single-comment justify-content-between d-flex">
                          <div class="user justify-content-between d-flex">
                             <div class="thumb">
                                <img src="assets/img/comment/comment_2.png" alt="">
                             </div>
                             <div class="desc">
                                <p class="comment">
                                   Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                   Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                </p>
                                <div class="d-flex justify-content-between">
                                   <div class="d-flex align-items-center">
                                      <h5>
                                         <a href="#">Emilly Blunt</a>
                                      </h5>
                                      <p class="date">December 4, 2017 at 3:12 pm </p>
                                   </div>
                                   <div class="reply-btn">
                                      <a href="#" class="btn-reply text-uppercase">reply</a>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="comment-list">
                       <div class="single-comment justify-content-between d-flex">
                          <div class="user justify-content-between d-flex">
                             <div class="thumb">
                                <img src="assets/img/comment/comment_3.png" alt="">
                             </div>
                             <div class="desc">
                                <p class="comment">
                                   Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                   Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                </p>
                                <div class="d-flex justify-content-between">
                                   <div class="d-flex align-items-center">
                                      <h5>
                                         <a href="#">Emilly Blunt</a>
                                      </h5>
                                      <p class="date">December 4, 2017 at 3:12 pm </p>
                                   </div>
                                   <div class="reply-btn">
                                      <a href="#" class="btn-reply text-uppercase">reply</a>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="comment-form">
                    <h4>Leave a Reply</h4>
                    <form class="form-contact comment_form" action="#" id="commentForm">
                       <div class="row">
                          <div class="col-12">
                             <div class="form-group">
                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                             </div>
                          </div>
                          <div class="col-sm-6">
                             <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                             </div>
                          </div>
                          <div class="col-sm-6">
                             <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                             </div>
                          </div>
                          <div class="col-12">
                             <div class="form-group">
                                <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                             </div>
                          </div>
                       </div>
                       <div class="form-group">
                          <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment</button>
                       </div>
                    </form>
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
           </div>
        </div>
     </section>
</main>
@endsection