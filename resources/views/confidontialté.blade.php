<!doctype html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8" />
    <meta property="og:title" content="MACADOM | Politique de confidentialité" />
    <!-- Meta description -->
    <meta name="description"
        content="Mécadom Plus met en relation des particuliers avec des mécaniciens professionnels indépendants pour l’entretien automobile à domicile. " />
    <!-- mots clés -->
    <meta name="keywords" content="Voiture, Auto, mécanicien à domicile" />
    <meta name="author" content="STACK IT" />
    <meta property="og:site_name" content="Mécadom plus" />
    <meta property="og:type" content="website" />
    <!-- image mise en avant -->
    <meta property="og:image"
        content="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8bSVDMyVBOWNhbmljaWVufGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" />
    <meta property="og:image" content="https://meca-dom-plus.vercel.app/assets/images/Logo_Mecadom.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>MACADOM | Politique de confidentialité </title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('assets/images/Logo_icon.png') }}" />


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <style>
        body {
            overflow-x: hidden;
        }

        .mask1 {
            -webkit-mask-image: linear-gradient(rgb(0, 0, 0), transparent);
            mask-image: linear-gradient(rgb(0, 0, 0), transparent);
        }

        ::selection {
            color: #fff;
            /* background: #C026D3; */
            background: #2563EB;
        }

        .mobile a {
            transition: .3s;
        }

        .mobile-menu {
            display: none;
        }

        @media (max-width: 991.98px) {

            .mob {
                display: none;
            }

            .mobile {
                transition: .3s;
                /* position: absolute; */
                right: 0;
                top: 100%;
                min-height: 100vh;
                min-height: 100dvh;
                width: 100vw;
                padding: 2rem;
                backdrop-filter: blur(50px);
                -webkit-backdrop-filter: blur(50px);
                /* background-color: #f1f1f1e0; */
                font-size: 1.3rem;
                display: flex;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="flex-1">
                <a href="/" class="logo w-min">
                    <img src="../../assets/images/Logotype_Mecadom.png" class="w-[150px]" alt=" Logo MECADOM" />
                </a>
            </div>
            <button onclick="showMenu()" id="hamburger_menu" class="button_menu">
                <i id="bxBtnmenu" class="bx bx-menu"></i>
                <i id="bxBtnx" style="display: none" class="bx bx-x"></i>
            </button>
            <div class="menu">
                <div class="links-menu">
                    <a href="{{ route('home') }}" class="link-menu">Accueil</a>
                    <a href="{{ route('services') }}" class="link-menu">Services</a>
                    <a href="#" class="link-menu">Boutique</a>
                </div>
                <div class="nav-btn">
                    @auth
                        <a href="{{ route('profile') }}" class="register hidden">Profile</a>
                    @endauth
                    @guest
                        <a href="{{ route('login') }}" class="login">Se connecter</a>
                    @endguest
                </div>

            </div>
        </nav>
    </header>
    <main>
        <section class="relative flex flex-col items-center lg:px-8 lg:py-16 ">
            <div class="w-full relative  ">
                <div style="background: url({{ asset('assets/images/politique.jpeg') }}) ;background-position: center;
                background-repeat: no-repeat;
                background-size: cover;"
                    class="hero-image mask1 absolute lg:top-8 top-0 right-0  h-[500px]  w-full lg:rounded-3xl rounded-none flex  items-center ">
                </div>
                <div
                    class="content h-max mt-24  w-full  flex flex-col gap-6 items-center px-5 py-24 text-center justify-center   relative -">
                    <h1 class="lg:text-8xl text-5xl font-bold  text-slate-100 " data-aos="fade-up"
                        data-aos-duration="800"> Politique de confidentialité </h1>
                </div>
            </div>
        </section>


        <section class="Privacy-policy flex flex-col items-center pb-16 ">
            <div class="policy-content max-w-[1440px] px-3">
                <div class="intro py-16">
                    <p
                        class="text-gray-900 lg:text-xl text-md
                    p-4 border border-1 rounded-xl backdrop-blur-xl bg-white/40  shadow-md">
                        Nous, MecaDom plus, attachons une grande importance à la
                        confidentialité
                        de vos informations personnelles. Cette politique de confidentialité explique comment nous
                        recueillons, utilisons, partageons et protégeons vos informations lorsque vous utilisez notre
                        plateforme pour les prestations d'entretien automobile à domicile (ci-après dénommée "Mecadom").
                        Veuillez lire attentivement cette politique pour comprendre comment nous traitons vos
                        informations.</p>
                </div>
                <ul class="space-y-4  list-decimal list-inside  ">
                    <li>
                        <span class="text-xl font-bold text-gray-800 ">Collecte d'informations</span>
                        <p class="pl-5 mt-2 space-y-3 list-decimal list-inside text-gray-500">
                            Nous collectons les informations personnelles que vous nous fournissez directement lorsque
                            vous utilisez la Plateforme, telles que votre nom, votre adresse e-mail, votre numéro de
                            téléphone, votre adresse de domicile et toute autre information nécessaire pour fournir les
                            services demandés.
                        </p>
                    </li>
                    <li>
                        <span class="text-xl font-bold text-gray-800 ">Utilisation des informations</span>
                        <p class="pl-5 mt-2 space-y-1 list-decimal list-inside text-gray-500">
                            Nous utilisons les informations collectées pour :
                            - Faciliter la mise en relation des particuliers avec des mécaniciens professionnels
                            indépendants pour des prestations d'entretien automobile à domicile.
                            <br>
                            - Permettre aux fabricants d'accessoires de véhicules ou aux fournisseurs de pièces de
                            publier des annonces ou des produits sur la Plateforme.
                            <br>
                            - Faciliter la mise en relation des utilisateurs avec des services de lavage de voiture à
                            domicile.
                            <br>
                            - Communiquer avec vous concernant les services, les mises à jour, les promotions ou toute
                            autre information pertinente.
                            <br>
                            - Améliorer et personnaliser l'expérience des utilisateurs sur la Plateforme.
                            <br>
                            - Enquêter sur d'éventuelles activités frauduleuses, abusives ou illégales.
                        </p>
                    </li>
                    <li>
                        <span class="text-xl font-bold text-gray-800 ">Partage des informations</span>
                        <p class="pl-5 mt-2 space-y-1 list-decimal list-inside text-gray-500">
                            Nous pouvons partager vos informations dans les cas suivants :
                            <br>
                            - Si la loi l'exige ou si nous sommes légalement tenus de le faire.
                            <br>
                            - Pour protéger nos droits, notre propriété ou notre sécurité, ainsi que ceux de nos
                            utilisateurs ou de tiers.
                            <br>
                            - Dans le cadre d'une fusion, acquisition, cession d'actifs ou procédure de faillite, où vos
                            informations pourraient être transférées à des tiers en tant qu'actif de l'entreprise.
                        </p>
                    </li>
                    <li>
                        <span class="text-xl font-bold text-gray-800 ">Sécurité des informations</span>
                        <p class="pl-5 mt-2 space-y-1 list-decimal list-inside text-gray-500">
                            Nous mettons en place des mesures de sécurité appropriées pour protéger vos informations
                            personnelles contre tout accès non autorisé, toute divulgation, toute altération ou toute
                            destruction. Nous recourrons ou pouvons recourir également à des systèmes de paiement
                            sécurisé conformes à l’état de l’art et à la réglementation applicable.
                        </p>
                    </li>
                    <li>
                        <span class="text-xl font-bold text-gray-800 ">Modifications de la politique de
                            confidentialité</span>
                        <p class="pl-5 mt-2 space-y-1 list-decimal list-inside text-gray-500">
                            Nous nous réservons le droit, à notre seule discrétion, de modifier à tout moment la
                            présente charte, en totalité ou en partie. Ces modifications entreront en vigueur à compter
                            de la publication de la nouvelle charte. Votre utilisation du site suite à l’entrée en
                            vigueur de ces modifications vaudra reconnaissance et acceptation de la nouvelle charte. A
                            défaut et si cette nouvelle charte ne vous convient pas, vous ne devrez plus accéder au
                            site.
                            L'ensemble de ces informations seront visibles et accessibles sur les supports permettant la
                            collecte des données via un registre conformément à l’article 30 du « Règlement Général sur
                            la Protection des Données » n°2016/679 du 27 avril 2016
                        </p>
                    </li>
                </ul>

            </div>
        </section>
    </main>




    </main>
    <script src="{{ asset('assets/js/nav.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <script>
        const mob = document.getElementById('mob');

        function openMenu() {
            mob.classList.toggle("mobile");
        }
    </script>
</body>

</html>
