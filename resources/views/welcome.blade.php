@extends('layouts.master')

@section('content')
    <!-- ======================== Main  ======================== -->
    <main>
        <!-- <img class="Spanner" src="assets/images/Spanner Wrench.png" alt> -->

        {{-- <section class="px-4 lg:px-14 hero-section w-full flex flex-col items-center justify-center mt-16 lg:mt-1 ">
            <div class="w-full grid-cols-1 lg:grid grid-cols-2 max-w-[1440px] relative lg:mt-24 min-h-[700px] ">
                <div class="left-section">
                    <div class="left-section-container">
                        <div class="top">
                            <span data-aos="fade-up" data-aos-duration="500">

                            </span>
                            <h1 class="hero-title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                                Trouvez un <span>Mécanicien</span>
                                où que vous soyez
                            </h1>
                            <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="350">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
                                repellendus at ea consectetur esse optio reprehenderit modi,
                                facilis tenetur aut. Inventore incidunt perferendis asperiores
                                earum.
                            </p>

                            <div class="search-bar-container" data-aos="fade-up" data-aos-duration="500"
                                data-aos-delay="400">
                                <form class="search-home-form w-full" action="" method="post">
                                    <input id="homeSearch" class="w-full" type="search"
                                        placeholder="Search your service..." required>
                                    <button type="submit">
                                        <i class='bx bx-search-alt-2'></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="bottom"></div>
                        <div class="msg-bottom" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                            <div class="icon-bottom">
                                <img src="{{ asset('assets/images/Hand Holding Wrench.png') }}" alt="Hand 3d">
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, molestias!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="right-section rounded-3xl py-24" data-aos="fade-up" data-aos-duration="800">
                </div>

                <div class="services-block lg:block mt-12 backdrop-blur-xl lg:bg-white/30 bg-white " data-aos="flip-left"
                    data-aos-duration="800" data-aos-delay="300">
                    <h2 class="font-bold text-2xl text-center pb-2 lg:text-white text-gray-900">
                        Services
                    </h2>
                    <div class="services-container">
                        @foreach ($services as $item)
                            <a href="#"
                                class="rounded-full border-solid border-[1px] lg:border-[#ffffff] border-gray-700 lg:text-white text-gray-900 ">{{ $item->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

        </section> --}}
        <section class="px-4 lg:px-14 hero-section w-full flex flex-col items-center justify-center mt-16 lg:mt-1 ">
            <div class="w-full grid-cols-1 lg:grid grid-cols-2 max-w-[1440px] relative lg:mt-24 min-h-[700px] ">
                <div class="left-section">
                    <div class="left-section-container">
                        <div class="top">
                            <span data-aos="fade-up" data-aos-duration="500">
                                Bienvenue sur MecaDom !
                            </span>
                            <h1 class="hero-title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                                Trouvez un <br> <span>Mécanicien</span>
                                où que vous soyez
                            </h1>
                            <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="350">
                                MecaDom, votre passerelle vers un entretien automobile sans tracas, directement à votre
                                domicile. Mettez-vous en relation avec des experts de confiance, prêts à prendre soin de
                                votre véhicule avec précision et expertise.
                            </p>

                            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                                <div class="pt-3">
                                    <a href="pages/register/signup.html"
                                        class="text-white text-xl bg-[#1a237e] duration-300 hover:bg-blue-800  focus:ring-4 focus:ring-primary-200 font-medium rounded-full text-sm px-8 mx-auto py-2.5 w-max text-center dark:text-white  dark:focus:ring-primary-900">
                                        Inscrivez-vous gratuitement</a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom"></div>
                        <div class="msg-bottom" data-aos="fade-up" data-aos-duration="500">
                            <div class="icon-bottom">
                                <img src="assets/images/Hand Holding Wrench.png" alt="Hand 3d">
                            </div>
                            <p>
                                Entrez dans l'univers de l'entretien automobile simplifié avec MecaDom!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="right-section rounded-3xl py-24" data-aos="fade-up" data-aos-duration="800">
                </div>

                <div class="services-block lg:block mt-12 backdrop-blur-xl lg:bg-white/30 bg-white " data-aos="flip-left"
                    data-aos-duration="800" data-aos-delay="300">
                    <h2 class="font-bold text-2xl text-center pb-2 lg:text-[#FFFFFF] text-gray-900">
                        Services
                    </h2>
                    <div class="services-container">
                        @foreach ($services as $item)
                            <a href="#"
                                class="rounded-full border-solid border-[1px] lg:border-[#ffffff] border-gray-700 lg:text-white text-gray-900 ">{{ $item->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

        </section>



        <!-- card home section  -->
        <section class='px-2 lg:px-4 w-full flex flex-col gap-10 items-center justify-center py-28 px-5 min-h-max '>
            <h2 class='title text-4xl tracking-tight font-extrabold'>Ils
                <span
                    class="before:block before:absolute before:-inset-1 before:-skew-y-3  rounded-2xl before:bg-[#1a237e] relative inline-block">
                    <span class="relative text-white">Repondent</span>
                </span> à vos Besoins
            </h2>
            <div
                class="wrapper grid lg:grid-cols-3 gap-8 justify-items-center items-center mx-auto grid-cols-1 md:grid-cols-2 sm:grid-cols-1">
                @forelse ($users as $user)
                    <div
                        class="group card-container bg-white pt-0 pb-3 rounded-2xl m-2 flex flex-col items-center gap-3 shadow-xl lg:w-96 w-full ease-in duration-300 hover:translate-y-2 ">
                        <div class="cover h-24 w-full rounded-t-xl bg-[#1a237e] group-hover:bg-[#ffc107] duration-300 ">
                        </div>
                        <div class="image-profile w-full flex justify-center items-center px-2">
                            <a href="" class=" w-28 -mt-14  ">
                                <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(3).jpg"
                                    class="rounded-full drop-shadow-2xl w-52 object-cover  border border-2 border-white"
                                    alt="">
                            </a>
                        </div>
                        <div class="card-profile-wrapper w-full flex justify-between items-center px-4 self-center my-4">
                            <a href='{{ route('prestateur.profile', $user->id) }}' class="user flex gap-2">
                                <div class="flex flex-col">
                                    <h3 class="text-slate-950 font-bold hover:text-[#ffc107] duration-300">
                                        {{ $user->full_name }}</h3>
                                    <span class="text-slate-600 text-sm">
                                        @foreach ($user->getRoleNames() as $role)
                                            {{ $role }}
                                        @endforeach
                                    </span>
                                </div>
                            </a>
                            <div class="flex gap-5">
                                <a href='/' class="call text-slate-600 text-sm pr-2 hover:text-[#ffc107]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="var(--vibrant)"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.970c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.970-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="service px-4 border-t py-4 flex flex-wrap gap-2">
                                @forelse ($user->Services as $service)
                                    <span
                                        class="call text-slate-500 text-xs p-2 rounded-full border-gray-100 border">{{ $service->name }}</span>
                                @empty
                                    <!-- No services for this user -->
                                @endforelse
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse



            </div>
            <div class="more-services">
                <a href="pages/services/services.html"
                    class="text-white bg-[#1a237e] duration-300 hover:bg-blue-800  focus:ring-4 focus:ring-primary-200 font-medium rounded-full text-sm px-8 mx-auto py-2.5 w-max text-center dark:text-white  dark:focus:ring-primary-900">
                    Voir plus</a>
            </div>
        </section>

        <section class="px-1 lg:px-4 bg-white dark:bg-gray-900 py-8 max-w-screen">
            <div class="grid max-w-[1440px]  px-4  mx-auto   py-16 lg:grid-cols-2">
                <div class="mr-auto place-self-center ">
                    <h1
                        class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                        Devenez le meilleur mécanicien de demain !</h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                        Rejoignez notre communauté de professionnels de l'automobile et donnez un coup de pouce à votre
                        carrière dès aujourd'hui.</p>
                    <a href="/"
                        class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        Inscrivez Vous
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>*
                </div>
                <div class="mt-5  flex">
                    <img class=' rounded-2xl md:w-full object-cover'
                        src="https://www.planeteautomobile.com/wp-content/uploads/2022/03/recharger-une-batterie-de-voiture-thermique.jpg"
                        alt="mockup" />
                </div>
            </div>
        </section>


        <section class="px-1 lg:px-4  dark:bg-gray-900  py-9">
            <div class="py-6 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-md lg:text-center mb-8 lg:mb-12 text-left">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                        L'abonnement adapté à vos besoins</h2>
                    <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">
                        Mesure pour répondre aux exigences spécifiques de chaque type d'entreprise. Que vous soyez un
                        mécanicien indépendant, un garage bien établi ou une entreprise de l'industrie automobile, notre
                        plateforme a un abonnement conçu pour vous..</p>
                </div>
                <div class="space-y-8 grid lg:grid-cols-3 grid-cols-1 sm:gap-6 gap-10 lg:space-y-0">

                    <div
                        class="flex flex-col p-6 mx-auto max-w-lg text-center text-white bg-[#1a237e] color rounded-3xl border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                        <h3 class="mb-4 text-2xl font-semibold">Particulier</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Idéal pour les mécaniciens
                            indépendants et les passionnés d'automobile.</p>
                        <div class="flex justify-center items-baseline my-8">
                            <span class="mr-2 text-5xl font-extrabold">99 DH</span>
                            <span class="text-gray-500 dark:text-gray-400">/month</span>
                        </div>

                        <ul class="mb-8 space-y-4 text-left">
                            <li class="flex items-center space-x-3">

                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Accès à un réseau de clients.</span>
                            </li>
                            <li class="flex items-center space-x-3">

                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Liberté de tarification et d'horaire.</span>
                            </li>
                            <li class="flex items-center space-x-3">

                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Outils de gestion de clients inclus.</span>
                            </li>
                        </ul>
                        <a href="https://mecadom.electroniqueclasse.com/"
                            class="text-white bg-[#ffc107] hover:bg-[#ffe082] focus:ring-4 focus:ring-primary-200 font-medium rounded-full text-sm px-8 w-max mx-auto py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Rejoignez-nous</a>
                    </div>

                    <div
                        class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-3xl border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                        <h3 class="mb-4 text-2xl font-semibold">Garage Pro</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Parfait pour les garages et
                            ateliers de mécanique bien établis.</p>
                        <div class="flex justify-center items-baseline my-8">
                            <span class="mr-2 text-5xl font-extrabold">499 DH</span>
                            <span class="text-gray-500 dark:text-gray-400">/month</span>
                        </div>

                        <ul class="mb-8 space-y-4 text-left">
                            <li class="flex items-center space-x-3">

                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Profil de garage personnalisé.</span>
                            </li>
                            <li class="flex items-center space-x-3">

                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Assistance technique prioritaire.
                                </span>
                            </li>
                            <li class="flex items-center space-x-3">

                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Accès à des outils de diagnostic avancés.</span>
                            </li>
                        </ul>
                        <a href="https://mecadom.electroniqueclasse.com/"
                            class="text-white bg-blue-700 hover:bg-blue-800  focus:ring-4 focus:ring-primary-200 font-medium rounded-full text-sm px-8 w-max mx-auto py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Inscrivez
                            votre garage
                        </a>
                    </div>

                    <div
                        class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-3xl border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                        <h3 class="mb-4 text-2xl font-semibold">Entreprise</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Parfait pour les entreprises
                            de l'industrie automobile et les fournisseurs de pièces.</p>
                        <div class="flex justify-center items-baseline my-8">
                            <span class="mr-2 text-5xl font-extrabold">1999 DH</span>
                            <span class="text-gray-500 dark:text-gray-400">/month</span>
                        </div>

                        <ul class="mb-8 space-y-4 text-left">
                            <li class="flex items-center space-x-3">

                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Publicité ciblée pour vos produits.</span>
                            </li>
                            <li class="flex items-center space-x-3">

                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Analyse approfondie des données.</span>
                            </li>
                            <li class="flex items-center space-x-3">

                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Support client dédié.</span>
                            </li>
                        </ul>
                        <a href="https://mecadom.electroniqueclasse.com/"
                            class="text-white bg-blue-700 hover:bg-blue-800  focus:ring-4 focus:ring-primary-200 font-medium rounded-full text-sm px-8 mx-auto py-2.5 w-max text-center dark:text-white  dark:focus:ring-primary-900">Inscrivez
                            votre entreprise

                        </a>
                    </div>
                </div>
            </div>
        </section>




        <!-- ========================== testimonials ============================ -->

        <section class="testimonials">

            <div class="testimonials-content py-6 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 pb-6">

                <div class="mx-auto lg:text-center md:max-w-xl lg:max-w-3xl">
                    <h3 class="mb-6 text-3xl font-bold ">
                        Témoignages
                    </h3>
                    <p class="mb-6 pb-2 md:mb-12 md:pb-0">
                        Découvrez ce que nos utilisateurs disent de nous.
                    </p>
                </div>

                <!-- Container for the Testimonials -->
                <div class="grid gap-6 text-center md:grid-cols-3 lg:gap-12">
                    <!-- First Testimonial -->
                    <div class="mb-12 md:mb-0">
                        <div class="mb-6 flex justify-center">
                            <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(1).jpg"
                                class="w-32 rounded-full shadow-lg dark:shadow-black/30" />
                        </div>
                        <h5 class="mb-4 text-xl font-semibold">Maria Smantha</h5>
                        <h6 class="mb-4 font-semibold text-primary dark:text-primary-500">
                            Mecanicien
                        </h6>
                        <p class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="inline-block h-7 w-7 pr-2" viewBox="0 0 24 24">
                                <path
                                    d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
                            </svg>
                            Grâce à MecaDom, j'ai pu étendre mon réseau de clients et offrir mes services de manière
                            plus flexible. C'est une plateforme qui simplifie réellement le processus pour les
                            mécaniciens comme moi.
                        </p>
                    </div>

                    <!-- Second Testimonial -->
                    <div class="mb-12 md:mb-0">
                        <div class="mb-6 flex justify-center">
                            <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(2).jpg"
                                class="w-32 rounded-full shadow-lg dark:shadow-black/30" />
                        </div>
                        <h5 class="mb-4 text-xl font-semibold">Lisa Cudrow</h5>
                        <h6 class="mb-4 font-semibold text-primary dark:text-primary-500">
                            Garage
                        </h6>
                        <p class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="inline-block h-7 w-7 pr-2" viewBox="0 0 24 24">
                                <path
                                    d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
                            </svg>
                            MecaDom a considérablement amélioré notre visibilité en ligne et a attiré de nouveaux
                            clients vers notre garage. C'est devenu un outil essentiel pour faire croître notre
                            entreprise dans l'ère numérique actuelle.
                        </p>
                    </div>

                    <!-- Third Testimonial -->
                    <div class="mb-0">
                        <!-- <div class="mb-6 flex justify-center">
                            <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(9).jpg"
                                class="w-32 rounded-full shadow-lg dark:shadow-black/30" />
                        </div> -->
                        <div class="mb-12 md:mb-0">
                            <div class="mb-6 flex justify-center">
                                <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(3).jpg"
                                    class="w-32 rounded-full shadow-lg dark:shadow-black/30" />
                            </div>
                            <h5 class="mb-4 text-xl font-semibold">Lisa Cudrow</h5>
                            <h6 class="mb-4 font-semibold text-primary dark:text-primary-400">
                                Fournisseur Auto
                            </h6>
                            <p class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="inline-block h-7 w-7 pr-2" viewBox="0 0 24 24">
                                    <path
                                        d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
                                </svg>
                                En choisissant MecaDom, nous avons pu atteindre un public plus large pour nos produits.
                                La plateforme a fourni un excellent moyen de mettre en valeur nos pièces automobiles et
                                d'atteindre de nouveaux clients potentiels de manière efficace.
                            </p>
                            <!-- <ul class="mb-0 flex items-center justify-center">
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-5 w-5 text-yellow-500">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-5 w-5 text-yellow-500">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-5 w-5 text-yellow-500">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-5 w-5 text-yellow-500">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-5 w-5 text-yellow-500">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


@section('script')
    <script>
        AOS.init();
    </script>
    <script>
        import {
            Carousel,
            initTE,
        } from "tw-elements";

        initTE({
            Carousel
        });
    </script>
@endsection
