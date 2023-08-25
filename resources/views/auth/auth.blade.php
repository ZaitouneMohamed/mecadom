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
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            overflow-y: hidden !important;

        }

        header {
            width: 100%;
            padding: 1.5rem 1rem;
            position: fixed;
            z-index: 10000;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        nav {
            width: 100%;
            max-width: 1024px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        nav div:nth-child(1)>img {
            width: 150px;
        }

        .div img {
            display: none;
            width: 90px;
        }


        nav img,
        nav .button_menu {
            z-index: 100000;
        }

        nav .button_menu {
            font-size: 1.7rem;
            display: none;
            cursor: pointer;
            border: none;
            background-color: transparent;
        }

        a {
            text-decoration: none;
            color: #0e141a;
        }

        .menu {
            display: flex;
            gap: 1rem;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
            padding: .30rem 1.5rem;
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.37);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(8.4px);
            -webkit-backdrop-filter: blur(8.4px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        nav .menu .link-menu {
            color: #161d2c;
            transition: all .5s ease;
            font-weight: 500;
        }

        nav .menu .link-menu {
            color: #161d2c;
        }

        nav .menu .link-menu:hover {
            color: #242fac;
        }

        /*  */

        main {
            width: 100%;
            min-height: 100vh;
            min-height: 100dvh;
        }

        /**/

        main {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .left-section,
        .right-section {
            height: 100%;
            flex: 1;
            min-height: 100vh;
            min-height: 100dvh;
        }

        .right-section {
            background-position: left;
            background-size: cover;
            background-image: url("images/Well\,\ let\'s\ check\ what\'s\ wrong\ with\ this\ car@3x.jpg");

        }

        .left-section {
            display: grid;
            place-content: center;
        }


        /*Formulaire de connexion */
        form {
            /* width: 300px; */
            display: flex;
            flex-direction: column;
            padding: 2rem 1.2rem 3rem 1.2rem;
            height: max-content;
            width: 370px;
            text-align: center;
            justify-content: space-around;
            border-radius: 25px;
            box-shadow: 0px 42px 50px 0px #26264648;
        }

        form h1 {
            color: #1a237e;
            text-transform: capitalize;
        }

        form .login,
        .login-sign-up,
        .sign-up {
            display: flex;
            flex-direction: column;
            gap: 24px;

        }

        .login {
            margin-top: 1.5rem;
        }

        .sign-up {
            margin-top: 1rem;
        }

        .link-connexion {
            display: flex;
            /* width: max-content; */
            font-size: .8rem;
            gap: 10px;
            margin: 0 auto;
            transition: .5s;
            color: #1a237e;
        }

        .link-connexion a {
            transition: all .5s ease-in-out;
        }


        .link-connexion span:nth-child(2) {
            cursor: pointer;
            border-bottom: #1a227e7c 0.5px solid;
        }

        .link-connexion a:hover {
            color: #0015ff;
        }

        form input[type=text],
        input[type=email],
        input[type=password] {
            padding: .8rem 1rem;
            border: none;
            outline: solid .5px #161d2c44;
            border-radius: 25px;
            transition: .5s;
            font-size: 1rem;
            color: #12181f;
            font-weight: 500;
            width: 100%;
        }

        input[type=text]:focus,
        input[type=password]:focus,
        input[type=email]:focus {
            outline: solid .5px #242fac;
            box-shadow: 0px 0px 15px 0px #2f40fc2a;

        }

        input[type=submit] {
            margin-top: 1rem;
            transition: all .3s;
            padding: .8rem 1rem;
            border: none;
            border-radius: 25px;
            width: max-content;
            align-self: center;
            background-color: #1a237e;
            color: white;

            cursor: pointer;
        }

        input[type=submit]:hover {
            transform: translateY(3px);
            background-color: #ffc107;
            box-shadow: 0px 10px 15px 0px #ffd04588;
        }

        .password-field {
            display: flex;
            flex-direction: column;
            align-items: end;
            width: 100%;
        }

        .password-field .bx {
            margin-top: -30px;
            margin-right: 20px;
            cursor: pointer;
            cursor: pointer;
            font-size: .8prem;
        }

        .show-password {
            padding: 0.8rem 0 0 .8rem;
            display: flex;
            width: 100%;
            justify-content: start;
            gap: 5px;
            width: 100%;
            font-size: .8rem;
            align-items: center;

        }

        .show-password input[type=checkbox] {
            cursor: pointer;
        }



        /* signUp form  */
        .name {
            display: flex;
            width: 100%;
            gap: 10px;
        }

        /*Responsives*/
        @media (max-width: 768px) {
            .menu {
                position: absolute;
                left: 1000px;
                font-size: 36px;
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                display: flex;
                flex-direction: column;
                gap: 1rem;
                border-radius: 0;
                padding: .30rem 1.5rem;
                backdrop-filter: blur(1px);
                -webkit-backdrop-filter: blur(1px);
                top: 0;
                width: 100%;
                justify-content: center;
                align-items: center;
                height: 100vh;
                font-size: 1.3rem;
                transition: .5s cubic-bezier(1, 0.575, 0.9, 3);
            }

            .menu_mobile {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                left: 0;
                display: flex;
                flex-direction: column;
                gap: 1rem;
                border-radius: 0;
                padding: .30rem 1.5rem;
                backdrop-filter: blur(8.4px);
                -webkit-backdrop-filter: blur(8.4px);
                top: 0;
                width: 100%;
                justify-content: center;
                align-items: center;
                height: 100vh;
                font-size: 1.3rem;
                transition: all .5s ease;

                background: #f5f5f5a1;
            }

            nav .button_menu {
                display: block;
            }



            .left-section {
                background-position: left;
                background-size: cover;
                background-image: url("images/Well\,\ let\'s\ check\ what\'s\ wrong\ with\ this\ car@3x.jpg");

            }

            .right-section {
                display: none;
            }

            form {
                margin-top: 2rem;
                width: 100%;
                min-width: 320px;
                background: #ffffff80;
                border-radius: 16px;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.267);
                backdrop-filter: blur(15px);
                -webkit-backdrop-filter: blur(15px);
                border: 1px solid rgba(255, 255, 255, 0.3);
            }

            .left-section {
                width: 100%;
                padding: 0 25px;
            }

            input[type=submit] {
                margin: 1rem 0;
            }
        }

        @media (max-width: 425px) {
            .name {
                flex-direction: column;
                gap: 24px;
            }
        }
    </style>
    <link rel="icon" type="image/png" href="https://meca-dom-plus.vercel.app/assets/images/Logo_icon.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="{{ asset('images/Logotype_Mecadom_png_Fichier 3.png') }} " alt=" Logo MECADOM">
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
            <form action="">
                <h1 id="formTitle">Connexion</h1>

                <div class="login-sign-up">
                    <div class="login" id="login">
                        <input type="email" name="email" autofocus="" autocapitalize="none" autocomplete="email"
                            placeholder="Email" required>
                        <div class="password-field">
                            <input type="password" id="password" placeholder="Mot de passe" name="password"
                                autocomplete="current-password" required="">
                            <!-- <i class='bx bx-show' id="togglePassword"></i> -->
                            <div class="show-password">
                                <input type="checkbox" onclick="showPassword()">
                                <span id="tooglePasswordindicator">Voir</span>
                            </div>
                        </div>
                    </div>
                    <div class="sign-up" id="signUp">
                        <div class="name">
                            <input type="text" name="nom" placeholder="Nom" id="lname" required>
                            <input type="text" name="prenom" placeholder="Prénom" id="fname" required>
                        </div>
                        <input type="text" name="email" autocomplete="email" placeholder="Email" id="email"
                            required>
                        <div class="password-field">

                            <input type="password" id="PasswordSignUp" placeholder="Mot de passe" name="password"
                                autocomplete="current-password" required="">
                            <!-- <i class='bx bx-show' id="togglePassword"></i> -->
                            <div class="show-password">
                                <input type="checkbox" onclick="showPasswordSignUp()">
                                <span id="tooglePasswordindicatorSignUp">Voir</span>
                            </div>
                        </div>
                    </div>

                    <div class="link-connexion" id="linkLogin">
                        <a href="#">Mot de passe oublié ?</a>
                        <span onclick="toggleckeckShow()">S'enregistrer</span>
                    </div>
                    <div class="link-connexion" id="linkSignUp">
                        <span>Vous avez un compte ?</span>
                        <span onclick="toggleckeckShowLogin()">Se connecter</span>
                    </div>
                </div>

                <input type="submit" value="Se connecter" id="loginBtn">
                <input type="submit" value="S'enregister" id="signupbtn">
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



        // toggle login signUp form

        const signUp = document.getElementById('signUp');
        const login = document.getElementById('login');
        const linkSignUp = document.getElementById('linkSignUp');

        const signupbtn = document.getElementById('signupbtn');
        const loginBtn = document.getElementById('loginBtn');

        const formTitle = document.getElementById('formTitle');


        const linkLogin = document.getElementById('linkLogin');

        linkSignUp.style.display = "none";
        signUp.style.display = "none";
        signupbtn.style.display = "none";

        const toggleckeckShow = () => {

            let y = "S'enregister";
            signupbtn.style.display = "block";
            login.style.display = "none";
            loginBtn.style.display = "none";
            signUp.style.display = "flex";
            linkSignUp.style.display = "flex";
            linkLogin.style.display = "none";
            formTitle.innerText = y;


        }

        const toggleckeckShowLogin = () => {
            let x = "Connexion";
            login.style.display = "flex";
            signUp.style.display = "none";
            signupbtn.style.display = "none";
            formTitle.innerText = "Connexion"
            loginBtn.style.display = "block";
            linkSignUp.style.display = "none";
            linkLogin.style.display = "flex"
            ckeckShow.checked == false;
            formTitle.innerText = x;

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
