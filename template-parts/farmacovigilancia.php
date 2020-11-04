<?php 
/**
 * Template Name: FarmacoVigilancia
 * **/
get_header();
contenido_hero();
<<<<<<< HEAD
$todo_los_productos = get_page_by_title('DYNALAB');
$id = $todo_los_productos->ID;
=======
$dynalab = get_page_by_title('DYNALAB');
$dynalab_id = $dynalab->ID;
>>>>>>> 6b1d4b778072f1a7995f4bb5d1f6c13cc45ae94f
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
$nombre_enlace = "Conoce Dynalab";

<<<<<<< HEAD
banner_section($titulo_dynalab, $contenido,$imagen,$id,$nombre_enlace);
=======
banner_section($titulo_dynalab, $contenido,$imagen,$dynalab_id,$nombre_enlace);
>>>>>>> 6b1d4b778072f1a7995f4bb5d1f6c13cc45ae94f
?>


<?php get_footer();?>