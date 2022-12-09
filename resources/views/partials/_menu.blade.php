<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/img/odellya-logo.png') }}" alt="">
            <!--  <h1>ECOLE 2.0<span>.</span></h1>-->
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/" class="{{ set_active_route('accueil') }}">Accueil</a></li>

                <li><a href="{{ route('about') }}" class="{{ set_active_route('about') }}">Qui sommes-nous</a>
                </li>


                {{-- <li><a href="{{ route('services') }}" class="{{ set_active_route('services') }}">Nos services</a>
                </li> --}}

                <li class="dropdown"><a href="#" class="{{ set_active_route('services') }}"><span>Nos
                            services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        {{-- <li><a href="#">Dropdown 1</a></li> --}}
                        {{-- <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="{{ route('services') }}" >Tous nos services</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="{{ route('services') }}">Tous nos services</a></li>
                        <li><a href="#">Nom de domaine</a></li>
                        <li><a href="#">Hébergeur web, hébergeur mail professionnel</a></li>
                        <li><a href="#">Client web mail, client mobile mail</a></li>
                        <li><a href="#">Base de données</a></li>
                        <li><a href="#">Solution mailing professionnel</a></li>
                        <li><a href="#">Media sociaux professionnels</a></li>
                    </ul>
                </li>



                <li><a href="{{ route('contact') }}" class="{{ set_active_route('contact') }}">Contact</a></li>


                @if (Route::has('login'))
                    @auth
                        <li class="dropdown">
                            <a href="#"
                                class="{{ set_active_route('ouvrages') }}"><span>{{ Auth::user()->pseudo ?? Auth::user()->name }}</span>
                                <i class="bi bi-chevron-down dropdown-indicator"></i></a>

                            <ul>

                                <li><a href="#">Bibliothèque</a></li>


                                <li>
                                    <a href="{{ route('logout') }}" class="dropdown-item "
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Déconnexion
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="/login"
                                class="{{ set_active_route('login') }} {{ set_active_route('register') }} ">Intranet</a>
                        </li>
                    @endauth
                @endif
                {{-- <li class="dropdown"><a href="#"><span>Création du compte</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="connexion/connexion.html">Compte étudiant</a></li>
                        <!--  <li class="dropdown"><a href="#"><span>Compte professeur</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>-->
                        <li><a href="connexion/connexionP.html">Compte professeur</a></li>
                    </ul>
                </li> --}}
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
