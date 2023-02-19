 @include('header.header')
 @include('social.redes')
 @include('menu.menu')
 <section id="inner-headline">
     <div class="container">
         <div class="row">
             <div class="span4">
                 <div class="inner-heading">
                     <h2>Fale conosco</h2>
                 </div>
             </div>
             <div class="span8">
                 <ul class="breadcrumb">
                     <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                     <li><a href="{{ route('home.index') }}">Home</a><i class="icon-angle-right"></i></li>
                     <li class="active">Contato</li>
                 </ul>
             </div>
         </div>
     </div>
 </section>
 <section id="content">
     <div class="container">
         <div class="row">
             <div class="span6">
                 <h4><strong>Faça a sua reserva</strong></h4>
                 <p><b>Fone:</b> (11) 961769569</p>
                 <p><b>Endereço:</b> R. Prof. Odolfo Medeiros,
                     1539 - CENTRO,
                     Carolina - MA, 65980-000 </p>
             </div>
             <div class="span6">
                 <iframe
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.169270680026!2d-47.47637008805243!3d-7.334878827576616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92d82bfde4e562f5%3A0x3729a5d57147edd0!2sPousada%20Villa%20Rica!5e0!3m2!1spt-BR!2sbr!4v1676826757174!5m2!1spt-BR!2sbr"
                     width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                     referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0"
                     allowfullscreen></iframe>
             </div>
         </div>
     </div>
 </section>
 @include('footer.footer')
