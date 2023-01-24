@include('header/header')
<body>
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="container">
                @include('social/redes')
                @include('menu/menu')
            </div>
        </header>
        <!-- end header -->
        <!-- Slide -->
        @include('carrossel/slide')
        <!-- Slide Fim -->
        <!-- Chamada -->
        @include('chamada/chamada')
        <!-- Chamada fim -->
        <section id="content">
            <div class="container">
                @include('missao/missao')
                <!-- divider -->
                <div class="row">
                    <div class="span12">
                        <div class="solidline">
                        </div>
                    </div>
                </div>
                <!-- end divider -->
                <!-- Quartos -->
                @include('quartos/quartos')
                <!-- Quartos fim -->
                <!-- divider -->
                <div class="row">
                    <div class="span12">
                        <div class="solidline">
                        </div>
                    </div>
                </div>
                <!-- divider fim -->
                @include('atrativos/atrativos')
            </div>
        </section>
        <section id="bottom">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="aligncenter">
                            <div id="twitter-wrapper">
                                <div id="twitter">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@include('footer/footer')
