<!-- ======================== header  ======================== -->
<header>
    <nav>
        <a href="https://meca-dom-plus.vercel.app/" class="logo">
            <img src="assets/images/Logotype_Mecadom.png" alt=" Logo MECADOM" />
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
            </div>

            <div class="nav-btn">
                @guest
                    <a href="{{ route('login') }}" class="login">Se connecter</a>
                    <a href="{{ route('register') }}" class="register hidden">Profile</a>
                @endguest
                @auth
                    <a href="{{ route('logout') }}" class="register">logout</a>
                    <a href="{{ route('profile') }}" class="login">profile</a>
                @endauth
            </div>
        </div>
    </nav>
</header>
