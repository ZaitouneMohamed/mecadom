@extends('layouts.master')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
@endsection

@section('content')
    <!-- ======================== Main  ======================== -->
    <main>
        <!-- <img class="Spanner" src="assets/images/Spanner Wrench.png" alt> -->

        <section class="hero-section">
            <div class="left-section">
                <div class="left-section-container">
                    <div class="top">
                        <span> ne cherchez plus loin </span>
                        <h1 class="hero-title">
                            Trouvez un <span>Mécanicien</span>
                            où que vous soyez
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
                            repellendus at ea consectetur esse optio reprehenderit modi,
                            facilis tenetur aut. Inventore incidunt perferendis asperiores
                            earum.
                        </p>

                        <div class="search-bar-container">
                            <form class="search-home-form" action="" method="post">
                                <input id="homeSearch" type="search" placeholder="Search your service..." required>
                                <button type="submit">
                                    <i class='bx bx-search-alt-2'></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="bottom"></div>
                    <div class="msg-bottom">
                        <div class="icon-bottom">
                            <img src="{{ asset('assets/images/Hand Holding Wrench.png') }}" alt="Hand 3d">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, molestias!
                        </p>
                    </div>
                </div>
            </div>

            <div class="right-section"></div>

            <div class="services-block">
                <h2>
                    Services
                </h2>
                <div class="services-container">
                    <a href="#">Vidange</a>
                    <a href="#">Lavage</a>
                    <a href="#">Dépannage</a>
                    <a href="#">Consultation globale</a>
                    <a href="#">Climatisation</a>
                    <a href="#">Batterie</a>
                </div>
            </div>
        </section>
    </main>
@endsection
