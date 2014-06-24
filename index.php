<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Voyastic">
    <meta name="description" content="Tandem Consultoria Legal">
    <meta name="keywords" content="">
	<title>TANDEM LEGAL</title>
<link rel="stylesheet" type="text/css" href="css/base.css">
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/skeleton.css">
<link rel="stylesheet" type="text/css" href="fonts/fonts.css">
  <link rel="stylesheet" type="text/css" media="all" href="style.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.fancybox.js?v=2.0.6"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
<script src="js/jquery.slicknav.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this); // assigning the object
     
        $(window).scroll(function() {
            var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
             
            // Put together our final background position
            var coords = '50% '+ yPos + 'px';
 
            // Move the background
            $bgobj.css({ backgroundPosition: coords });
        }); 
    });    
});
    // Create HTML5 elements for IE
  
document.createElement("article");
document.createElement("section");


function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('.menu a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('.menu a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}
$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 360) {
        $('.fade').fadeIn(1000);
    } else {
        $('.fade').fadeOut();
    }
    var x = $(this).scrollTop();
    if (x > 1000) {
        $('.fade2').fadeIn(1000);
    } else {
        $('.fade2').fadeOut();
    }
});
</script>
</head>
<body>
<section id="home" data-type="background" data-speed="10">
<div class="container">
	<article class="three columns logo"><img src="images/logotipo.png" alt="logotipo Tandem"></article>
    <article class="twelve columns">
        <ul id="menu">            
            <a href="index.php#home"><li>Home</li></a>
            <a href="index.php#about"><li>Nosotros</li></a>
            <a href="index.php#services"><li>Servicios</li></a>
            <a href="index.php#abogados"><li>Abogados</li></a>
            <a href="index.php#publicaciones"><li>Publicaciones</li></a>
            <a class="modalbox" href="#inline"><li>Contacto</li></a>

        </ul>
<script type="text/javascript">
$(document).ready(function(){
    $('#menu').slicknav();
});
</script>
    </article>
</div>  
<div class="container frase">
    <h1>CONTAMOS CON UN POOL DE ABOGADOS ASOCIADOS ALTAMENTE ESPECIALIZADOS EN DISTINTAS ÁREAS DEL DERECHO.</h1>
</div>
</section>   
     
<section id="about" data-type="background" data-speed="10">
   
    <div class="container fade">
       <div class="sixteen columns"> 
                <div class="line"></div>
<h2>CONÓCENOS</h2> <h5>TANDEM CONSULTORES LEGALES, S.C.</h5></div>
        <div class="seven columns">
           <p>Somos una firma de abogados constituida desde 2010 como Sociedad Civil, con base de operaciones en la Ciudad de Aguascalientes, centro neurálgico de México.  Nuestra filosofía y experiencia nos permiten ofrecer servicios jurídicos de alta calidad y conforme a las necesidades específicas de cada uno de nuestros clientes. </p><p> 

Nuestros servicios son desarrollados con una alta especialidad, pero además, con total transparencia y honradez, y con plena responsabilidad el deber de un abogado frente a su cliente.

</p></div>
                <div class="seven columns"><p>Tenemos como premisa el servicio y la atención eficaz, en pocas palabras, ofrecemos la atención que nos gustaría recibir en temas legales.  Ofrecemos soluciones para la prevención de contingencias de carácter legal, minimización de riesgos jurídicos en la toma de decisiones, así como la asesoría legal que explique al cliente el alcance de las obligaciones y condiciones que se derivan de la actividad cotidiana en la consecución de los objetivos trazados.  </p>
<p>
De esta manera, en el proceso de toma de decisiones el cliente contará con información de calidad, previamente analizada y dictaminada por expertos, que clarifiquen el impacto o beneficio que puede causar.
</p></div>
    </div>
</section>
<section id="services" data-type="background" data-speed="10">
        <div class="container fade2">
       <div class="sixteen columns"> 
                <div class="line"></div>
<h2>ÁREAS DE PRÁCTICA</h2></div>
        <div class="seven columns">
           <p>Consultoría, análisis y elaboración de estudios jurídicos, así como el litigio y defensa en distintas áreas del Derecho, como en  el ámbito corporativo, mercantil, civil, administrativo y fiscal.  La prestación de servicios incluye la normatividad local, nacional e internacional.
</p><p> 
Nuestra experiencia en servicios jurídicos nos cualifica para la asesoría, elaboración y dictaminación de contratos y convenios; de igual forma, sobre los actos corporativos que deben llevar a cabo las empresas constituidas en sociedad en la relación con su funcionamiento interno así como de cara a sus empleados y socios comerciales.
</p><p> 
Las áreas de especialización de nuestro despacho  permiten ofrecer la realización de auditorías legales para revisar, adecuar y normalizar todos los procedimientos jurídico-administrativos inherentes al funcionamiento de los negocios y de la empresa.  </p><p> 

Nuestros servicios son desarrollados con una alta especialidad, pero además, con total transparencia y honradez, y con plena responsabilidad el deber de un abogado frente a su cliente.

</p></div>
                <div class="seven columns"><p>TANDEM CONSULTORES LEGALES, S.C. otorga el apoyo en el trámite ante las autoridades administrativas, locales, federales y de las entidades federativas, para realizar los registros, autorizaciones, permisos y licencias necesarias para la función efectiva un negocio.</p><p> 


Buscamos el beneficio de entidades y organismos públicos ofreciendo  la elaboración, análisis y dictaminación de iniciativas normativas, revisión y actualización de procedimientos jurídico-administrativos, elaboración de normatividad para funcionamiento interno, entre otros.


</p></div>
    </div></section>

<section id="serv" data-type="background" data-speed="10">
<div class="container">
    <article class="four columns">
        <h3>DERECHO CORPORATIVO.</h3>
        <ul>
            <li>Creación de empresas</li>
            <li>Actas de asambleas</li> 
            <li>Nulidad de asambleas</li>
            <li>Admisión y expulsión de socios</li>
            <li>Protocolizaciones</li>
            <li>Emisión de acciones</li>
            <li>Libros corporativos</li>
            <li>Capitalizaciones</li>
            <li>Escisión y fusión de empresas y reestructuraciones.</li>
        </ul>
    </article>
 <article class="four columns">
        <h3>DERECHO CIVIL Y MERCANTIL.</h3>
        <ul>
            <li>Contratos</li>
<li>Convenios</li>
<li>Asuntos hipotecarios</li>
<li>Seguros y fianzas</li>
<li>Juicios mercantiles y civiles</li>
 
        </ul>
    </article>
        <article class="four columns">
        <h3>DERECHO FISCAL Y ADMINISTRATIVO.
</h3>
        <ul>
            <li>Creación de empresas</li>
            <li>Actas de asambleas</li>
            <li>Nulidad de asambleas</li>
            <li>Admisión y expulsión de socios</li>
            <li>Protocolizaciones</li>
            <li>Emisión de acciones</li>
            <li>Libros corporativos</li>
            <li>Capitalizaciones</li>
            <li>Escisión y fusión de empresas y reestructuraciones.</li>
        </ul>
    </article>
     <article class="four columns">
        <h3>MARCAS Y PATENTES.</h3>
        <ul>
            <li>Patentes</li>
<li>Marcas</li>
<li>Derechos de autor</li>
<li>Trámite de renovación de registros y excesiones de derechos.</li>
            
        </ul>
    </article>
</div>
<br>
<div class="container">
    <article class="four columns">
        <h3>DERECHO LABORAL.</h3>
        <ul>
            <li>Relaciones de trabajo: contratación 
 y terminación.</li>
<li>Procedimientos administrativos y
seguridad social.</li>

            
        </ul>
    </article>
    <article class="four columns">
         <h3>LITIGIO Y 
AMPAROS.</h3>
        <ul>
            <li>En materia fiscal, administrativos, fiscal y civil.
</li>
    </article>
    <article class="eight columns">
         <h3>DERECHO LABORAL.</h3>
        <ul>
            <li>Civiles (arrendamiento, donaciones, comodatos, etc.)</li>
<li>Mercantiles (compraventas, asociaciones en participación, joint ventures, etc.) </li>
<li>Laborales (contratos de trabajo, convenios colectivos, reglamentos interiores de trabajo, etc.).</li>
    </article>
</div>
</section>
<section id="abogados">
    <article class="container">
     <div class="sixteen columns"> 
                <div class="line"></div>

<h2>ABOGADOS</h2></div>
<div class="seven columns">
<p>Contamos con los mejores abogados asociados altamente calificados con una amplia experiencia y conocimiento de las leyes y regulaciones, respondiendo con excelencia a las necesidades de los clientes. </div>
</p></article>
<article class="container">
  <div class="flip"> 
        <div class="card"> 
            <div class="face front"> 
             <!-- <img src="images/profile.png">-->
                <h5>ARMANDO ROBLEDO MÁRQUEZ</h5>
                <p>Abogado, académico y socio fundador de TANDEM CONSULTORES LEGALES, S.C.  </p>
                <ul>
                    <li>Licenciado en Derecho (1997)</li>
                    <li>Maestro en Derecho con especialidad en Derecho Fiscal (2005) Universidad Autónoma de Aguascalientes</li>
                    <li>Maestro en Impuestos (2000) por el Instituto de Especialización para Ejecutivos, A.C.</li> 
                    <li>Doctor en Materia Fiscal (2008) por la Universidad Autónoma de Durango. </li>
                </ul>
            </div> 
            <div class="face back"> 
                                <h5>ARMANDO ROBLEDO MÁRQUEZ</h5>

                <p>Su área de especialización es el Derecho administrativo y fiscal.  Ha ejercido como abogado litigante en las áreas del Derecho mercantil y tributario; además, trabajo para el Servicio de Administración Tributaria de la SHCP (1997-1999) y fungió como Director General Jurídico de la Secretaría de Finanzas del Gobierno estatal (2004-2010), además de haber formado parte del Consejo de la Judicatura estatal (2009-2010).</p>
 <p>
En la academia, ha impartido distintos cursos en materia tributaria y administrativa, tanto en cursos a nivel de licenciatura como en postgrados y foros especializados.  </p>
 <p>
Actualmente es profesor de la materia de Derecho fiscal en la Licenciatura en Derecho de la Universidad Autónoma de Aguascalientes.  Cuenta con diversas publicaciones relacionadas con el ámbito fiscal.  Maneja de manera fluida el idioma inglés.</p>
            </div> 
        </div> 
    </div> 
      <div class="flip"> 
        <div class="card"> 
            <div class="face front"> 
             <!-- <img src="images/profile.png">-->
                <h5>JOSÉ MANUEL LÓPEZ LIBREROS</h5>
                <p>Abogado, académico y socio fundador de TANDEM CONSULTORES LEGALES, S.C.  </p>
                <ul>
                    <li>Licenciado en Derecho por la Universidad Autónoma de Aguascalientes (1999)</li>
  <li>Master en Derecho de la Unión Europea (2002) </li>
  <li>Doctor en Derecho por la Universidad Carlos III de Madrid (2008).  
 </li>
                </ul>
            </div> 
            <div class="face back"> 
                                <h5>JOSÉ MANUEL LÓPEZ LIBREROS</h5>

                <p>Derecho mercantil, corporativo, administrativo e internacional. Se ha desempeñado como abogado litigante en las áreas del Derecho privado, además de haber sido Coordinador jurídico del Gobierno estatal (2008-2010).En el área académica, ha dado cursos en postgrados relacionados con el área del Derecho corporativo, administrativo, derechos humanos y derecho internacional; y actualmente es investigador por parte de la Universidad Autónoma de Aguascalientes.</p>
<p>Cuenta con la publicación de diversos artículos en relación al comercio de mercancías y servicios en los sistemas jurídico-comerciales del TLCAN, la UE y la OMC; así como en materia de derecho internacional y los derechos humanos.  Actualmente es profesor de la materia Sistemas Jurídicos Contemporáneos y Derecho internacional público en la Licenciatura en Derecho de la Universidad Autónoma de Aguascalientes; además de dar cursos en otras instituciones públicas y privadas de la región.  Domina de manera fluida el idioma inglés, y además, maneja el idioma francés.</p>
 </p>
 <p>
Actualmente es profesor de la materia de Derecho fiscal en la Licenciatura en Derecho de la Universidad Autónoma de Aguascalientes.  Cuenta con diversas publicaciones relacionadas con el ámbito fiscal.  Maneja de manera fluida el idioma inglés.</p>
            </div> 
        </div> 
    </div> 
     <div class="flip"> 
        <div class="card"> 
            <div class="face front"> 
             <!-- <img src="images/profile.png">-->
                <h5>LAURA ELENA LÓPEZ CARMONA
</h5>
                <p>Abogada, académica y socia fundadora de TANDEM CONSULTORES LEGALES, S.C.  </p>
                <ul>
                    <li>Licenciado en Derecho por la Universidad Autónoma de Aguascalientes (2011).
</li>
                  
                </ul>
            </div> 
            <div class="face back"> 
                                <h5>LAURA ELENA LÓPEZ CARMONA
</h5>

                <p>Derecho civil, familiar, corporativo y administrativo. Se ha desempeñado como abogada litigante en las áreas del Derecho privado y público, además de haber sido encargada de la Oficina regional 2 de la Comisión de Apelación y Arbitraje del Deporte.</p>
<p>Actualmente funge como catedrática en diversas instituciones locales, en el ámbito del Derecho civil y familiar.
</p>
            </div> 
        </div> 
    </div> 
<script type="text/javascript">    $('.flip').mouseover(function(){
        $(this).find('.card').addClass('flipped').mouseleave(function(){
            $(this).removeClass('flipped');   
        });
      
        return false;

    });</script>
</article>
</section>

<div id="inline">
    <h2>Contáctanos</h2>

    <form id="contact" name="contact" action="#" method="post">
        <label for="name">Nombre</label>
        <input type="name" id="name" name="name" class="txt">
        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" class="txt">
        <br>
        <label for="msg">Mensaje</label>
        <textarea id="msg" name="msg" class="txtarea"></textarea>
        
        <button id="send">Enviar</button>
    </form>
</div>
<script type="text/javascript">
    function validateEmail(email) { 
        var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return reg.test(email);
    }

    $(document).ready(function() {
        $(".modalbox").fancybox();
        $("#contact").submit(function() { return false; });

        
        $("#send").on("click", function(){
            var emailval  = $("#email").val();
            var msgval    = $("#msg").val();
            var msglen    = msgval.length;
            var mailvalid = validateEmail(emailval);
            
            if(mailvalid == false) {
                $("#email").addClass("error");
            }
            else if(mailvalid == true){
                $("#email").removeClass("error");
            }
            
            if(msglen < 4) {
                $("#msg").addClass("error");
            }
            else if(msglen >= 4){
                $("#msg").removeClass("error");
            }
            
            if(mailvalid == true && msglen >= 4) {
                // if both validate we attempt to send the e-mail
                // first we hide the submit btn so the user doesnt click twice
                $("#send").replaceWith("<em>Enviando mensaje...</em>");
                
                $.ajax({
                    type: 'POST',
                    url: 'sendmessage.php',
                    data: $("#contact").serialize(),
                    success: function(data) {
                        if(data == "true") {
                            $("#contact").fadeOut("fast", function(){
                                $(this).before("<p><strong>Su mensaje ha sido enviado exitosamente. Gracias por ponerte en contacto con nosotros.</strong></p>");
                                setTimeout("$.fancybox.close()", 2000);
                            });
                        }
                    }
                });
            }
        });
    });
</script>

    </article>

</section>
<section id="publicaciones">
     <article class="container">
     <div class="sixteen columns"> 
                <div class="line"></div>

<h2>PUBLICACIONES RECIENTES</h2></div>
<?php 
    require($_SERVER['DOCUMENT_ROOT'] . '/publicaciones/wp-load.php'); 
    $args = array(
        // 'cat' => 4, // Only source posts from a specific category
        'posts_per_page' => 3 // Specify how many posts you'd like to display
    );
    $latest_posts = new WP_Query( $args );  
    if ( $latest_posts->have_posts() ) {
        while ( $latest_posts->have_posts() ) {
            $latest_posts->the_post(); ?>
  
<div class="en style five columns">

        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    <?php if ( has_post_thumbnail() ) { ?>
        <p class="post_thumbnail"><?php the_post_thumbnail(); ?></p>
    <?php } ?>
            <h4 class="post_title"><?php the_title(); ?></h4>
        </a>
        <p class="post_time">Posted on <?php the_time('l jS F, Y') ?></p>
        <?php the_excerpt(); ?>


    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <button class="ver"> Seguir leyendo..</button> </a></div>

<? } 
        } else {
        echo '<h1>There are no posts available</h1>';
    }
    wp_reset_postdata();
?>      
</article>
</section>




<footer>
    <section class="container">
        <article class="four columns"><img src="images/logotipoazul.png"></article>
        <article class="six columns"><p>DIRECCIÓN:<br><br>
San Vicente 203, Fracc. San Cayetano,<br>C.P. 20010, Aguascalientes, Ags., MÉXICO.
</p></article>
        <article class="six columns space"><br><p>
          Tel: +52 (449) 9149780</p>
         <a href="mailto:
 &#099;&#111;&#110;&#116;&#097;&#099;&#116;&#111;&#064;&#116;&#097;&#110;&#100;&#101;&#109;&#108;&#101;&#103;&#097;&#108;&#046;&#109;&#120;">
 &#099;&#111;&#110;&#116;&#097;&#099;&#116;&#111;&#064;&#116;&#097;&#110;&#100;&#101;&#109;&#108;&#101;&#103;&#097;&#108;&#046;&#109;&#120;</a>
        </article>
    </section>
            <hr class="container">
<article class="container center">
    <p>TANDEM CONSULTORES LEGALES © 2014 DERECHOS RESERVADOS</p>
</article>
</footer>
</body>
</html>