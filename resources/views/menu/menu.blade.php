<div id="wrapper">
    <header>
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="logo">
                        <a href="{{ route('home.index') }}"><img src="img/logovillarica.webp" alt="villa rica" class="logo" style="height: 50px" /></a>
                    </div>
                </div>
                <div class="span8">
                    <div class="navbar navbar-static-top">
                        <div class="navigation">
                            <nav>
                                <ul class="nav topnav">
                                    <li class="dropdown">
                                        <a href="{{ route('home.index') }}">Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('sobre.index') }}">Sobre</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('quarto.index') }}">Dormitórios</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('cafe.index')}}">Café da manhã</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contato.index')}}">Contato</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- end navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
