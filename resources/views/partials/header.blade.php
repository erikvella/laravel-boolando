<header>


    <div class="header-top">

        <!-- menu relativo al genere di articoli da mostrare -->
        <div class="container-head d-flex ">
            <div>
                <nav>
                    <ul> @dump(Route::currentRouteName())
                        <li>
                            <a class="active" href="{{ route('donna') }}">Donna</a>
                            <a href="{{ route('uomo') }}">Uomo</a>
                            <a href="{{ route('bambino') }}">Bambino</a>
                            <a href="{{ route('home') }}">Home</a>
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
