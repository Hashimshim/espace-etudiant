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
                            <h2>Demande de document</h2>
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
                <h3 class="mb-30">Vos informations personnels</h3>
                <form action="document" method="POST">
                    @csrf
                    <div class="mt-10">
                        <input type="text" name="prenom" placeholder="First Name"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
                            class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="nom" placeholder="Last Name"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                            class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="CIN" placeholder="CIN"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'CIN'" required
                            class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="CNE" placeholder="CNE"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'CNE'" required
                            class="single-input">
                    </div>
                    <div class="mt-10">
                    <input type="number" name="apogee" placeholder="N° Apogée"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'N° Apogée'" required
                            class="single-input">
                    </div>
                   <div class="mt-10">
                        <input type="text" name="email" placeholder="Email address"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
                            class="single-input">
                    </div> 
                    {{-- <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                        <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Address'" required class="single-input">
                    </div> --}}
                    <div class="mt-10">
                        <div class="form-select" id="default-select">
                            <select name="niveau">
                            <option value-selected >-- Choisissez votre niveau --</option>
                            <option value="1ère Année préparatoire intégrée">1ère Année préparatoire intégrée</option>
                            <option value="2ème Année préparatoire intégrée">2ème Année préparatoire intégrée</option>
                            <option value="1ère année du Cycle ingénieur">1ère année du Cycle ingénieur</option>
                            <option value="2ème année du Cycle ingénieu">2ème année du Cycle ingénieur</option>
                            <option value="3ème année du Cycle ingénieur">3ème année du Cycle ingénieur</option>
                            <option value="1ème année Master">1ème année Master</option>
                            <option value="2ème année Master">2ème année Master</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-10">
                        <div class="form-select" id="default-select">
                                    <select name="filiere">
                                        <option value=" 1">-- Choisissez votre filière --</option>
                            <option value="Génie Electro-Mécanique">Génie Electro-Mécanique</option>
                            <option value="Génie mécanique">Génie mécanique</option>
                            <option value="Intelligence artificielle et génie informatique">Intelligence artificielle et génie informatique</option>
                            <option value="Génie industriel">Génie industriel</option>
                            <option value="Management des Systèmes Industriels">Management des Systèmes Industriels</option>
                            <option value="Management des Systèmes électriques intelligents">Management des Systèmes électriques intelligents</option>
                            <option value="Big data et internet des objets">Big data et internet des objets</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-10">
                        <div class="form-select" id="default-select">
                                    <select name="type">
                                        <option value="1">-- Choisissez votre type de document --</option>
                            <option value="Convention de stage">Convention de stage </option>
                            <option value="Demande de stage">Demande de stage</option>
                            <option value="Certificat de scolarité">Certificat de scolarité </option>
                            <option value="Demande de relevé de notes">Demande de relevé de notes </option>
                            <option value="Demande de réservation des terrains de sport">Demande de réservation des terrains de sport </option>
                            <option value="Demande d'autorisation -activité parascolaire-"> Demande d'autorisation -activité parascolaire-</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-10">
                        <textarea name="details" class="single-textarea"  placeholder="More details" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Message'" ></textarea>
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
    </div>
</main>
@endsection
