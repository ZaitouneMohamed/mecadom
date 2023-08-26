<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image"
        content="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8bSVDMyVBOWNhbmljaWVufGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60">
    <meta property="og:image" content="https://meca-dom-plus.vercel.app/assets/images/Logo_Mecadom.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | MECADOM </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900;9..40,1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="icon" type="image/png" href="https://meca-dom-plus.vercel.app/assets/images/Logo_icon.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="https://raw.githubusercontent.com/jealife/Login-form-Mecadom/main/images/Logotype_Mecadom_png_Fichier%203.png"
                    alt=" Logo MECADOM">
            </div>
            <button onclick="showMenu()" id="hamburger_menu" class="button_menu">
                <i id="bxBtnmenu" class='bx bx-menu'></i>
                <i id="bxBtnx" style="display: none;" class='bx bx-x'></i>
            </button>
            <div class="menu">
                <a href="https://meca-dom-plus.vercel.app/" class="link-menu">Accueil</a>
                <a href="#" class="link-menu">Services</a>
                <a href="#" class="link-menu">Produits</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="left-section">
            <form action="{{ route('login_f') }}" method="POST">
                @csrf
                <h1 id="formTitle">Connexion</h1>
                @if ($errors)
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                @endif

                <div class="login-sign-up">
                    <div class="login" id="login">
                        <input type="email" name="email" autofocus="" autocapitalize="none" autocomplete="email"
                            placeholder="Email" >

                        <div class="password-field">

                            <input type="password" id="password" placeholder="Mot de passe" name="password"
                                autocomplete="current-password" >
                            <!-- <i class='bx bx-show' id="togglePassword"></i> -->
                            <div class="show-password">
                                <input type="checkbox" onclick="showPassword()">
                                <span id="tooglePasswordindicator">Voir</span>
                            </div>
                        </div>
                    </div>


                    <div class="link-connexion" id="linkLogin">
                        <a href="#">Mot de passe oublié ?</a>
                        <a href="{{ route('register') }}">S'enregistrer</a>
                    </div>
                </div>

                <input type="submit" value="Se connecter" id="loginBtn">
            </form>
        </div>

        <div class="right-section">

        </div>


    </main>

    <script>
        //menu mobile Script
        const menu = document.querySelector('.menu');

        function showMenu() {
            var btnMenu = document.getElementById("hamburger_menu");
            menu.classList.toggle("menu_mobile");

        }

        // show/hide paswword scrip
        const tooglePasswordindicator = document.getElementById('tooglePasswordindicator');
        const tooglePasswordindicatorSignUp = document.getElementById('tooglePasswordindicatorSignUp');
        // const checkboxContainer = document.querySelector('.show-password')
        var passWord = document.getElementById("password");
        var PasswordSignUp = document.getElementById("PasswordSignUp");

        function showPassword() {
            if (passWord.type === "password") {
                passWord.type = "text";
                tooglePasswordindicator.innerText = "Masquer";
            } else {
                passWord.type = "password";
                tooglePasswordindicator.innerText = "Voir";
            }
        }

        function showPasswordSignUp() {
            if (PasswordSignUp.type === "password") {
                PasswordSignUp.type = "text";
                tooglePasswordindicatorSignUp.innerText = "Masquer";
            } else {
                PasswordSignUp.type = "password";
                tooglePasswordindicatorSignUp.innerText = "Voir";
            }
        }
    </script>

</body>

</html>
