<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <style>
        .nav-btn .mobile-btn {
            display: none;
        }

        @media (max-width: 640px) {
            .nmenu .nav-btn {
                display: none;
            }
        }
    </style>

</head>

<body class="p-1">
    <header>
        <nav>
            <a href="https://meca-dom-plus.vercel.app/" class="logo">
                <img src="https://raw.githubusercontent.com/jealife/Login-form-Mecadom/main/images/Logotype_Mecadom_png_Fichier%203.png"
                    alt=" Logo MECADOM" />
            </a>
            <button onclick="showMenu()" id="hamburger_menu" class="button_menu">
                <i id="bxBtnmenu" class="bx bx-menu"></i>
                <i id="bxBtnx" style="display: none" class="bx bx-x"></i>
            </button>
            <div class="menu">
                <div class="links-menu">
                    <a href="https://meca-dom-plus.vercel.app/" class="link-menu">Accueil</a>
                    <a href="#" class="link-menu">Services</a>
                    <a href="#" class="link-menu">Produits</a>
                    <a href="#" class="link-menu">Fovoris</a>
                </div>
                <div class="nav-btn">
                    <a href="#" class="login">Log out</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="flex flex-col  justify-center min-h-screen py-14">


        <div class="hero flex items-center justify-center min-h-screen">

            <h1 class="text-2xl">Bienvenue, </h1>
        </div>

        <div class="utilisateurs">

        </div>
    </main>

    <script src="{{ asset('assets/js/nav.js') }} "></script>
</body>


</html>
