 @include('header.header')
 @include('social.redes')
 @include('menu.menu')
 <section id="inner-headline">
     <div class="container">
         <div class="row">
             <div class="span4">
                 <div class="inner-heading">
                     <h2>Café da Manhã</h2>
                 </div>
             </div>
             <div class="span8">
                 <ul class="breadcrumb">
                     <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                     <li><a href="{{route('home.index')}}">Home</a><i class="icon-angle-right"></i></li>
                     <li class="active">Café da manhã</li>
                 </ul>
             </div>
         </div>
     </div>
 </section>
 <section id="content">
     <div class="container">
         <div class="row">
             <div class="span6">
                 <h4>Experimente as delícias da <strong>chapada</strong></h4>
                 <p>
                    Um bom café pela manhã é sempre bem-vindo para começar o dia bem, não é mesmo? 
                    O café da manhã é uma das refeições mais importantes do dia. É ele que dá energia
                    para começar as atividades e seguir com a rotina.
                 </p>
                 <p>
                    Para conhecer as nossas belezas naturais é preciso estar bem alimentado.
                    Pensando nisso, nós da Pousada Villa Rica, desenvolvemos um cardápio sortido
                    com os sabores da chapada das mesas. 
                 </p>
                 <p>
                    Vamos dar a você uma pequena degustação do nosso menu que vai desde cuscuz, 
                    tapioca, melancia, bolinhos fritos, pão de queijo, bolo de arroz, fubá de milho,
                    bolo cacete e mangulão.
                 </p>
             </div>
             <div class="span6">
                 <!-- start flexslider -->
                 <div class="flexslider">
                     <ul class="slides">
                         <li>
                             <img src="img/cafe-manha/cafe1.webp" alt="Villa Rica" style="height: 300px; width: 600px"  />
                         </li>
                     </ul>
                 </div>
                 <!-- end flexslider -->
             </div>
         </div>
     </div>
 </section>
 @include('footer.footer')
