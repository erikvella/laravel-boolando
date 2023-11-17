<header>


    <div class="header-top">

        <!-- menu relativo al genere di articoli da mostrare -->
        <div class="container-head d-flex ">
            <div>
                <nav>
                    <ul>
                        <li>
                            {{-- facciamo un ternario per impostare la classe active sull'elemento corrispondente alla pagina che sto vedendo --}}
                            <a class="{{ Route::currentRouteName() == 'donna' ? 'active' : '' }}"
                                href="{{ route('donna') }}">Donna</a>
                            <a class="{{ Route::currentRouteName() == 'uomo' ? 'active' : '' }}"
                                href="{{ route('uomo') }}">Uomo</a>
                            <a class="{{ Route::currentRouteName() == 'bambino' ? 'active' : '' }}"
                                href="{{ route('bambino') }}">Bambino</a>
                            <a class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                                href="{{ route('home') }}">Home</a>
                        </li>
                    </ul>
                </nav>
            </div>


            <div class="py-10">
                <img id="logo" src="/assets/boolean-logo.png" alt="logo boolean">
            </div>

            <!-- menu relativo all'user -->
            <div>
                <nav>
                    <ul>
                        <li>
                            <a href="#"><i class="fa-solid fa-user"></i></a>
                            <a href="#"><i class="fa-solid fa-heart"></i></a>
                            <a href="#"><i class="fa-solid fa-lock"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>



    </div>


</header>
