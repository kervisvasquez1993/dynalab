<?php 
get_header();
$sliders = get_post_meta( get_the_ID(), 'slider', true );
$dynalab = get_page_by_title('DYNALAB');
$dynalab_id = $dynalab->ID;
//$titulo_dynalab = get_field('conoce_dynalab');
$conoce_dynala = get_field('contenido_dybalab');
$args = array(
  'posts_per_page' => 1,
  'post_type' => 'post',
  'order' => 'rand'
);
$farmaco2 = new WP_Query($args);
$productos = get_page_by_title('PRODUCTOS  DYNALAB');

?>

<div class="slider" id="slider" style="height: 500px !important">
              <ul class="slides" style="height: 450px !important">
                  
                <?php foreach($sliders as $slider): ?>
                  <li>
                    <img src="<?php echo $slider['image'];?>"> <!-- random image -->
                  </li>
                <?php endforeach;?>
              </ul>
              <h3 class="titulo-slider">
                 <span class="titulo_slider_1">Comprometidos</span> <span class="titulo_slider_2">Con tu Salud</span>
              </h3>
</div>
        
      
</header>

<?php
 
?>
<div class="container_productos flex-none">
    <div class="">
       <?php productos();?>
    </div>
    <div class="boton-productos">
        <a href="<?php the_permalink($productos->ID) ; ?>" class="btn btn-boton2">Ver Todos los Productos</a> 
    </div>
</div>

<?php 
$titulo_dynalab = 'CONOCE DYNALAB';
$titlulo_contenido = 'En Dynalab estamos comprometidos con tu salud. Nuestra empresa se centra en otorgar una solución comercial al sector farmacéutico venezolano, ofertando medicamentos de la más alta calidad.';
$imagen = 'home_slider.jpg';
$nombre_enlace = "Conoce Dynalab";

banner_section($titulo_dynalab, $titlulo_contenido,$imagen,$dynalab_id,$nombre_enlace)?>


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
                <a href="<?php the_permalink();?>">Leer Más</a>
        </div>
  </article>
  <?php
        endwhile;wp_reset_postdata();
    ?>

</section>




<?php get_footer();?>