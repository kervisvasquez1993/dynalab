<?php 
/**
 * Template Name: Contacto
 * 
 * 
 */
$iconos = get_post_meta( get_the_ID(), 'campos_repetidos', true );
$terapeutica = get_page_by_title('ÁREAS TERAPÉUTICAS');
$dynalab = get_page_by_title('DYNALAB');
$dynalab_id = $dynalab->ID;
$args = array(
     'posts_per_page' => 1,
     'post_type' => 'post',
     'order' => 'rand'
   );
$farmaco2 = new WP_Query($args);

 get_header();
 contenido_hero();
?>


</header>

<main id="primary">
     <section>
          <div class="contacto-flex">
                <?php foreach($iconos as $icono):?>
                    <div class="p-4">
                      <div class="flex-contacto">
<<<<<<< HEAD
                            <img class="imagen-card" src="<?php echo $icono['image'];?>">
                            <p class="descripcion_contacto"><?php  echo $icono['description']; ?></p>
=======
                            <img class="imagen-card" src="<?php echo $icono[image];?>">
                            <p class="descripcion_contacto"><?php  echo $icono[description]; ?></p>
>>>>>>> 6b1d4b778072f1a7995f4bb5d1f6c13cc45ae94f
                      </div>
                    </div>
               <?php endforeach;?> 
          </div>
     </section>
<?php 
$titulo_dynalab = "CONOCE DYNALAB";
$contenido = "En Dynalab estamos comprometidos con tu salud. Nuestra empresa se centra en otorgar una solución comercial al sector farmacéutico venezolano, ofertando medicamentos de la más alta calidad.";
$imagen = "home_slider.jpg";
$nombre_enlace = "Conoce Dynalab";


banner_section($titulo_dynalab, $contenido,$imagen,$dynalab_id,$nombre_enlace);?>


<section class=" h-50vh">
  <article class="flex_blog">
        <div class="imagen_destacada_front">
           <?php 
              while($farmaco2->have_posts()):
                $farmaco2->the_post();
                 the_post_thumbnail( $post->ID, array('class'=> '') ); ?>
        </div>
        <div class="content_post">
                <h2><?php the_title();?></h2>
                <p><?php the_excerpt();?></p>
                
        </div>
  </article>
  <?php
        endwhile;wp_reset_postdata();
    ?>

</section>


<?php 
$titulo_dynalab2 = "ÁREAS TERAPEUTICAS";
$contenido2 = "Buscamos atender y satisfacer las necesidades del paciente, por ello contamos con un amplio portafolios de medicamentos a usarse en distintas áreas terapéuticas.";
$imagen2 = "contacto_terapeuticas.jpg";
$nombre_enlace2 = "CONOCES LAS ÁREAS TERAPEUTICAS";
$id2 = $terapeutica->ID;
banner_section($titulo_dynalab2, $contenido2,$imagen2,$id2,$nombre_enlace2);
?>




    
</main><!-- #main -->

<?php get_footer();?>