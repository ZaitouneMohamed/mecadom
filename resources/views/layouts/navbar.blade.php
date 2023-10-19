    <!-- ======================== header  ======================== -->
    <header>
        <nav>
            <div class="flex-1">
                <a href="{{ route('home') }}" class="logo w-min">
                    <img src="{{ asset('assets/images/Logotype_Mecadom.png') }}" class="w-[150px]" alt=" Logo MECADOM" />
                </a>
            </div>
            <button onclick="showMenu()" id="hamburger_menu" class="button_menu">
                <i id="bxBtnmenu" class="bx bx-menu"></i>
                <i id="bxBtnx" style="display: none" class="bx bx-x"></i>
            </button>
            <div class="menu">
                <div class="links-menu">
                    <a href="{{ route('services') }}" class="link-menu">Accueil</a>
                    <a href="{{ route('services') }}" class="link-menu">Services</a>
                    <a href="#" class="link-menu">Boutique</a>
                </div>
                <div class="nav-btn">
                    @guest
                        <a href="{{ route('login') }}" class="login">Se connecter</a>
                    @endguest
                    @auth
                        <a href="#" class="register hidden">Profile</a>
                    @endauth
                </div>
            </div>
        </nav>
    </header>
