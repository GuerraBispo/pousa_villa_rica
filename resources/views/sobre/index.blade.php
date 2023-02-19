 @include('header.header')
 @include('social.redes')
 @include('menu.menu')
 <section id="inner-headline">
     <div class="container">
         <div class="row">
             <div class="span4">
                 <div class="inner-heading">
                     <h2>Sobre</h2>
                 </div>
             </div>
             <div class="span8">
                 <ul class="breadcrumb">
                     <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                     <li><a href="{{ route('home.index') }}">Home</a><i class="icon-angle-right"></i></li>
                     <li class="active">Sobre</li>
                 </ul>
             </div>
         </div>
     </div>
 </section>
 <section id="content">
     <div class="container">
         <div class="row">
             <div class="span6">
                 <h4>Nossa <strong>história</strong></h4>
                 <p>Estamos localizado em uma das ruas mais bonitas da Chapada das Mesas, 
                 a Rua Prof. Odolfo Medeiros, 1539 centro. Foi contemplada com mangueiras 
                 centenárias e lindos casarões da época colonial que ajudam  a contar uma 
                 parte da nossa história. </p>

                 <p>Levamos esse nome Pousada Villa Rica, pois nossa maior riqueza emana da nossa cultura, ela é cheia
                     de encantos.
                     A nossa diversidade essa mistura nos torna únicos, nós somos acolhedores por natureza está em nosso
                     DNA. </p>

                 <p>Nossa missão é conectar você com o melhor da chapada das mesas nossas cachoeiras,
                     culinária e nosso povo. São o que torna nossa Villa uma das mais ricas do Brasil. Estamos de
                     braços abertos esperando por você e sua família.
                 </p>
             </div>
             <div class="span6">
                 <!-- start flexslider -->
                 <div class="flexslider">
                     <ul class="slides">
                         <li>
                             <img src="img/sobre/1.webp" alt="Villa Rica" style=" width: 600px" />
                         </li>
                         <li>
                             <img src="img/sobre/2.webp" alt="Villa Rica" style=" width: 600px" />
                         </li>
                         <li>
                             <img src="img/sobre/3.webp" alt="Villa Rica" style=" width: 600px" />
                         </li>
                     </ul>
                 </div>
                 <!-- end flexslider -->
             </div>
         </div>
     </div>
 </section>
 @include('footer.footer')
