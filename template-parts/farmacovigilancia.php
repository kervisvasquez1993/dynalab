<?php 
/**
 * Template Name: FarmacoVigilancia
 * **/
get_header();
contenido_hero();
?>


</header>


<main class="container conatiner-flex">
    
    <div class="farmacovigilancia_wrap">
        
             <img src="<?php the_field('imagen_cabecera')?>" alt="imagen cabecera">
        

        <div>
              <?php 
              while(have_posts()):
                    the_post();
                    the_content();
              endwhile;
              ?>
        </div>
     </div>   
    
    <div class="farmacovigilancia">
         <?php the_field('contacto_form');?>
    </div>          

</main>
<?php 
$titulo_dynalab = "Dynalab";
$contenido = "En Dynalab estamos comprometidos con tu salud. Nuestra empresa se centra en otorgar una solución comercial al sector farmacéutico venezolano, ofertando medicamentos de la más alta calidad.";
$imagen = "banner_dynalab.jpg";
$nombre_enlace = "Conoce Nuestros Productos";

banner_section($titulo_dynalab, $contenido,$imagen,$productos_id,$nombre_enlace)

?>

<?php get_footer();?>