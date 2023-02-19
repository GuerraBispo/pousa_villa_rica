 @include('header.header')
 @include('social.redes')
 @include('menu.menu')
 <section id="inner-headline">
     <div class="container">
         <div class="row">
             <div class="span4">
                 <div class="inner-heading">
                     <h2>Acomodações</h2>
                 </div>
             </div>
             <div class="span8">
                 <ul class="breadcrumb">
                     <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                     <li><a href="{{route('home.index')}}">Home</a><i class="icon-angle-right"></i></li>
                     <li class="active">Quartos</li>
                 </ul>
             </div>
         </div>
     </div>
 </section>
 <section id="content">
     <div class="container">
         <div class="row">
             <div class="span6">
                 <h4>Conheça o que temos <strong>oferecer</strong></h4>
                 <p>
                     A <b>Pousada Villa Rica</b> é referencia em conforto e qualidade quando o assunto é estadia. 
                     As nossas instalações foram projetadas pensado no seu bem esta e da sua fámilia. Tenha noites 
                     de sono inesqueciveis na chapada das mesas.
                 </p>
                 <p>
                    Todas os nossos quartos possuem duas camas de casais, ar condicionado, televisão, suítes adaptaveis 
                    para pessoas com necessidades especiais. Contamos também com um quarto tamanho fámilia nele possui 5 
                    camas de casais e uma suite.
                 </p>
                 <p>
                    Seja qual for o seu objetivo: comemorações em família, apenas um momento para descansar, até mesmo uma
                    confraternização com a empresa ou encontro de amigos, a Pousada Villa Rica tem a acomodação 
                    certa para você. Aproveite a oportunidade e faça agora mesmo sua reserva.
                 </p>
             </div>
             <div class="span6">
                 <!-- start flexslider -->
                 <div class="flexslider">
                     <ul class="slides">
                         <li>
                             <img src="img/quartos/acomodacao.webp" alt="Villa Rica" style=" height: 400px" />
                         </li>
                         <li>
                             <img src="img/quartos/acomodacao2.webp" alt="Villa Rica" style=" height: 400px" />
                         </li>
                         <li>
                             <img src="img/quartos/acomodacao3.webp" alt="Villa Rica" style=" height: 400px" />
                         </li>
                     </ul>
                 </div>
                 <!-- end flexslider -->
             </div>
         </div>
     </div>
 </section>
 @include('footer.footer')
